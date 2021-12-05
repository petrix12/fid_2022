# Mastering Authentication
##### https://aprendible.com/series/autenticacion


## Video 01: Laravel UI, Breeze, Fortify, Jetstream, Sanctum y Passport


## Video 02: Cómo crear un login desde cero en Laravel
1. Crear proyecto:
    >
        $ laravel new basic
1. Crear base de datos **basic** en MySQL.
1. Configurar .env para base de datos de nombre **basic**.
    >
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=basic
        DB_USERNAME=root
        DB_PASSWORD=
1. Ejecutar migraciones:
    >
        $ php artisan migrate
1. Quitar las rutas existentes en **routes\web.php** y agregar las siguientes:
    >
        Route::view('/', 'welcome');
        Route::view('login', 'login');
        Route::view('dashboard', 'dashboard');
1. Limpiar la vista **welcome** con:
    >
        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Home Soluciones++</title>
            </head>
            <body>
                @include('partials.nav')
                <h1>Home Aprendible</h1>
            </body>
        </html>
1. Crear vista **dashboard** (resources\views\dashboard.blade.php) en base a la vista **welcome**.
    >
        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Dashboard Soluciones++</title>
            </head>
            <body>
                @include('partials.nav')
                <h1>Dashboard Aprendible</h1>
            </body>
        </html>
1. Crear vista **login** (resources\views\login.blade.php) en base a la vista **welcome**.
    >
        <!DOCTYPE html>
        <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Login soluciones++</title>
            </head>
            <body>
                @include('partials.nav')
                <h1>Login Aprendible</h1>
            </body>
        </html>   
1. Crar plantilla **resources\views\partials\nav.blade.php**
    >
        <a href="/">Inicio</a>
        <a href="/login">Login</a>
        <a href="/dashboard">Dashboard</a>
        <a href="#">Logout</a>
1. Realizar el primer commit:
    >
        $ git init
        $ git add .
        $ git commit -m "Proyecto en inicial"
1. Crear formulario para la vista **login**
    >
        ≡
        <body>
            @include('partials.nav')
            <h1>Login Aprendible</h1>
            <pre>{{ Auth::user() }}</pre>
            <form method="POST">
                @csrf
                <label>
                    <input name="email" type="email" placeholder="Email...">
                </label><br>
                <label>
                    <input name="password" type="password" placeholder="Contraseña...">
                </label><br>
                <button type="submit">Login</button>
            </form>
        </body>
        ≡   
1. Crear ruta para el formulario de login en **routes\web.php**
    >
        Route::post('login', function(){
            $credentials = request()->only('email','password');
            // Intentar hacer loguin con las credenciales $credentials
            if(Auth::attempt($credentials)){
                request()->session()->regenerate();
                return redirect('dashboard');
            }
            return redirect('login');
        });
    Agregar a la cabecera:
    >
        use Illuminate\Support\Facades\Auth;
1. Crear usuario con **Tinker**.
    >
        $ php artisan tinker
        >>> User::factory()->create(['email' => 'bazo.pedro@gmail.com'])
    ##### El password definido en **database\factories\UserFactory.php** es **password**
1. Implementar middleware **auth** a la ruta **dashboard** en **routes\web.php**
    >
        Route::view('dashboard', 'dashboard')->middleware('auth');
1. Dar nombre a la ruta **login** en **routes\web.php** en implementar middleware **guest**
    >
        Route::view('login', 'login')->name('login')->middleware('guest');
1. Cambiar constante HOME en **app\Providers\RouteServiceProvider.php**
    Cambiar:
    >
        public const HOME = '/home';
    Por:
    >
        public const HOME = '/dashboard';
1. Modificar plantilla **resources\views\partials\nav.blade.php**
    >
        <a href="/">Inicio</a>
        @guest
        <a href="/login">Login</a>
        @else
        <a href="/dashboard">Dashboard</a>
        <a href="#">Logout</a>
        @endguest
        {{-- TAMBIEN SE PUDO HABER USADO LA DIRECTIVA @auth que funciona al revés de @guest --}}


## Video 03: Cómo funciona la opción recuérdame en Laravel
1. Modificar vista **login** para agregar la opción de recordar sesión.
    >
        <form method="POST">
            @csrf
            <label>
                <input name="email" type="email" placeholder="Email...">
            </label><br>
            <label>
                <input name="password" type="password" placeholder="Contraseña...">
            </label><br>
            <label>
                <input type="checkbox" name="remember">
                Recordar sesión
            </label><br>
            <button type="submit">Login</button>
        </form>
1. Modificar ruta **post login** para incluir la variable boolean de recordar sesión.
    >
        Route::post('login', function(){
            $credentials = request()->only('email','password');
            $remember = request()->filled('remember');
            // Intentar hacer loguin con las credenciales $credentials
            if(Auth::attempt($credentials, $remember)){
                request()->session()->regenerate();
                return redirect('dashboard');
            }
            return redirect('login');
        });
1. Ajustar tiempo de vida de sesión en **.env**
    Cambiar:
    >
        SESSION_LIFETIME=120
    Por:
    >
        SESSION_LIFETIME=180


## Video 04: Validación, mensajes de error y mensajes de sesión
1. Modificar ruta **post login** para incluir reglas de validación.
    >
        Route::post('login', function(){
            $credentials = request()->validate([
                'email' => ['required', 'email', 'string'],
                'password' => ['required', 'string']
            ]);
            $remember = request()->filled('remember');
            // Intentar hacer loguin con las credenciales $credentials
            if(Auth::attempt($credentials, $remember)){
                request()->session()->regenerate();
                return redirect('dashboard')->with('status', 'You are logged in');
            }
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        });
    Agregar a la cabecera:
    >
        use Illuminate\Validation\ValidationException;
1. Modificar vista **login** para agregar las notificaciones de error.
    >
        ≡
        <form method="POST">
            @csrf
            <label>
                <input name="email" type="email" requered autofocus value="{{ old('email') }}" placeholder="Email...">
            </label>
            @error('email')
                {{ $message }}
            @enderror
            <br>
            <label>
                <input name="password" type="password" placeholder="Contraseña...">
            </label>
            @error('password')
                {{ $message }}
            @enderror
            <br>
            <label>
                <input type="checkbox" name="remember">
                Recordar sesión
            </label><br>
            <button type="submit">Login</button>
        </form>
        ≡
1. Modificar la plantilla **resources\views\partials\nav.blade.php**
    >
        <a href="/">Inicio</a>
        @auth
        <a href="/dashboard">Dashboard</a>
        <a href="#">Logout</a>
        @else
        <a href="/login">Login</a>
        @endauth

        @if(session('status'))
            <br>
            {{ session('status') }}
        @endif   
1. Crear controlador para login:
    >
        $ php artisan make:controller Auth/LoginController
1. Crear y definir método **login** en **app\Http\Controllers\Auth\LoginController.php**
    >
        public function login(Request $request, Redirector $redirect){
            $remember = $request->filled('remember');
            if(Auth::attempt($request->only('email', 'password'), $remember)){
                $request->session()->regenerate();
                return $redirect
                    ->intended('dashboard')
                    ->with('status', 'You are logged in');
            }
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }
    Agregar a la cabecera:
    >
        use Illuminate\Validation\ValidationException;
        use Illuminate\Support\Facades\Auth;
        use Illuminate\Routing\Redirector;
1. Modificar ruta **post login** para incluir reglas de validación.
    >
        Route::post('login', [LoginController::class, 'login']);
    Quitar de la cabecera:
    >
        use Illuminate\Validation\ValidationException;
        use Illuminate\Support\Facades\Auth;
    Agregar a la cabecera:
    >
        use App\Http\Controllers\Auth\LoginController;
1. Ejecutar:
    >
        $ php artisan make:request LoginRequest
1. Modificar **app\Http\Requests\LoginRequest.php**
    >
        ≡
        public function authorize()
        {
            return true;
        }
        ≡
        public function rules()
        {
            return [
                'email' => ['required', 'email', 'string'],
                'password' => ['required', 'string']
            ];
        }
        ≡


## Video 05: Cómo cerrar sesión manualmente en Laravel
1. Modificar **resources\views\partials\nav.blade.php** para cerrar sesión
    >
        <a href="/">Inicio</a>
        @auth
        <a href="/dashboard">Dashboard</a>
        <form style="display: inline" action="/logout" method="POST">
            @csrf
            <a href="#" onclick="this.closest('form').submit()">Logout</a>
        </form>
        @else
        <a href="/login">Login</a>
        @endauth

        @if(session('status'))
            <br>
            {{ session('status') }}
        @endif
1. Crear ruta para **logout** en **routes\web.php**
    >
        Route::post('logout', [LoginController::class, 'logout']);
1. Agregar método **logout** al controlador **Login** en **app\Http\Controllers\Auth\LoginController.php**
    >
        public function logout(Request $request, Redirector $redirect){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return $redirect->to('/')->with('status', "You're logged out");
        }


## Video 06: Contraseñas md5 y cómo hacer login en una base de datos existente
1. Crear tabla **usuarios** en la base de datos **basic** con los siguientes campos:
    >
        CREATE TABLE usuarios(  
            id int NOT NULL primary key AUTO_INCREMENT comment 'primary key',
            nombre varchar(255),
            correo varchar(255),
            contrasena varchar(255),
            fecha DATETIME
        ) default charset utf8 comment '';
1. Crear usuario:
    >
        INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`, `fecha`) VALUES (NULL, 'Pedro Bazó', 'bazo.pedro@gmail.com', '123', '2021-04-14 09:48:09');
1. Encriptar contraseña con Tinker:
    >
        $ php artisan tinker
        >>> md5('password')
1. Colocar manualmente el resultado del valor encriptado (5f4dcc3b5aa765d61d8327deb882cf99) en el campo **contrasena** de la **usuarios**

2. Modificar el modelo **User** para que reconozca la tabla **usuarios** como la de usuarios en lugar de la tabla **users**
    >
        ≡
        class User extends Authenticatable
        {
            use HasFactory, Notifiable;

            protected $table = 'usuarios';

            public $timestamps = false;

            ≡

            protected $fillable = [
                'nombre',
                'correo',
                'contrasena',
            ];

            ≡

            protected $hidden = [
                'contrasena'
            ];

            ≡

            protected $casts = [
                'fecha' => 'datetime',
            ];
        }
1. Modificar el método **login** del controlador **Login** (app\Http\Controllers\Auth\LoginController.php)
    >
        public function login(Request $request, Redirector $redirect){
            $remember = $request->filled('remember');
            $user = User::where('correo',$request->email)->first();
            if($user->contrasena === md5($request->password)){
                Auth::login($user);
                $user->update(['contrasena' => Hash::make($request->password)]);
                $request->session()->regenerate();
                return $redirect
                    ->intended('dashboard')
                    ->with('status', 'You are logged in');
            }
            if(Hash::check($request->password, $user->contrasena)){
                Auth::login($user);
                $request->session()->regenerate();
                return $redirect
                    ->intended('dashboard')
                    ->with('status', 'You are logged in');
            }
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }
    Agregar a la cabecera:
    >
        use App\Models\User;
        use Illuminate\Support\Facades\Hash;


## Video 07: Laravel Breeze: cómo funciona el login y registro
1. Crear nueva aplicación Laravel Breeze
    >
        $ laravel new breeze --git
        $ composer require laravel/breeze --dev
        $ php artisan breeze:install
        $ npm install
        $ npm run dev
1. Crear base de datos **breeze** en MySQL.
1. Ejecutar las migraciones:
    >
        $ php artisan migrate


## Video 08: Laravel Breeze - Cómo habilitar y personalizar la verificación de email
1. Implementar en el modelo **User** MustVerifyEmail
    >
        ≡
        class User extends Authenticatable implements MustVerifyEmail
        ≡
1. Copiar en el archivo .env las credenciales de https://mailtrap.io/
    >
        MAIL_MAILER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=7c67f786972696
        MAIL_PASSWORD=8f37b2d25228ba
        MAIL_ENCRYPTION=tls
        MAIL_FROM_ADDRESS=bazo.pedro@gmail.com
        MAIL_FROM_NAME="${APP_NAME}"


## Video 09: Laravel Breeze - Cómo habilitar y personalizar la confirmación de contraseña




## Video 10: Intro & Autenticación básica
1. Crear nueva aplicación Laravel:
    >
        $ composer create-project laravel/laravel authentication "5.*"
1. Crear base de datos **authentication** en MySQL.
1. Configurar .env con la base de datos **authentication**
    >
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=authentication
        DB_USERNAME=root
        DB_PASSWORD=
1. Modificar **app\Providers\AppServiceProvider.php** para evitar error de llave muy extensa.
    >
        ≡
        use Illuminate\Support\Facades\Schema;
        ≡

        class AppServiceProvider extends ServiceProvider
        {
            ≡
            public function boot()
            {
                Schema::defaultStringLength(191);
            }
        }
1. Ejecutar las migraciones:
    >
        $ php artisan migrate
1. Crear un usuario de prueba en la tabla users
    >
        INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (NULL, 'Pedro Bazó', 'bazo.pedro@gmail.com', '2021-04-14 16:43:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, '2021-04-14 16:43:27', '2021-04-14 16:43:27');
    #### Nota: La clave es: password
1. Modificar archivo de rutas **routes\web.php**
    >
        <?php

        use Illuminate\Support\Facades\Route;

        Route::get('/', function(){
            return view('welcome');
        })->middleware('auth.basic');


## Video 11: Cómo funciona el Login  
1. Quitar el middleware auth.basic en el archivo de rutas **routes\web.php**
    >
        <?php

        use Illuminate\Support\Facades\Route;

        Route::get('/', function(){
            return view('welcome');
        });
1. Ejecutar:
    >
        $ php artisan make:auth


## Video 12: Cómo funciona el registro


## Video 13: Solicitud de restablecimiento de contraseña


## Video 14: Personalizando el email de reseteo de contraseña
1. Ejecutar:
    >
        $ php artisan make:notification ResetPasswordNotification
1. Copiar el contenido de la clase **ResetPassword** en **vendor\laravel\framework\src\Illuminate\Auth\Notifications\ResetPassword.php**
    >
        /**
        * The password reset token.
        *
        * @var string
        */
        public $token;

        /**
        * The callback that should be used to build the mail message.
        *
        * @var \Closure|null
        */
        public static $toMailCallback;

        /**
        * Create a notification instance.
        *
        * @param  string  $token
        * @return void
        */
        public function __construct($token)
        {
            $this->token = $token;
        }

        /**
        * Get the notification's channels.
        *
        * @param  mixed  $notifiable
        * @return array|string
        */
        public function via($notifiable)
        {
            return ['mail'];
        }

        /**
        * Build the mail representation of the notification.
        *
        * @param  mixed  $notifiable
        * @return \Illuminate\Notifications\Messages\MailMessage
        */
        public function toMail($notifiable)
        {
            if (static::$toMailCallback) {
                return call_user_func(static::$toMailCallback, $notifiable, $this->token);
            }

            return (new MailMessage)
                ->subject(Lang::getFromJson('Reset Password Notification'))
                ->line(Lang::getFromJson('You are receiving this email because we received a password reset request for your account.'))
                ->action(Lang::getFromJson('Reset Password'), url(config('app.url').route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
                ->line(Lang::getFromJson('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
                ->line(Lang::getFromJson('If you did not request a password reset, no further action is required.'));
        }

        /**
        * Set a callback that should be used when building the notification mail message.
        *
        * @param  \Closure  $callback
        * @return void
        */
        public static function toMailUsing($callback)
        {
            static::$toMailCallback = $callback;
        }
1. Pegar el contenido copiado en la clase **ResetPasswordNotification** en **app\Notifications\ResetPasswordNotification.php** y agregar la biblioteca:
    >
        use Illuminate\Support\Facades\Lang;
1. Copiar el método **** de **vendor\laravel\framework\src\Illuminate\Auth\Passwords\CanResetPassword.php**
    >
        /**
        * Send the password reset notification.
        *
        * @param  string  $token
        * @return void
        */
        public function sendPasswordResetNotification($token)
        {
            $this->notify(new ResetPasswordNotification($token));
        }
1. Agregar el método copiado anteriormente al final de la clase User en **app\User.php** y agregar a la cabecera la biblioteca:
    >
        use App\Notifications\ResetPasswordNotification;
1. Traducir los textos del método **toMail** en **app\Notifications\ResetPasswordNotification.php**
    >
        public function toMail($notifiable)
        {
            if (static::$toMailCallback) {
                return call_user_func(static::$toMailCallback, $notifiable, $this->token);
            }

            return (new MailMessage)
                ->subject(Lang::getFromJson('Notificación de restablecimiento de contraseña'))
                ->line(Lang::getFromJson('Recibió este correo electrónico porque recibimos una solicitud de restablecimiento de contraseña para su cuenta.'))
                ->action(Lang::getFromJson('Restablecer la contraseña'), url(config('app.url').route('password.reset', ['token' => $this->token, 'email' => $notifiable->getEmailForPasswordReset()], false)))
                ->line(Lang::getFromJson('Este enlace para restablecer la contraseña caducará en: minutos.', ['count' => config('auth.passwords.'.config('auth.defaults.passwords').'.expire')]))
                ->line(Lang::getFromJson('Si no solicitó un restablecimiento de contraseña, no es necesario realizar ninguna otra acción.'));
        }
1. Crear cuenta en **https://mailtrap.io** y copiar credenciales en **.env**
    >
        MAIL_MAILER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=7c67f786972696
        MAIL_PASSWORD=8f37b2d25228ba
        MAIL_ENCRYPTION=tls
1. Ejecutar:
    >
        $ php artisan vendor:publish --tag=laravel-notifications
1. Traducir los textos en **resources\views\vendor\notifications\email.blade.php**
    >
        ≡
        {{-- Subcopy --}}
        @isset($actionText)
        @slot('subcopy')
        @lang(
            "Si tiene problemas para hacer clic en el botón \":actionText\", copia y pega la URL a continuación\n".
            'en su navegador web: [:actionURL](:actionURL)',
            [
                'actionText' => $actionText,
                'actionURL' => $actionUrl,
            ]
        )
        @endslot
        @endisset
        @endcomponent
1. Cambiar en .env los siguientes parámetros:
    + APP_NAME=Soluciones++
    + APP_URL=http://localhost # (colocar el dominio local)


## Video 15: Cómo funciona el restablecimiento de contraseñas


## Video 16: Cómo crear un login personalizado
1. Crear nueva aplicación Laravel:
    >
        $ composer create-project laravel/laravel authentication2 "5.5.*"
1. Crear base de datos **borrar** en MySQL.
1. Configurar parámetros de la base de datos en **.env**:
    >
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=borrar
        DB_USERNAME=root
        DB_PASSWORD=
1. Ejecutar migraciones
    >
        $ php artisan migrate
1. Modificar la ruta raíz en **routes\web.php**
    >
        Route::get('/', function () {
            return view('auth.login');
        });
1. Crear vista **resources\views\auth\login.blade.php**
    >
        ***
1. Crar plantilla **resources\views\layouts\app.blade.php**
    >
        ***
1. Modificar el controlador **app\Http\Controllers\Auth\LoginController.php**
    >
        ***
1. Crear la ruta **post login** en **routes\web.php**
    >
        Route::post('login', 'Auth\LoginController@login')->name('login');
1. Crear usuario:
    >
        $ php artisan tinker
        >>>
        factory('App\User')->create()
1. Crear ruta **get dashboard** en **routes\web.php**
    >
        Route::get('dashboard', 'DashboardController@index');
### **Nota**: esta lección se dejó de tomar notas debido a que ya estos métodos están caducos.


## Video 17: Personificación de usuarios - Parte I
### **Nota**: en esta lección no se tomó nota debido a que ya estos métodos están caducos.

## Video 18: Personificación de usuarios - Parte II
### **Nota**: en esta lección no se tomó nota debido a que ya estos métodos están caducos.


## Video 19: Activación de usuarios
1. Crear nueva aplicación Laravel:
    >
        $ composer create-project laravel/laravel authentication3 "5.5.*"
1. Crear base de datos **authentication** en MySQL.
1. Configurar .env con la base de datos **authentication**
    >
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=authentication
        DB_USERNAME=root
        DB_PASSWORD=
1. Agregar campo **active** a la table **users** en la migración **database\migrations\2014_10_12_000000_create_users_table.php**
    >
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('active')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });    
1. Ejecutar las migraciones:
    >
        $ php artisan migrate
1. Generar sistema de autenticación:
    >
        $ php artisan make:auth

### **Nota**: en esta lección se dejó de tomar notas debido a que ya estos métodos están caducos.


## Video 20: Enviando email de activación
### **Nota**: en esta lección no se tomó notas debido a que ya estos métodos están caducos.


## Video 21: Login sin contraseña
### **Nota**: en esta lección no se tomó notas debido a que ya estos métodos están caducos.


## Video 21: Enviando el email a través de queues
### **Nota**: en esta lección no se tomó notas debido a que ya estos métodos están caducos.


## Video 22: Login con redes sociales
1. Crear nueva aplicación Laravel:
    >
        $ laravel new social-auth --jet
	##### **Nota**: Seleccionamos livewire y en	**Will your application use teams? (yes/no) [no]:**
	##### Responder **no**
1. Instalar dependencias de Node Js: 
	>
		$ npm install
		$ npm run dev
1. Crear e inicializar repositorio Git:
    >
        $ git init
        $ git add .
        $ git commit -m "Install Laravel 8 Jetstream"
1. Crear un dominio local:
    + Agregar el siguiente código al final del archivo **C:\Windows\System32\drivers\etc\hosts**
        >
            # Host virtual para el proyecto Social Auth en Laravel (Lado del cliente) 
            127.0.0.1	social.test
        ##### **Nota**: Editar con el block de notas en modo de administrador.
    + Agregar el siguiente código al final del archivo **C:\xampp\apache\conf\extra\httpd-vhosts.conf**
        >
            # Host virtual para el proyecto Social Auth (Lado del servidor)
            <VirtualHost *:80>
                DocumentRoot "C:\xampp\htdocs\cursos\11Autenticacion\social-auth\public"
                ServerName social.test
            </VirtualHost>
        ##### **Nota**: En el archivo **C:\xampp\apache\conf\httpd.conf** las líneas:
        >
            Include conf/extra/httpd-vhosts.conf
        ##### y
        >
            LoadModule rewrite_module modules/mod_rewrite.so		
        ##### no deben estar comentada con #.
1. Reiniciar el servidor Apache.
1. Crear base de datos **social** en **MySQL**.
    ##### **Usar**: Juego de caracters: **utf8_general_ci**
1. Configuar **.env**:
    >
        ≡
        APP_URL=http://social.test
        ≡
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=social
        DB_USERNAME=root
        DB_PASSWORD=
        ≡
1. Ejecutar migraciones: 
	>
		$ php artisan migrate
1. Modificar vista **login** en **resources\views\auth\login.blade.php**
    >
        <x-guest-layout>
            <x-jet-authentication-card>
                ≡
                <form method="POST" action="{{ route('login') }}">
                    ≡
                </form>
                <div class="flex items-center justify-center mt-4 text-sm">
                    <a href="#" class="btn btn-facebook px-2">
                        <i class="fab fa-facebook"></i>
                        Login con Facebook
                    </a>
                    <a href="#" class="btn btn-twitter px-2">
                        <i class="fab fa-twitter"></i>
                        Login con Twitter
                    </a>
                    <a href="#" class="btn btn-google px-2">
                        <i class="fab fa-google"></i>
                        Login con Google
                    </a>
                </div>
            </x-jet-authentication-card>
        </x-guest-layout>
    ##### En las siguientes url se pueden encontrar iconos y colores de lar principales redes sociales:
    + Iconos: https://www.bootstrapcdn.com/fontawesome/
    + Colores: https://www.designpieces.com/2012/12/social-media-colours-hex-and-rgb/
1. Integar Laravel Socialite (https://github.com/laravel/socialite/):
    >
        $ composer require laravel/socialite


## Video 23: Login con Facebook - Parte 1
1. Ir a https://developers.facebook.com/ e ingresar con una cuenta de facebook.
1. Ingresar a **Mis apps**.
1. Clic en **Crear app** y luego en **Ninguno** y llenar formulario:
    + Nombre para mostrar de la app: Soluciones Demo
    + Correo electrónico de contacto de la app: bazo.pedro@gmail.com
1. Seleccionar el producto: **Inicio de sesión con Facebook**.
1. Seleccionar la opción: **Web** y completar formulario:
    + URL del sitio web: http://social.test/ (Por ahora es la de desarrollo en local, luego cambiar por la de producción)
1. Guardar y continuar, siguiente y siguiente.
1. Ir a la **configuración** del producto y completar el formulario:
    + URI de redireccionamiento de OAuth válidos: https://social.test/login/facebook/callback
1. Guardar e ir a el **Panel** y obtener el **Identificador de la app**: 776518339646253
1. Ir a **config\services.php** y crear la llave de facebook al final del archivo:
    >
        <?php

        return [  
            ≡
            ],

            'facebook' => [
                'client_id' => env('FACEBOOK_CLIENT_ID'),
                'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
                'redirect' => env('FACEBOOK_REDIRECT_URL'),
            ]
        ];
1. Agregar las siguientes variables de entorno al final del archivo **.env**:
    + FACEBOOK_CLIENT_ID=776518339646253
    + FACEBOOK_CLIENT_SECRET=
    + FACEBOOK_REDIRECT_URL=https://social.test/login/facebook/callback
1. Configurar la vista login (**resources\views\auth\login.blade.php**) para hacer login con facebook:
    >
        ≡
        <a href="{{ route('login.facebook') }}" class="btn btn-facebook px-2">
            <i class="fab fa-facebook"></i>
            Login con Facebook
        </a>
        ≡
1. Crear controlado SocialLogin:
    >
        $ php artisan make:controller SocialLoginController
1. Importar la libreria de **Laravel Socialite** en el controlador **SocialLogin** (**app\Http\Controllers\SocialLoginController.php**):
    >
        use Laravel\Socialite\Facades\Socialite;
1. Definir método **redirectToFacebook** en el controlador **SocialLogin** (**app\Http\Controllers\SocialLoginController.php**):
    >
        public function redirectToFacebook(){
            return Socialite::driver('facebook')->redirect();
        }
1. Definir método **handleFacebookCallback** en el controlador **SocialLogin** (**app\Http\Controllers\SocialLoginController.php**):
    >
        public function handleFacebookCallback(){
            $facebookUser = Socialite::driver('facebook')->user();
        }
1. Crear ruta de login facebook en **routes\web.php**
    >
        // Rutas para login con Facebook
        Route::get('login/facebook', [SocialLoginController::class, 'redirectToFacebook'])->name('login.facebook');
        Route::get('login/facebook/callback', [SocialLoginController::class, 'handleFacebookCallback']);
    Importar el controlador:
    >
        use App\Http\Controllers\SocialLoginController;


## Video 24: Login con Facebook - Parte 2
1. Importar el modelo **User** y la libreria **Auth** en el controlador **SocialLogin** (**app\Http\Controllers\SocialLoginController.php**):
    >
        use App\Models\User;
        use Illuminate\Support\Facades\Auth;
1. Modificar método **handleFacebookCallback** en el controlador **SocialLogin** (**app\Http\Controllers\SocialLoginController.php**):
    >
        public function handleFacebookCallback(){
            if( ! request('code')){
                return redirect()->route('login')->with('warning', 'Hubo un error...');
            }
            $facebookUser = Socialite::driver('facebook')->user();
            $user = User::firstOrNew(['facebook_id' => $facebookUser->getId()]);
            if(! $user->exits){
                $user->name = $facebookUser->getName();
                $user->email = $facebookUser->getEmail();
                $user->avatar = $facebookUser->getAvatar();
                $user->save();
            }
            Auth::login($user);
            return redirect()->route('home')->with('success', 'Bienvenido '. $user->name);
        }
    ##### Nota: El método firstOrNew busca el usuario en la tabla users que coincida con el campo facebook_id, si no lo encuentra regresa un nuevo user con los datos de $facebookUser.
1. Agregar campos **facebook_id** y **avatar** y hacer nullable en campo **password** a la migración de User en **database\migrations\2014_10_12_000000_create_users_table.php**:
    >
        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('facebook_id')->nullable();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password')->nullable();
                $table->string('avatar')->nullable();
                $table->rememberToken();
                $table->foreignId('current_team_id')->nullable();
                $table->text('profile_photo_path')->nullable();
                $table->timestamps();
            });
        }
1. Refrescamos la base de datos:
    >
        $ php artisan migrate:fresh
1. Modificar la plantilla **resources\views\layouts\app.blade.php**
    >
        ≡
                    <img height="40px" src="{{ Auth::user()->avatar }}" alt="">

                    @if (session()->has('success'))
                        <div class="container">
                            <div class="alert alert-success">{{ session('success') }}</div> 
                        </div>
                    @endif

                    @if (session()->has('warning'))
                        <div class="container">
                            <div class="alert alert-warning">{{ session('warning') }}</div> 
                        </div>
                    @endif

                    <!-- Page Content -->
                    <main>
                        {{ $slot }}
                    </main>
                </div>

                @stack('modals')

                @livewireScripts
            </body>
        </html>


## Video 25: Permitir login tradicional
1. Modificar método **handleFacebookCallback** en el controlador **SocialLogin** (**app\Http\Controllers\SocialLoginController.php**):
    >
        public function handleFacebookCallback(){
            if( ! request('code')){
                return redirect()->route('login')->with('warning', 'Hubo un error...');
            }
            $facebookUser = Socialite::driver('facebook')->user();
            $user = User::firstOrNew(['facebook_id' => $facebookUser->getId()]);
            if(! $user->exits){
                $user = User::firstOrNew(['email' => $facebookUser->getEmail()]);
                if( ! $user->exists ){
                    $user->name = $facebookUser->getName();
                }
                $user->facebook_id = $facebookUser->getId();
                $user->avatar = $facebookUser->getAvatar();
                $user->save();
            }
            Auth::login($user);
            return redirect()->route('home')->with('success', 'Bienvenido '. $user->name);
        }
        
               
## Video 26: Permitir login con múltiples redes sociales
1. Modificar los campos de la migración **User** en **database\migrations\2014_10_12_000000_create_users_table.php**
    >
        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email')->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password')->nullable();
                $table->rememberToken();
                $table->foreignId('current_team_id')->nullable();
                $table->text('profile_photo_path')->nullable();
                $table->timestamps();
            });
        }   
1. Crear el modelo SocialProfile con su migración:
    >
        $ php artisan make:model SocialProfile -m
1. Agregar campos a la migración de **SocialProfile** en **database\migrations\2021_04_19_142935_create_social_profiles_table.php**
    >
        public function up()
        {
            Schema::create('social_profiles', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('user_id');      // ID del usuario en users
                $table->string('social_network_user_id');   // ID del usuario en lar red social
                $table->string('social_network');           // Nombre de la red social
                $table->string('avatar');
                $table->timestamps();
            });
        }
1. Refrescar la base de datos:
    >
        $ php artisan migrate:fresh
1. Desabilitar protección contra asignación masiva en el modelo **SocialProfile** (**app\Models\SocialProfile.php**):
    >
        ≡
        class SocialProfile extends Model
        {
            ≡
            protected $guarded = [];
        }   
1. Establecer relaciones entre los modelos **User** y **SocialProfile**
    Modelo User (**app\Models\User.php**):
    >
        ≡
        class User extends Authenticatable
        {
            ≡
            // Relación 1:n User - SocialProfile
            public function profiles(){
                return $this->hasMany(SocialProfile::class);
            }
        }
    Modelo SocialProfile (**app\Models\SocialProfile.php**):
    >
        ≡
        class SocialProfile extends Model
        {
            ≡
            // Relación 1:n User - SocialProfile (invers)
            public function user(){
                return $this->belongsTo(User::class);
            }
        }  
1. Modificar rutas para login con facebook para adaptarlas a rutas con social network en **routes\web.php**
    >
        Route::get('login/', [SocialLoginController::class, 'redirectToSocilaNetwork'])->name('login.social');
        Route::get('login/{socialNetwork}/callback', [SocialLoginController::class, 'handleSocilaNetworkCallback']);
1. Modificar la vista **login** (resources\views\auth\login.blade.php)
    >
        ≡
        <a href="{{ route('login.social', 'facebook') }}" class="btn btn-facebook px-2">
            <i class="fab fa-facebook"></i>
            Login con Facebook
        </a>
        ≡
1. Renombrar y redefinir los métodos **redirectToFacebook** y **handleFacebookCallback** para adaptarlos a los nuevos requerimiento de la aplicación en **app\Http\Controllers\SocialLoginController.php**, sus nuevos nombres serán respectivamente: **redirectToSocilaNetwork** y **handleSocilaNetworkCallback**.
    >
        public function redirectToSocilaNetwork($socialNetwork){
            return Socialite::driver($socialNetwork)->redirect();
        }

        public function handleSocilaNetworkCallback($socialNetwork){
            if( ! request('code')){
                return redirect()->route('login')->with('warning', 'Hubo un error...');
            }
            $socialUser = Socialite::driver($socialNetwork)->user();
            // Verificar que existe un identificador de usuario de la red social
            $socialProfile = SocialProfile::firstOrNew([
                'social_network' => $socialNetwork,
                'social_network_user_id' => $socialUser->getId()
            ]);
            if(! $socialProfile->exits){
                // Verificamos si existe un usuario con el email de la red social
                $user = User::firstOrNew(['email' => $socialUser->getEmail()]);
                if( ! $user->exists ){
                    $user->name = $socialUser->getName();
                    $user->save();
                }
                $socialProfile->avatar = $socialUser->getAvatar();
                $user->profiles()->save($socialProfile);
            }
            Auth::login($socialProfile->user);
            return redirect()->route('home')->with('success', 'Bienvenido '. $socialProfile->user->name);
        }
    Importar el modelo SocialProfile:
    >
        use App\Models\SocialProfile;
1. Definir método **getAvatarAttribute** en el modelo **User** (app\Models\User.php)
    >
        // Obtener avatar
        public function getAvatarAttribute(){
            return optional($this->profiles()->first())->avatar ?? url('images/default.jpg');
        }


## Video 27: Login con Twitter
1. Ir a https://apps.twitter.com e ingresar con tu cuenta.
1. Dar clic en **Create an app**.
1. Completar formulario:
    + Name: Aprendible
    + Description: Login con Twitter
    + Website: http://social.test
    + Callback URL: http://social.test/login/twitter/callback
    Y crear aplicación.
1. Solicitar email a Twitter:
    + Ir a la pestaña **Settings** y completar los siguientes campos:
        - Privacy Policy URL: http://social.test/policy
        - Terms of Service URL: http://social.test/terms
        - Application Icon: Opcional
        - Organization: Opcional
        - Organization website: Opcional
        Dar clic en **Update Settings**
    + Ir a la pestaña **Permissions**.
    + Seleccionar R**equest email adresses from users** en **Additional Permissions**
    + Dar clic en **Update Settings**
1. Ir a la pestaña **Keys and Access Tokens** y copiar las llaves de accesos:
    + Consumer Key (API Key): TWITTER_CLIENT_ID
    + Consumer Secret (API Secret): TWITTER_CLIENT_SECRET
     (Access Level).
1. Agregar las variables de entorno de Twitter en **.env**:
    + TWITTER_CLIENT_ID=[será la indicada en Consumer Key (API Key)]
    + TWITTER_CLIENT_SECRET=[será la indicada en Consumer Secret (API Secret)]
    + TWITTER_REDIRECT_URL=https://social.test/login/twitter/callback
1. Agregar las variables de Twitter en **config\services.php**
    >
        <?php

        return [
            ≡
            'twitter' => [
                'client_id' => env('TWITTER_CLIENT_ID'),
                'client_secret' => env('TWITTER_CLIENT_SECRET'),
                'redirect' => env('TWITTER_REDIRECT_URL'),
            ]
        ];       
1. Modificar la vista **login** (resources\views\auth\login.blade.php)
    >
        ≡
        </a>
        <a href="{{ route('login.social', 'twitter') }}" class="btn btn-twitter px-2">
            <i class="fab fa-twitter"></i>
            Login con Twitter
        </a>
        <a href="{{ route('login.social', 'google') }}" class="btn btn-google px-2">
            <i class="fab fa-google"></i>
            Login con Google
        </a>
        ≡
1. Adaptar el método **handleSocilaNetworkCallback** del controlador **SocialLogin** para poder hacer login con Twitter en **app\Http\Controllers\SocialLoginController.php**
    >
        public function handleSocilaNetworkCallback($socialNetwork){
            try{
                $socialUser = Socialite::driver($socialNetwork)->user();
            }catch(\Exception $e){
                return redirect()->route('login')->with('warning', 'Hubo un error en el login...');
            }
            // Verificar que existe un identificador de usuario de la red social
            $socialProfile = SocialProfile::firstOrNew([
                'social_network' => $socialNetwork,
                'social_network_user_id' => $socialUser->getId()
            ]);
            if(! $socialProfile->exits){
                // Verificamos si existe un usuario con el email de la red social
                $user = User::firstOrNew(['email' => $socialUser->getEmail()]);
                if( ! $user->exists ){
                    $user->name = $socialUser->getName();
                    $user->save();
                }
                $socialProfile->avatar = $socialUser->getAvatar();
                $user->profiles()->save($socialProfile);
            }
            Auth::login($socialProfile->user);
            return redirect()->route('home')->with('success', 'Bienvenido '. $socialProfile->user->name);
        }
1. Modificar el método **getAvatarAttribute** del modelo **User** (app\Models\User.php):
    >
        // Obtener avatar
        public function getAvatarAttribute(){
            return optional($this->profiles()->last())->avatar ?? url('images/default.jpg');
        }     


## Video 28: Login con Google
1. Ir a https://console.developer.google.com/apis/dashboard
1. Ingresar con cuenta de desarrollador.
1. Clic en crear proyecto.
1. Dar nombre al proyecto y clic en crear.
1. Clic en credenciales.
1. Clic en **Crear credenciales** y seleccionamos ID de **cliente de OAuth**.
1. Clic en Configurar **pantalla de autorización**.
1. Completar los campos del formulario:
    + Nombre de proucto mostrado a los usuarios: Aprendible
    + URL de página principal (Opcional).
    + URL de logotipo de producto (Opcional).
    + URL de la Política de Privacidad: http://social.test/policy
    + URL de las Condiciones de Servicio: http://social.test/terms
1. Dar clic en **Guardar**.
1. Completar los siguientes campos del formulario:
    + Tipo de aplicación: Web
    + Nombre: Aprendible login
    + URLs de redireccionamiento autorizados: https://social.test/login/google/callback
1. Dar clic en **Crear**.
1. Copiar las credenciales y agregar las variables de entorno a **.env**:
    + GOOGLE_CLIENT_ID=[será el indicado por las credenciales de Google]
    + GOOGLE_CLIENT_SECRET=[será el indicado por las credenciales de Google]
    + GOOGLE_REDIRECT_URL=https://social.test/login/google/callback
1. Agregar las variables de Twitter en **config\services.php**
    >
        <?php

        return [
            ≡
            'google' => [
                'client_id' => env('GOOGLE_CLIENT_ID'),
                'client_secret' => env('GOOGLE_CLIENT_SECRET'),
                'redirect' => env('GOOGLE_REDIRECT_URL'),
            ]
        ]; 
1. Ir a la consola de Google, ir a Biblioteca y ubicar Google+ API, abrir y dar clic en habilitar.


## Video 29: Social Middleware
1. Para evitar hacer login cuando se tiene una sesión activa modificar **routes\web.php**
    >
        // Rutas para login con Social Network
        Route::get('login/{socialNetwork}', [SocialLoginController::class, 'redirectToSocilaNetwork'])->name('login.social')->middleware('guest');
        Route::get('login/{socialNetwork}/callback', [SocialLoginController::class, 'handleSocilaNetworkCallback'])->middleware('guest');
1. Crear Middleware:
    >
        $ php artisan make:middleware RedirectIfSocialNetworkNotSupported
1. Programar método **handle** en **app\Http\Middleware\RedirectIfSocialNetworkNotSupported.php**
    >
        public function handle(Request $request, Closure $next)
        {
            if (collect(SocialProfile::$allowed)->contains($request->route('socialNetwork'))){
                return $next($request);
            }
            return redirect()->route('login')->with('warning', 'Hubo un error en el login...');
        }
    Importar:
    >
        use App\Models\SocialProfile;
1. Registrar middleware en **app\Http\Kernel.php**
    >
        ≡
        protected $routeMiddleware = [
            ≡
            'social_network' => \App\Http\Middleware\RedirectIfSocialNetworkNotSupported::class,
        ];
        ≡
1. Modificar ruta login en **routes\web.php**
    >
        Route::get('login/{socialNetwork}', [SocialLoginController::class, 'redirectToSocilaNetwork'])->name('login.social')->middleware('guest', 'social_network');
1. Modificar **app\Models\SocialProfile.php**
    >
        ≡
        class SocialProfile extends Model
        {
            ≡
            protected $guarded = [];

            public static $allowed = ['twitter', 'facebook', 'google'];
            ≡
        }


## Video 30: Autenticación API



















#####

# Obtener un certificado SSL en local (No funcionó)
##### https://www.jasoft.org/Blog/post/como-generar-certificados-https-para-desarrollo-local-que-no-produzcan-errores
1. Ir a https://github.com/FiloSottile/mkcert/releases y descargar la versión de **mkcert** que corresponda a tu sistema operativo.
1. Cambiar el nombre del programa descargado a **mkcert.exe**
1. En una terminal ejecutar:
    >
        $ mkcert -install
1. Generar certificado:
    >
        $ mkcert -pkcs12 localhost
        $ mkcert localhost social.test








#####
# Obtener un certificado SSL en local en XAMPP y Windows 10
##### https://mimentevuela.wordpress.com/2016/02/20/certificado-ssl-tls-auto-firmado-para-xampp-en-windows/
1. Crear directorio **C:\xampp\apache\conf\mis_certificados\localhost**.
1. Abri cmd como administrador.
1. Ir a la ruta: C:\xampp\apache\bin
    >
        $ cd\
        $ cd xampp\apache\bin
1. Generar una clave RSA:
    >
        $ openssl genrsa -aes256 -out C:\xampp\apache\conf\mis_certificados\localhost\local.key 2048
1. Introducir clave: 12345678
1. Generar el CSR (Certificate Signing Request):
    >
        $ openssl req -new -key C:\xampp\apache\conf\mis_certificados\localhost\local.key -config "C:\xampp\php\extras\openssl\openssl.cnf" -out C:\xampp\apache\conf\mis_certificados\localhost\local.csr
1. Introducir la contraseña: 12345678
1. Introducir los siguientes datos:
    + Country: VE
    + State: Caracas
    + Locality: Caracas
    + Organization: Personal
    + Organizational: .
    + Common name: Pedro
    + Email: bazo.pedro@gmail.com
    + Contraseña: 12345678
    + Opcional company: .
1. Generar una copia de la clave privada sin contraseña:
    >
        $ copy C:\xampp\apache\conf\mis_certificados\localhost\local.key C:\xampp\apache\conf\mis_certificados\localhost\local.key.org
1. Indicar a OpenSSL que le quite la contraseña a la copia:
    >
        $ openssl rsa -in C:\xampp\apache\conf\mis_certificados\localhost\local.key.org -out C:\xampp\apache\conf\mis_certificados\localhost\local.key
1. Introducir contraseña: 12345678
1. Crear y firmar el certificado:
    >
        $ openssl x509 -req -days 365 -in C:\xampp\apache\conf\mis_certificados\localhost\local.csr -signkey C:\xampp\apache\conf\mis_certificados\localhost\local.key -out C:\xampp\apache\conf\mis_certificados\localhost\local.crt
1. Cambiar la dirección donde apunta el certificado y la clave privada:
    + Abrir panel de control de XAMPP.
    + Apagar el servidor Apache.
    + Ir a: Config > httpd-ssl.conf
    + Buscamos:
        + VirtualHost _default_:433
        + ServerName www.example.com:443
        + SSLCertificateFile "conf/ssl.crt/server.crt"
        + SSLCertificateKeyFile "conf/ssl.key/server.key"

        y cambiamos por:   
        + VirtualHost localhost:443
        + ServerName www.localhost.com:443
        + SSLCertificateFile "conf/mis_certificados/localhost/local.crt"
        + SSLCertificateKeyFile "conf/mis_certificados/localhost/local.key"
1. Ir a: https://localhost, acceder a **configuración avanzada** y presionar en **Acceder a localhost (sitio no seguro)**
1. Ir a: https://localhost/dashboard/
1. En el navegador Chrome, ir a **Configuración** y luego a **Privacidad y seguridad** y seguidamente a **Seguridad**.
1. Ir a Gestionar certificados e importar el certificado **C:\xampp\apache\conf\mis_certificados\localhost\local.crt**
1. Elegir **Colocar todos los certificados en el siguiente almacén** > **Entidades de certificación raíz de confianza**.
1. Continuamos el proceso hasta finalizar el asistente, respondiendo a todo favorablemente.





        https://social.test/