# Proyecto FID: Formación, Investigación y Documentación
+ URL local:
+ URL prueba:
+ URL producción:
+ Figma: https://www.figma.com/proto/qAREYzpdkJtjdE262QOCwb/CDS?node-id=79%3A2&scaling=min-zoom&page-id=2%3A2&starting-point-node-id=79%3A2
+ Repositorio GitHub: https://github.com/petrix12/fid_2022.git

## Antes de iniciar:
1. Crear proyecto en la página de [GitHub](https://github.com) con el nombre: **fid_2022**.
    + **Description**: Proyecto FID: Formación, Investigación y Documentación. Desarrollado principalmente con las siguientes tecnológias: Laravel, Angular, MySQL y MongoDB.
    + **Private**.
2. En la ubicación raíz del proyecto en la terminal de la máquina local:
    + $ git init
    + $ git add .
    + $ git commit -m "Antes de iniciar"
    + $ git branch -M main
    + $ git remote add origin https://github.com/petrix12/fid_2022.git
    + $ git push -u origin main


## Preparar el entorno de desarrollo

### Instalar MongoDB en Windows con Laragon
+ https://www.mongodb.com/es
+ https://laragon.org/docs/quick-add.html
+ https://forum.laragon.org/topic/815/mongodb-addon-for-laragon
1. Ejecutar **Laragon** e ir a **Menú > Herramientas > Quick add > mongodb-4** para instalar MongoDB.
    + **Nota**: MongoDB se instalará en **C:\laragon\bin\mongodb\mongodb-4.0.3**
    + **Ruta para ejecutar MongoDB**: C:\laragon\bin\mongodb\mongodb-4.0.3\
2. Reiniciar los servicios de **Laragon** para activar los servicios de **MongoDB**.


### Agregar la extensión (DLL) de MongoDB a PHP en Windows/Laragon
+ https://forum.laragon.org/login
1. Ir a https://www.mongodb.com/try/download/community
2. Descargar en formato **zip** la versión actual de MongoDB para tu SO.
3. Descomprimir la descarga y extraer la carpeta **bin** (lo demás se puede eliminar).
4. Renombrar la carpeta **bin** a **mongodb-[versión]** (Ejm.: **mongodb-5.03**) y ubicarla en:
    + C:\laragon\bin\mongodb
5. En laragon ir a **Menú > MongoDB** y cambiar la versión a la nueva.
6. Anexar la siguiente ruta a las variables de entorno de Windows:
    + C:\laragon\bin\mongodb\mongodb-[versión]
7. Ir a https://pecl.php.net/package/mongodb y descargar la DLL (**X:X Thread Safe (TS) x64**) de la versión más actual y estable.
8. Descomprimimos la descargas y movemos el archivo **php_mongodb.dll** a **C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\ext** el resto de la descarga lo borramos.
9.  Modificar el archivo de configuración **C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\php.ini** para agregar la extensión de MongoDB **extension=php_mongodb.dll**:
    ```ini
    ≡
    ;extension=soap
    ;extension=sockets
    ;extension=sodium
    ;extension=sqlite3
    ;extension=tidy
    ;extension=xmlrpc
    extension=xsl
    extension=php_mongodb.dll

    ;;;;;;;;;;;;;;;;;;;
    ; Module Settings ;
    ;;;;;;;;;;;;;;;;;;;
    ≡
    ```
    + **Nota**: de aquí en adelante se podrá usar la nueva versión de MongoDB en cualquier proyecto de PHP en Laragon.


+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
+ $ composer create-project laravel/laravel fid "8.*"





### Video 013. Crear el proyecto en Laravel 7
1. Crear proyecto Laravel
    + $ composer create-project laravel/laravel fid "7.*"
    + **Nota 1**: de aquí en adelante la apllicación se puede ejecutar en local en http://29laravel_mongo.test





### Video 014. Agregar dependencia para trabajar con MongoDB
+ https://github.com/jenssegers/laravel-mongodb
1. Instalar dependencias para MongoDB:
    + $ composer require mongodb/mongodb
    + $ composer require jenssegers/mongodb:4.0.0-alpha.1
2. Commit Video 014:
    + $ git add .
    + $ git commit -m "Commit 014: Agregar dependencia para trabajar con MongoDB"
    + $ git push -u origin main

## Sección 03: Primeros pasos con MongoDB: Operaciones CRUD

### Video 015. Documentación a emplear y pasos a seguir
+ https://docs.mongodb.com/manual
1. Crear archivo **consultas.md** para guardar las consultas que realizaremos a MongoDB.
2. Commit Video 015:
    + $ git add .
    + $ git commit -m "Commit 015: Documentación a emplear y pasos a seguir"
    + $ git push -u origin main

### Video 016. Conociendo MongoDB
1. Ejecutar MongoDB:
    + $ mongo
2. Ver las bases de datos:
    + > show databases
    ó
    + > show dbs
3. Para ubicarnos en la base de datos **crud**.
    + > use crud
    + **Nota**: **crud** no existirá hasta tanto no contenga ninguna colección con documentos.
4. Commit Video 016:
    + $ git add .
    + $ git commit -m "Commit 016: Conociendo MongoDB"
    + $ git push -u origin main

### Video 017. Trabajando con las colecciones
1. Para ver las colecciones de una base de datos:
    + > show collections
2. Iniciar escritura en [consultas.md](consultas.md)
3. Commit Video 017:
    + $ git add .
    + $ git commit -m "Commit 017: Trabajando con las colecciones"
    + $ git push -u origin main

### Video 018. Métodos -insert- para crear documentos/registros
1. Crear un documento:
    + > var book1 = {'name': 'El señor de los anillos', 'description': 'Libro de fantasia'}
2. Ver el documento **book1**:
    + > book1
3. Ver el name del documento **book1**:
    + > book1.name
4. Crear colección **books** con el documento **book1**:
    + > db.books.insertOne(book1)
5. Crear los documentos **book2** y **book3**:
    + > var book2 = {'name': 'Harry Potter y La Piedra Filosofal', 'description': 'Libro de fantasia'}
    + > var book3 = {'name': 'Harry Potter y La Cámara Secreta', 'description': 'Libro de fantasia'}
6. Incluir los documentos **book2** y **book3** en la colección **books**:
    + > db.books.insertMany([book2, book3])
7. Ejecutar:
    + > db.books.insert(book1)
    + > db.books.insert([book2, book3])
8. Commit Video 018:
    + $ git add .
    + $ git commit -m "Commit 018: Métodos -insert- para crear documentos/registros"
    + $ git push -u origin main

### Video 019. Método -find- para buscar documentos/registros y findOne
1. Mostrar todos los documentos de la colección **books**:
    + > db.books.find()
2. Commit Video 019:
    + $ git add .
    + $ git commit -m "Commit 019: Método -find- para buscar documentos/registros y findOne"
    + $ git push -u origin main

### Nota 020. Generación del ID
+ https://docs.mongodb.com/manual/reference/method/ObjectId
1. **Generación del ID**: MongoDB toma varios aspectos para generar el identificador o ID de cada documento (registro) que guarda en nuestras colecciones (tablas). El ID, es generado con una función llamada ObjectID la cual genera valor de 12 byte:
    + 4 byte que corresponden a un timestamp de la PC.
    + 5 byte de un valor aleatorio.
    + 3 byte de un contador aleatorio incremental.
2. Commit Video 020:
    + $ git add .
    + $ git commit -m "Commit 020: Generación del ID"
    + $ git push -u origin main

### Video 021. Método -find- con parámetros de búsqueda (query) y campos (proyección)
1. Obtener un documento de la colección **books**:
    + > db.books.findOne()
2. Obtener un documento de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal**:
    + > db.books.findOne({'name': "Harry Potter y La Piedra Filosofal"})
3. Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal**:
    + > db.books.find({'name': "Harry Potter y La Piedra Filosofal"})
4. Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal** pero que regrese solamente la clave **name**:
    + > db.books.find({'name': "Harry Potter y La Piedra Filosofal"}, {'name': true})
5. Obtener los documentos de la colección **books** en donde la clave **name** tenga el valor de **Harry Potter y La Piedra Filosofal** pero que regrese solamente la clave **name** y que no aparezca la clave **_id**:
    + > db.books.find({'name': "Harry Potter y La Piedra Filosofal"}, {'name': true, '_id': false})
6. Commit Video 021:
    + $ git add .
    + $ git commit -m "Commit 021: Método -find- con parámetros de búsqueda (query) y campos (proyección)"
    + $ git push -u origin main

### Video 022. Método -update- para actualizar documentos
1. Actualizar el documento con **"_id" : ObjectId("616f6c6de52184190e6f0c7c")**:
    + db.books.updateOne({'_id': ObjectId("616f6d98e52184190e6f0c7f")}, {$set: {'name': "Harry Potter y el prisionero de Azcaban"}})
2. Commit Video 022:
    + $ git add .
    + $ git commit -m "Commit 022: Método -update- para actualizar documentos"
    + $ git push -u origin main

### Video 023. Método -delete- para eliminar documentos
1. Eliminar el registro con :Eliminar documento por **"_id" : ObjectId("616f6d98e52184190e6f0c7f")**:
    + > db.books.deleteOne({ '_id' : ObjectId("616f6d98e52184190e6f0c7f")})
2. Salir de la consola de MongoDB:
    + > exit
3. Commit Video 023:
    + $ git add .
    + $ git commit -m "Commit 023: Método -delete- para eliminar documentos"
    + $ git push -u origin main

### Nota 024. Consultas CRUD a realizar
1. Archivo de consultas del autor del curso **consultas.js**:
    ```js
    // bases de datos
    show databases; // mostrar base de datos
    show dbs;       // variacion comando anterior

    use crud;       // usar o establecer base de datos

    // colecciones
    show collections// mostrar colecciones/tablas de la base de datos seleccionada

    //*** crear colecciones y base de dato de manera automatica */

    // 1 esquema para crear una coleccion
    /*db.createCollection( <name>,
        {
        capped: <boolean>,
        autoIndexId: <boolean>,
        size: <number>,
        max: <number>,
        storageEngine: <document>,
        validator: <document>,
        validationLevel: <string>,
        validationAction: <string>,
        indexOptionDefaults: <document>,
        writeConcern: <document>
        }
    );*/

    // 2 realizar operacion 
    db.books.insert()

    //*** CRUD insertar

    var book1 = {
        'name': 'GOT - Vientos de Invierno - InsertOne',
        'description': 'Libro de fantasia'
    };

    db.books.insertOne(book1);

    var book2 = {
        'name': 'GOT - cancion de hielo y fuego - InsertMany',
        'description': 'Libro de fantasia ...'
    };

    var book3 = {
        'name': 'GOT - sangre y fuego - InsertMany',
        'description': 'Libro de fantasia XD'
    };

    db.books.insertMany([book2, book3]);

    db.books.insert(book1);
    db.books.insert([book2, book3]);


    // **** Encontrar

    db.books.find()

    db.books.find({
        '_id': ObjectId("5f455708a55825fbec49366c"),
        'name': "GOT - Vientos de Invierno - InsertOne",
    }
    );


    // query y proyecciones
    db.books.find({
        '_id': ObjectId("5f455708a55825fbec49366c"),
        'name': "GOT - Vientos de Invierno - InsertOne",
    },
    {
        'name' : true,
        '_id': false
    }
    );

    // **** Actualizar

    db.books.updateOne(
        {
            '_id': ObjectId("5f45596ea55825fbec49366f"),
        },
        {
            $set : {
                'name': "GOT - Vientos de Invierno - InsertOne 2.0",
            }
        }
    );

    db.books.updateMany(
        {
            'name': "GOT - Vientos de Invierno - InsertOne 2.0",
        },
        {
            $set : {
                'name': "GOT - Vientos de Invierno - InsertOne 2.1",
            }
        }
    );

    db.books.updateMany(
        {
            'name': "GOT - Vientos de Invierno - InsertOne 2.1",
        },
        {
            $set : {
                'name': "GOT - Vientos de Invierno - InsertOne 2.2",
                'age': 2017
            }
        }
    );

    //*** Borrar

    db.books.deleteOne({
        '_id': ObjectId("5f45596ea55825fbec49366f"),
    })

    db.books.deleteMany({
        'name': "GOT - Vientos de Invierno - InsertOne 2.2",
    })
    ```
2. Commit Video 024:
    + $ git add .
    + $ git commit -m "Commit 024: Consultas CRUD a realizar"
    + $ git push -u origin main

## Sección 04: Primeros pasos con Laravel y MongoDB

### Video 025. Introducción
+ **Contenido**: sobre la creación de un modelo para nuestros datos en MongoDB.
1. Commit Video 025:
    + $ git add .
    + $ git commit -m "Commit 025: Introducción"
    + $ git push -u origin main

### Video 026. Configurar la base de datos
1. Agregar los parámetros de configuración de MongoDB en el archivo de configuración **config\database.php**:
    ```php
    ≡
    return [
        ≡
        'connections' => [

            'mongodb' => [
                'driver' => 'mongodb',
                'host' => env('DB_HOST', '127.0.0.1'),
                'port' => env('DB_PORT', 27017),
                'database' => env('DB_DATABASE', 'laramongo'),
                'username' => env('DB_USERNAME', ''),
                'password' => env('DB_PASSWORD', ''),
                'options' => [
                    // here you can pass more settings to the Mongo Driver Manager
                    // see https://www.php.net/manual/en/mongodb-driver-manager.construct.php under "Uri Options" for a list of complete parameters that you can use
            
                    'database' => env('DB_AUTHENTICATION_DATABASE', 'admin'), // required with Mongo 3+
                ],
            ],

            'sqlite' => [
                ≡
            ],
            ≡
        ],
        ≡
    ];
    ```
2. Configurar las variables de entorno de baso de datos del archivo **.env** para establecer MongoDB como base de datos:
    ```php
    DB_CONNECTION=mongodb
    DB_HOST=127.0.0.1
    DB_PORT=27017
    DB_DATABASE=laramongo
    DB_USERNAME=
    DB_PASSWORD=
    ```
    + **Nota**: La base de datos de MongoDB se creará sola cuando se ejecute la primera inserción en ella, por tal motivo no tendremos que crearla previamente.
3. Commit Video 026:
    + $ git add .
    + $ git commit -m "Commit 026: Configurar la base de datos"
    + $ git push -u origin main

### Video 027. Crear un Modelo
1. Crear controlador para administrar un CRUD de libros:
    + $ php artisan make:controller Dashboard/BookController -m Book
2. Modificar el model **app\Models\Book.php** para adaptarlo a MongoDB:
    ```php
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Book extends Model
    {
        use HasFactory;

        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title', 'description', 'age'];
        protected $collection = 'books_collection';
    }
    ```
3. Commit Video 027:
    + $ git add .
    + $ git commit -m "Commit 027: Crear un Modelo"
    + $ git push -u origin main

### Video 028. Realizar operaciones CRUD
1. Modificar la ruta raíz para probar el modelo **Book**:
    ```php
    Route::get('/', function () {

        /*** OPERACIONES PRINCIPALES PARA UN CRUD ***/


        /*** CREAR (C) ***/

        /* Book::create([
            'title' => 'Cualquier cosa',
            'description' => 'Soluciones++'
        ]); */


        /*** BUSCAR (R) ***/

        // Obtener todos los documentos
        /* $books = Book::all(); */

        // Obtner todos los documentos con la clave title = 'Cualquier cosa'
        /* $books = Book::where('title','Cualquier cosa')->get(); */

        // Obtner todos los documentos con la clave description no null
        /* $books = Book::where('title','Cualquier cosa')->whereNotNull('description')->get(); */

        // Obtner todos los documentos con la clave description null
        /* $books = Book::where('title','Cualquier cosa')->whereNull('description')->get(); */

        // Obtner la consulta SQL
        /* $books = Book::where('title','Cualquier cosa')->whereNull('description')->toSql(); */

        // Obtener el docomento con _id = 61701f2e59670000c5004b45
        /* $books = Book::find('61701f2e59670000c5004b45'); */


        /*** ACTUALIZAR (U) ***/

        // Actualizar el docomento con _id = 61701f2e59670000c5004b45
        /* $books = Book::find('61701f2e59670000c5004b45');
        $books->update([
            'title' => 'Cualquier cosa 2',
            'description' => 'Soluciones++ 3',
            'age' => 2021
        ]); */

        /*** ELIMINAR (D) ***/

        // Eliminar el docomento con _id = 61701f2e59670000c5004b45
        /* $books = Book::find('61701f2e59670000c5004b45');
        $books->delete(); */


        /*** OTRAS OPERACIONES ***/
        // Actualizar un documento y luego incrementar el valor de una clave
        /* $books = Book::find('6170265f59670000c5004b48');
        $books->update([
            'title' => 'Cualquier cosa 2',
            'description' => 'Soluciones++ 3',
            'age' => 2021
        ]);
        $books = Book::find('6170265f59670000c5004b48')->increment('age');
        dd(Book::find('6170265f59670000c5004b48')); */

        /* dd($books); */

        return view('welcome');
    });
    ```
2. Commit Video 028:
    + $ git add .
    + $ git commit -m "Commit 028: Realizar operaciones CRUD"
    + $ git push -u origin main

### Nota 029. Tarea
1. **Tarea**: Como Tarea debes de realizar las mismas operaciones tipo CRUD que vimos anteriormente e intenta agregar o variar algunas condiciones en cualquier tipo de consulta, variar los parámetros al momento de obtener datos, actualizarlos, insertarlos etc.
2. Commit Nota 029:
    + $ git add .
    + $ git commit -m "Commit 029: Tarea"
    + $ git push -u origin main

### Nota 030. Operaciones CRUD realizadas
1. Operaciones CRUD realizadas:
    ```php
    /*
    //*** Crear documentos (libros)

    // crear con algunos parametros
    Book::create(
        ['title' =>"the witcher"]
    );
    Book::create(
        ['title' =>"the witcher",'description' => "Hola Mundo"]
    );

    // Buscar por where
    //$books = Book::where('title', "Cualquier cosa")->get(); 
    
    // buscar libros dado algunas condiciones
    $books = Book::where('title', "the witcher")
    //->whereNotNull('description')
    ->whereNull('description')
    //->toSql(); // ver SQL de la consulta
    ->get(); 
    // $books = Book::all(); obtener todos los documentos de la coleccion
    //dd($books);

    // buscar por ID del documento
    $b = Book::find('5f47fde040090000c500688f')->increment('age');

    // actualizar libro seleccionado
    $b->update(['title' =>"the witcher 2.0", 'age' => 2017]);

    // borrar libro seleccionado
    $b->delete();

    // encontrar por ID
    $b = Book::find('5f47fde040090000c500688f');
    */
    ```
2. Commit Nota 030:
    + $ git add .
    + $ git commit -m "Commit 030: Operaciones CRUD realizadas"
    + $ git push -u origin main

## Sección 05: Crear un CRUD de libros con Laravel y MongoDB

### Video 031. Introducción
+ **Contenido**: muestra de la aplicación CRUD a desarrollar en esta sección.
1. Commit Video 031:
    + $ git add .
    + $ git commit -m "Commit 031: Introducción"
    + $ git push -u origin main

### Video 032. Instalar LaravelUI
+ https://laravel.com/docs/7.x/frontend
1. Instalar Laravel UI:
    + $ composer require laravel/ui:^2.4
2. Commit Video 032:
    + $ git add .
    + $ git commit -m "Commit 032: Instalar LaravelUI"
    + $ git push -u origin main

### Video 033. Configurar nuestro proyecto con LaravelUI (Bootstrap)
1. Instalar Bootstrap:
    + $ php artisan ui bootstrap --auth
    + $ npm install
    + $ npm run dev
2. Commit Video 033:
    + $ git add .
    + $ git commit -m "Commit 033:  Configurar nuestro proyecto con LaravelUI (Bootstrap)"
    + $ git push -u origin main

### Video 034. Opcional: Usar Bootstrap 5
+ https://getbootstrap.com/
1. Eliminar las dependencias: **"bootstrap": "^4.0.0"** y **"jquery": "^3.2"** en **package.json**.
2. Ejecutar:
    + $ npm install bootstrap
3. Modificar **resources\js\app.js**:
    ```js
    const bootstrap = require('bootstrap');
    ```
4. Ejecutar:
    + $ npm run dev
5. Commit Video 034:
    + $ git add .
    + $ git commit -m "Commit 034: Opcional: Usar Bootstrap 5"
    + $ git push -u origin main

### Video 035. Opcional: Instalar FontAwesome
+ https://fontawesome.com/
1. Instalar Font Awesome:
    + $ npm install --save @fortawesome/fontawesome-free
2. Incluir los estilos de Font Awesome en **resources\sass\app.scss**:
    ```scss
    // Font Awesome
    @import '~@fortawesome/fontawesome-free/scss/fontawesome.scss';
    @import '~@fortawesome/fontawesome-free/scss/brands.scss';
    @import '~@fortawesome/fontawesome-free/scss/solid.scss';
    ```
3. Ejecutar:
    + $ npm run dev
4. Commit Video 035:
    + $ git add .
    + $ git commit -m "Commit 035: Opcional: Instalar FontAwesome"
    + $ git push -u origin main

### Video 036. Registrar un usuario
1. Modificar el modelo **app\Models\User.php** para realizar adaptaciones con MongoDB:
    ```php
    <?php

    namespace App\Models;

    ≡
    /* use Illuminate\Foundation\Auth\User as Authenticatable; */
    use Jenssegers\Mongodb\Auth\User as Authenticatable;
    ≡
    ```
2. Commit Video 036:
    + $ git add .
    + $ git commit -m "Commit 036: Registrar un usuario"
    + $ git push -u origin main

### Video 037. Crear template maestro
1. Diseñar plantilla maestra **resources\views\dashboard\master.blade.php**:
    ```php
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('dashboard.partials.nav-header-main')
        <div class="container">
            @yield('content')
        </div>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
    </html>
    ```
2. Diseñar plantilla de navegación **resources\views\dashboard\partials\nav-header-main.blade.php**:
    ```php
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    ```
3. Commit Video 037:
    + $ git add .
    + $ git commit -m "Commit 037: Crear template maestro"
    + $ git push -u origin main

### Video 038. CRUD: Crear lista de libros
1. Modificar el archivo de rutas **routes\web.php**:
    ```php
    <?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('dashboard/book', 'Dashboard\BookController');
    ```
2. Programar el método **index** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function index()
    {
        $books = Book::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.book.index', compact('books'));
    }
    ```
3. Diseñar vista **resources\views\dashboard\book\index.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Creación</th>
                    <th>Actualización</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->_id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->created_at->format('d-m-Y') }}</td>
                        <td>{{ $book->updated_at->format('d-m-Y') }}</td>
                        <td>{{ $book->age }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $books->links() }}
    @endsection
    ```
5. Commit Video 038:
    + $ git add .
    + $ git commit -m "Commit 038: CRUD: Crear lista de libros"
    + $ git push -u origin main

### Video 039. CRUD: Crear libros
1. Programar el método **create** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function create()
    {
        $book = new Book();
        return view('dashboard.book.create', compact('book'));
    }
    ```
2. Programar el método **store** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function store(Request $request)
    {
        Book::create($request->all());
        return back()->with('status', 'Libro creado correctamente');
    }
    ```
3. Diseñar vista **resources\views\dashboard\book\create.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="mt-3 card">
            <div class="card-header">
                Crear libro
            </div>
            <div class="card-body">
                <form action="{{ route('book.store') }}" method="post">
                    @include('dashboard.book._form')
                    <input type="submit" value="Enviar" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    @endsection   
    ```
4. Diseñar formulario para libros **resources\views\dashboard\book\_form.blade.php**:
    ```php
    @csrf
    <label for="title">Título</label>
    <input name="title" id="title" type="text" class="form-control" value="{{ old('title', $book->title ) }}">

    <label for="age">Año</label>
    <input name="age" id="age" type="numeric" class="form-control" value="{{ old('age', $book->age ) }}">

    <label for="description">Descripción</label>
    <textarea name="description" id="description" class="form-control" cols="30" rows="10">
        {{ old('description', $book->description ) }}
    </textarea>
    ```
5. Commit Video 039:
    + $ git add .
    + $ git commit -m "Commit 039: CRUD: Crear libros"
    + $ git push -u origin main

### Video 040. CRUD: Mostrar mensaje de éxito
1. Crear plantilla **resources\views\dashboard\partials\alert-message.blade.php**:
    ```php
    @if (session('status'))
        <div class="alert alert-success my-2">
            {{ session('status') }}
        </div>
    @endif
    ```
2. Modificar plantilla **resources\views\dashboard\master.blade.php** para incluir los mensajes de notificación:
    ```php
    ≡
    <body>
        ≡
        <div class="container">
            @include('dashboard.partials.alert-message')
            ≡
        </div>
        <!-- Scripts -->
        ≡
    </body>
    ≡
    ```
3. Commit Video 040:
    + $ git add .
    + $ git commit -m "Commit 040: CRUD: Mostrar mensaje de éxito"
    + $ git push -u origin main

### Video 041. CRUD: Validaciones
1. Crear request para validar los datos de los libros:
    + $ php artisan make:request SaveBook
2. Programar el nuevo request **app\Http\Requests\SaveBook.php**:
    ```php
    ≡
    class SaveBook extends FormRequest
    {
        ≡
        public function authorize()
        {
            return true;
        }

        ≡
        public function rules()
        {
            return $this->myRules();
        }

        public function myRules(){
            return [
                'title' => 'required|string|max:255',
                'description' => 'required|string|max:2000',
                'age' => 'required|integer',
            ];
        }
    }
    ```
3. Modificar el método **store** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function store(SaveBook $request)
    {
        Book::create($request->validated());
        return back()->with('status', 'Libro creado correctamente');
    }
    ```
    + Importar la definición del request **SaveBook**:
    ```php
    use App\Http\Requests\SaveBook;
    ```
4. Crear plantilla **resources\views\dashboard\partials\errors-form.blade.php**:
    ```php
    @if ($errors->any())
        @foreach ($errors->all() as $e)
            <div class="alert alert-danger m-b-2">
                {{ $e }}
            </div>  
        @endforeach
    @endif
    ```
5. Modificar vista **resources\views\dashboard\book\create.blade.php** para incluir los mensajes de error:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="mt-3 card">
            ≡
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('book.store') }}" method="post">
                    ≡
                </form>
            </div>
        </div>
    @endsection
    ```
6. Commit Video 041:
    + $ git add .
    + $ git commit -m "Commit 041: CRUD: Validaciones"
    + $ git push -u origin main

### Video 042. CRUD: Editar libros
1. Programar el método **edit** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function edit(Book $book)
    {
        return view('dashboard.book.edit', compact('book'));
    }
    ```
2. Programar el método **update** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function update(SaveBook $request, Book $book)
    {
        $book->update($request->validated());
        return back()->with('status', 'Libro ' . $book->title . 'actualizado correctamente');
    }
    ```
3. Diseñar vista **resources\views\dashboard\book\edit.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="mt-3 card">
            <div class="card-header">
                Editar libro: {{ $book->title }}
            </div>
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('book.update', $book->_id) }}" method="post">
                    @method('PUT')
                    @include('dashboard.book._form')
                    <input type="submit" value="Actualizar" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    @endsection
    ```
4. Commit Video 042:
    + $ git add .
    + $ git commit -m "Commit 042: CRUD: Editar libros"
    + $ git push -u origin main

### Video 043. CRUD: Enlaces CRUD en el index
1. Implementar las acciones de edición y eliminación en la vista **resources\views\dashboard\book\index.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <table class="table">
            <thead>
                ≡
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        ≡
                        <td>{{ $book->age }}</td>
                        <td>
                            <a class="btn btn-sm btn-success" href="{{ route('book.edit', $book->_id) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a class="btn btn-sm btn-danger" href="{{ route('book.destroy', $book->_id) }}">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        ≡
    @endsection
    ```
2. Commit Video 043:
    + $ git add .
    + $ git commit -m "Commit 043: CRUD: Enlaces CRUD en el index"
    + $ git push -u origin main

### Video 044. CRUD Eliminar libros
1. Modificar la vista **resources\views\dashboard\book\index.blade.php** para incluir una ventana modal para eliminar registros:
    ```php
    @extends('dashboard.master')
    @section('content')
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Creación</th>
                    <th>Actualización</th>
                    <th>Año</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->_id }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->created_at->format('d-m-Y') }}</td>
                        <td>{{ $book->updated_at->format('d-m-Y') }}</td>
                        <td>{{ $book->age }}</td>
                        <td>
                            <a class="btn btn-sm btn-success text-white" href="{{ route('book.edit', $book->_id) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a 
                                data-id="{{ $book->_id }}"
                                data-title="{{ $book->title }}"
                                class="btn btn-sm btn-danger text-white" 
                                href="#" 
                                data-bs-toggle="modal" 
                                data-bs-target="#deleteModal"
                            >
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $books->links() }}

        {{-- Modal --}}
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar <span></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Seguro que quieres eliminar el registro seleccionado?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form id="formDelete" data-action="{{ route('book.destroy', 0) }}" action="{{ route('book.destroy', 0) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- script Modal --}}
        <script>
        var deleteModal = document.getElementById('deleteModal')
        deleteModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var id = button.getAttribute('data-id')
            var title = button.getAttribute('data-title')

            // Form
            var action = document.getElementById('formDelete').getAttribute('data-action')
            action = action.slice(0,-1)
            document.getElementById('formDelete').setAttribute('action', action + id)
            
            // Update the modal's content.
            var modalTitle = deleteModal.querySelector('.modal-title span')

            modalTitle.textContent = title
        })
        </script>
    @endsection
    ```
2. Programar el método **destroy** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function destroy(Book $book)
    {
        $book->delete();
        return back()->with('status', 'Libro ' . $book->title . ' eliminado correctamente');
    }
    ```
3. Commit Video 044:
    + $ git add .
    + $ git commit -m "Commit 044: CRUD Eliminar libros"
    + $ git push -u origin main

### Video 045. Algunos detalles en la aplicación
1. Mejorar la estética de la vista **resources\views\dashboard\book\index.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Lista de libros MongoDB
            </div>
            <div class="card-body my-2">
                <a href="{{ route('book.create') }}" class="btn btn-success text-white">
                    <i class="fa fa-plus"></i> Crear
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            ≡
                        </tr>
                    </thead>
                    <tbody>
                        ≡
                    </tbody>
                </table>
                {{ $books->links() }}
            </div>
        </div>

        {{-- Modal --}}
        ≡

        {{-- script Modal --}}
        ≡
    @endsection
    ```
2. Mejorar la estética de la vista **resources\views\dashboard\book\create.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Crear libro
            </div>
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('book.store') }}" method="post">
                    @include('dashboard.book._form')
                    <input type="submit" value="Enviar" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    @endsection
    ```
3. Mejorar la estética de la vista **resources\views\dashboard\book\edit.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Editar libro: {{ $book->title }}
            </div>
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('book.update', $book->_id) }}" method="post">
                    @method('PUT')
                    @include('dashboard.book._form')
                    <input type="submit" value="Actualizar" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    @endsection
    ```
4. Autenticar rutas en **routes\web.php**:
    ```php
    <?php

    use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

    Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function () {
        Route::resource('book', 'BookController');
    });
    ```
5. En las vistas **resources\views\auth\login.blade.php** y **resources\views\auth\register.blade.php**:
    + Remmplazar: form-group
    + Por: mt-3
6. Commit Video 045:
    + $ git add .
    + $ git commit -m "Commit 045: Algunos detalles en la aplicación"
    + $ git push -u origin main

### Nota 046. Código fuente
1. Código fuente: Por favor, no se les olvide de calificar el curso y dejarme una reseña si te ha servido y has aprendiendo; eso me ayuda a llegar a mas personas como tú y dar lo mejor de mí con más material para este curso!
2. Commit Video 046:
    + $ git add .
    + $ git commit -m "Commit 046: Código fuente"
    + $ git push -u origin main

## Sección 06: Operadores Lógicos y de comparación en MongoDB

### Video 047. Comparaciones por cantidades y operadores lógicos and/or
1. Abrir una consola de MongoDB:
    + $ mongo
2. Ejecutar las siguientes instrucciones para familiarizarnos con los operadores lógicos:
    + > use crud
    + >
        ```js
        db.inventory.insertMany([
            { item: "journal", qty: 25, size: { h: 14, w: 21, uom: "cm" }, status: "A" },
            { item: "notebook", qty: 50, size: { h: 8.5, w: 11, uom: "in" }, status: "A" },
            { item: "paper", qty: 100, size: { h: 8.5, w: 11, uom: "in" }, status: "D" },
            { item: "planner", qty: 75, size: { h: 22.85, w: 30, uom: "cm" }, status: "D" },
            { item: "postcard", qty: 45, size: { h: 10, w: 15.25, uom: "cm" }, status: "A" },
            { item: "ps4", qty: 22, size: { h: 60, w: 35, uom: "cm" }, status: "A" },
            { item: "xbox", qty: 25, size: { h: 64, w: 35, uom: "cm" }, status: "B" },
        ]);
        ```
    + > db.inventory.find().pretty()
3. Cerrar la terminal de MongoDB.
4. Commit Video 047:
    + $ git add .
    + $ git commit -m "Commit 047: Comparaciones por cantidades y operadores lógicos and/or"
    + $ git push -u origin main

### Nota 048. Código fuente
1. **Código fuente**: Por favor, no se les olvide de calificar el curso y dejarme una reseña si te ha servido y has aprendiendo; eso me ayuda a llegar a mas personas como tú y dar lo mejor de mí con más material para este curso!
2. Commit Video 048
    + $ git add .
    + $ git commit -m "Commit 048: Código fuente"
    + $ git push -u origin main

## Sección 07: Relaciones en MongoDB

### Video 049. Documentos embebidos: Definir estructura
1. Ejemplos de estructuras de documentos en MongoDB:
    ```js
    var user1 = {
        name: 'Andres',
        last_name: 'Cruz',
        age: 29,
        email: 'andres@gmail.com',
        nationalities: ['Venezuela', 'España'],
        address: {
            postal: 900,
            country: "España",
            dir: "Apple Puerta del Sol",
            phone: "+34 917 69 91 00"
        }
    };

    var user2 = {
        name: 'Pepe',
        last_name: 'Cruz',
        age: 18,
        email: 'pepe@gmail.com',
        nationalities: ['España'],
        address: {
            postal: 150,
            country: "España",
            dir: "Apple Puerta de la Luna",
            phone: "+34 917 69 91 11"
        }
    };

    var user3 = {
        name: 'Pablo',
        last_name: 'Lama',
        age: 30,
        email: 'pablo@gmail.com',
        courses: ['Java', 'Git', 'JavaScript']
    };

    var user4 = {
        name: 'Luis',
        last_name: 'Yello',
        age: 99,
        email: 'pepe@gmail.com'
    };

    var user5 = {
        name: 'Andres',
        last_name: 'Cruz',
        age: 29,
        email: 'andres@gmail.com',
        address: [{
                country: "España",
                dir: "Gran Plaza 2",
                phone: "+34 916 34 97 00"
            },
            {
                country: "España",
                dir: "Apple Calle Colón",
                phone: "+34 963 50 63 00"
            },
            {
                country: "España",
                dir: "La Cañada Shopping",
                phone: "+34 952 76 08 00"
            },
            {
                country: "Venezuela",
                dir: "...",
                phone: "+58 952 76 08 00"
            },
        ]
    };

    db.users.insertMany(
        [user1, user2, user3, user4, user5]
    );
    ```
2. Commit Video 049:
    + $ git add .
    + $ git commit -m "Commit 049: Documentos embebidos: Definir estructura"
    + $ git push -u origin main

### Video 050. Documentos embebidos: Consultas de búsqueda
1. Abrir una consola de MongoDB:
    + $ mongo
2. Ejecutar las siguientes instrucciones para familiarizarnos con los operadores lógicos:
    + > use crud
    + Insertar la estructura de la clase anterior.
    + > db.users.find()
3. Buscar los usuarios que en su dirección tenga el código postal de 900:
    + > db.users.find({"address.postal": 900})
4. Buscar los usuarios que en su dirección tenga el código postal de 900 ó 150:
    + > 
    ```js
    db.users.find({
        $or: [
            {
                "address.postal": 900
            },
            {
                "address.postal": 150
            },
        ]     
    }).pretty()
    ```
5. Cerrar la terminal de MongoDB.
6. Commit Video 050:
    + $ git add .
    + $ git commit -m "Commit 050: Documentos embebidos: Consultas de búsqueda"
    + $ git push -u origin main

### Video 051. Documentos embebidos: Actualizar documentos embebidos
1. Abrir una consola de MongoDB:
    + $ mongo
2. Ejecutar las siguientes instrucciones para familiarizarnos con los operadores lógicos:
    + > use crud
    + > db.users.find({ "address.phone": "+34 952 76 08 00" }).pretty()
    + >
        ```js
        db.users.updateOne(
            {
                "address.phone": "+34 952 76 08 00",
                "name" : "Andres"
            },{
                $set: {
                    last_name: "Cruz II",
                    "address.1.country": "México"   /* actualiza el país de la dirección con indice 1 */
                }
            }
        )
        ```
    + >
        ```js
        db.users.updateOne(
            {
                "address.phone": "+34 952 76 08 00",
                "name" : "Andres"
            },{
                $set: {
                    last_name: "Cruz II",
                    "address.$.country": "Argentina"   /* actualiza el país de la dirección con indice 1 */
                }
            }
        )
        ```
3. Cerrar la terminal de MongoDB.
4. Commit Video 051:
    + $ git add .
    + $ git commit -m "Commit 051: Documentos embebidos: Actualizar documentos embebidos"
    + $ git push -u origin main

### Video 052. Documentos embebidos: Eliminar documentos embebidos
1. Abrir una consola de MongoDB:
    + $ mongo
2. Ejecutar las siguientes instrucciones para familiarizarnos con los operadores lógicos:
    + > use crud
    + >
        ```js
        db.users.updateOne(
            {
                "address.phone": "+34 952 76 08 00",
                "name" : "Andres"
            },{
                $pull: { address: { phone: "+34 952 76 08 00" } }
            }
        )
        ```
3. Cerrar la terminal de MongoDB.
4. Commit Video 052:
    + $ git add .
    + $ git commit -m "Commit 052: Documentos embebidos: Eliminar documentos embebidos"
    + $ git push -u origin main

### Video 053. Documentos embebidos: Agregar documentos embebidos
1. Abrir una consola de MongoDB:
    + $ mongo
2. Ejecutar las siguientes instrucciones para familiarizarnos con los operadores lógicos:
    + > use crud
    + >
        ```js
        db.users.updateOne(
            {
                "address.phone": "+34 916 34 97 00",
                "name" : "Andres"
            },{
                $push: { 
                    address: {
                        country: "Grecia",
                        dir: "La Bonita, Baruta",
                        phone: "+34 952 76 08 777" 
                    } 
                }
            }
        )
        ```
3. Cerrar la terminal de MongoDB.
4. Commit Video 053:
    + $ git add .
    + $ git commit -m "Commit 053: Documentos embebidos: Agregar documentos embebidos"
    + $ git push -u origin main

### Nota 054. Código fuente
1. **Código fuente**: Por favor, no se les olvide de calificar el curso y dejarme una reseña si te ha servido y has aprendiendo; eso me ayuda a llegar a mas personas como tú y dar lo mejor de mí con más material para este curso!
2. Commit Video 054:
    + $ git add .
    + $ git commit -m "Commit 054: Código fuente"
    + $ git push -u origin main

## Sección 08: Relaciones de uno a uno y uno a muchos MongoDB y Laravel

### Video 055. Introducción
+ **Contenido**: breve explicación de la sección.
1. Commit Video 055:
    + $ git add .
    + $ git commit -m "Commit 055: Introducción"
    + $ git push -u origin main

### Video 056. Tarea: CRUD para las categorías
1. Crear modelo manualmente **app\Category.php**:
    ```php
    <?php

    namespace App;

    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Category extends Model
    {
        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title'];
        protected $collection = 'categories_collection';
    }
    ```
2. Crear plantilla **resources\views\dashboard\category\_form.blade.php**:
    ```php
    @csrf
    <label for="title">Título</label>
    <input name="title" id="title" type="text" class="form-control" value="{{ old('title', $category->title ) }}">
    ```
3. Modificar vista **resources\views\dashboard\category\create.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Crear categoría
            </div>
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('category.store') }}" method="post">
                    @include('dashboard.category._form')
                    <input type="submit" value="Enviar" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    @endsection
    ```
4. Modificar vista **resources\views\dashboard\category\edit.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Editar categoría: {{ $category->title }}
            </div>
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('category.update', $category->_id) }}" method="post">
                    @method('PUT')
                    @include('dashboard.category._form')
                    <input type="submit" value="Actualizar" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    @endsection
    ```
5. Modificar vista **resources\views\dashboard\category\index.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Lista de categorías MongoDB
            </div>
            <div class="card-body my-2">
                <a href="{{ route('category.create') }}" class="btn btn-success text-white">
                    <i class="fa fa-plus"></i> Crear
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Creación</th>
                            <th>Actualización</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->_id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->created_at->format('d-m-Y') }}</td>
                                <td>{{ $category->updated_at->format('d-m-Y') }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success text-white" href="{{ route('category.edit', $category->_id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a 
                                        data-id="{{ $category->_id }}"
                                        data-title="{{ $category->title }}"
                                        class="btn btn-sm btn-danger text-white" 
                                        href="#" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#deleteModal"
                                    >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $categories->links() }}
            </div>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar <span></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Seguro que quieres eliminar el registro seleccionado?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form id="formDelete" data-action="{{ route('category.destroy', 0) }}" action="{{ route('category.destroy', 0) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- script Modal --}}
        <script>
        var deleteModal = document.getElementById('deleteModal')
        deleteModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var id = button.getAttribute('data-id')
            var title = button.getAttribute('data-title')

            // Form
            var action = document.getElementById('formDelete').getAttribute('data-action')
            action = action.slice(0,-1)
            document.getElementById('formDelete').setAttribute('action', action + id)
            
            // Update the modal's content.
            var modalTitle = deleteModal.querySelector('.modal-title span')

            modalTitle.textContent = title
        })
        </script>
    @endsection
    ```
6. Crear ruta para categorías en **routes\web.php**:
    ```php
    ≡
    Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function () {
        ≡
        Route::resource('category', 'CategoryController');
    });
    ```
7. Crear request manualmente **app\Http\Requests\SaveCategory.php**:
    ```php
    <?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class SaveCategory extends FormRequest
    {
        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */
        public function authorize()
        {
            return true;
        }

        /**
        * Get the validation rules that apply to the request.
        *
        * @return array
        */
        public function rules()
        {
            return $this->myRules();
        }

        public function myRules(){
            return [
                'title' => 'required|string|max:255',
            ];
        }
    }
    ```
8. Crear controlador manualmente **app\Http\Controllers\Dashboard\CategoryController.php**:
    ```php
    <?php

    namespace App\Http\Controllers\Dashboard;

    use App\Category;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\SaveCategory;
    use Illuminate\Http\Request;

    class CategoryController extends Controller
    {
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
            $categories = Category::orderBy('created_at', 'desc')->paginate(10);
            return view('dashboard.category.index', compact('categories'));
        }

        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            $category = new Category();
            return view('dashboard.category.create', compact('category'));
        }

        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(SaveCategory $request)
        {
            Category::create($request->validated());
            return back()->with('status', 'Categoría creada correctamente');
        }

        /**
        * Display the specified resource.
        *
        * @param  \App\Categoy  $category
        * @return \Illuminate\Http\Response
        */
        public function show(Category $category)
        {
            //
        }

        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\Categoy  $category
        * @return \Illuminate\Http\Response
        */
        public function edit(Category $category)
        {
            return view('dashboard.category.edit', compact('category'));
        }

        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\Categoy  $category
        * @return \Illuminate\Http\Response
        */
        public function update(SaveCategory $request, Category $category)
        {
            $category->update($request->validated());
            return back()->with('status', 'Categoría ' . $category->title . ' actualizada correctamente');
        }

        /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Categoy  $category
        * @return \Illuminate\Http\Response
        */
        public function destroy(Category $category)
        {
            $category->delete();
            return back()->with('status', 'Categoría ' . $category->title . ' eliminada correctamente');
        }
    }
    ```
9. Commit Video 056:
    + $ git add .
    + $ git commit -m "Commit 056: Tarea: CRUD para las categorías"
    + $ git push -u origin main

### Video 057. Relación HasOne: Uno a Uno con FK
1. Crear relación **1:1 Category - Book** en el modelo **app\Book.php**:
    ```php
    // Relación 1:1 Category - Book
    public function category(){
        return $this->hasOne(Category::class);
    }
    ```
2. Crear método **testhasOne** en el controlador **app\Http\Controllers\Dashboard\BookController.php** para probar la relación creada en el paso anterior:
    ```php
    // Método para hacer pruebas con relación hasOne
    // Tipo clave foránea
    private function testhasOneFK(){
        // _id book: 618284129a5a00006b004f58
        $book = Book::find('618284129a5a00006b004f58');
        $category = Category::first();
        $book->category()->save($category);

        dd($book->category);
    }
    ```
    + Importar la definición del modelo **Category**:
    ```php
    use App\Category;
    ```
3. Probar método **testhasOne** con el método **index** del controlador **app\Http\Controllers\Dashboard\BookController.php** y luego comentar la invocación al método:
    ```php
    public function index()
    {
        // $this->testhasOne();
        $books = Book::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.book.index', compact('books'));
    }
    ```
4. Commit Video 057:
    + $ git add .
    + $ git commit -m "Commit 057: Relación HasOne: Uno a Uno con FK"
    + $ git push -u origin main

### Video 058. Relación HasOne: Con documento embebido
1. Crear método **testhasOneEmbedded** en el controlador **app\Http\Controllers\Dashboard\BookController.php** para probar la relación:
    ```php
    // Tipo documento embebido
    private function testhasOneEmbedded(){
        // _id book: 618284129a5a00006b004f58
        $book = Book::find('618284129a5a00006b004f58');
        $category = Category::first()->ToArray();

        $book->category = $category;
        $book->save();

        dd($book->category);
    }
    ```
2. Modficar el modelo **app\Book.php**:
    ```php
    <?php

    namespace App;

    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Book extends Model
    {
        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title', 'description', 'age', 'category'];
        protected $collection = 'books_collection';

        // Relación 1:1 Category - Book
        /* public function category(){
            return $this->hasOne(Category::class);
        } */
    }
    ```
3. Probar método **testhasOneEmbedded** con el método **index** del controlador **app\Http\Controllers\Dashboard\BookController.php** y luego comentar la invocación al método:
    ```php
    public function index()
    {
        // $this->testhasOne();
        // $this->testhasOneEmbedded();
        $books = Book::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.book.index', compact('books'));
    }
    ```
4. Commit Video 058:
    + $ git add .
    + $ git commit -m "Commit 058: Relación HasOne: Con documento embebido"
    + $ git push -u origin main

### Video 059. Relaciones de Uno a Muchos y de Muchos a Uno con FK
+ https://github.com/jenssegers/laravel-mongodb/tree/develop#relationships
+ https://github.com/jenssegers/laravel-mongodb/issues/1974#issuecomment-592859508
1. Modificar el modelo **app\Book.php**:
    ```php
    <?php

    namespace App;

    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Book extends Model
    {
        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title', 'description', 'age'/* , 'category' */];
        protected $collection = 'books_collection';

        // Relación 1:1 Category - Book
        /* public function category(){
            return $this->hasOne(Category::class);
        } */

        // Relación 1:n Category - Book
        public function category(){
            return $this->belongsTo(Category::class);
        }
    }
    ```
2. Modificar el modelo **app\Category.php**:
    ```php
    <?php

    namespace App;

    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Category extends Model
    {
        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title'];
        protected $collection = 'categories_collection';

        // Relación inversa 1:n Category - 
        public function books(){
            return $this->hasMany(Book::class);
        }
    }
    ```
3. Crear método **testHasManyFK** en el controlador **app\Http\Controllers\Dashboard\BookController.php** para probar la relación HasMany:
    ```php
    // Métodos para hacer pruebas con relación hasMany
    // Tipo clave foránea
    private function testHasManyFK(){
        // _id book: 6174a0164fa7d063b431b722
        $book = Book::find('6174a0164fa7d063b431b722');
        $category = Category::first();
        // dd($book->category);
        // $book->category()->save($category); /* NO VA A FUNCIONAR */

        $category->books()->save($book);
        dd($category->books);
    }
    ```
4. Probar método **testHasManyFK** con el método **index** del controlador **app\Http\Controllers\Dashboard\BookController.php** y luego comentar la invocación al método:
    ```php
    public function index()
    {
        // $this->testhasOne();
        // $this->testhasOneEmbedded();
        // $this->testHasManyFK();
        $books = Book::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.book.index', compact('books'));
    }
    ```
5. Commit Video 059:
    + $ git add .
    + $ git commit -m "Commit 059: Relaciones de Uno a Muchos y de Muchos a Uno con FK"
    + $ git push -u origin main

### Video 060. Relaciones de Uno a Muchos y de Muchos a Uno con documento embebido
1. Modificar el modelo **app\Book.php**:
    ```php
    <?php

    namespace App;

    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Book extends Model
    {
        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title', 'description', 'age'/* , 'category' */, 'categories'];
        protected $collection = 'books_collection';

        // Relación 1:1 Category - Book
        /* public function category(){
            return $this->hasOne(Category::class);
        } */

        // Relación 1:n Category - Book
        /* public function category(){
            return $this->belongsTo(Category::class);
        } */
    }
    ```
2. Modificar el modelo **app\Category.php**:
    ```php
    <?php

    namespace App;

    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Category extends Model
    {
        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title'];
        protected $collection = 'categories_collection';

        // Relación inversa 1:n Category - 
        /* public function books(){
            return $this->hasMany(Book::class);
        } */
    }
    ```
3. Crear método **testHasManyEmbedded** en el controlador **app\Http\Controllers\Dashboard\BookController.php** para probar la relación HasMany:
    ```php
    // Tipo documento embebido
    private function testHasManyEmbedded(){
        // _id book: 6182ecdd9a5a00006b004f5a
        $book = Book::find('6182ecdd9a5a00006b004f5a');
        $category = Category::first()->ToArray();

        $book->push('categories', $category);
        $book->save();

        dd($book->categories);
    }
    ```
4. Probar método **testHasManyEmbedded** con el método **index** del controlador **app\Http\Controllers\Dashboard\BookController.php** y luego comentar la invocación al método:
    ```php
    public function index()
    {
        // $this->testhasOne();
        // $this->testhasOneEmbedded();
        // $this->testHasManyFK();
        // $this->testHasManyEmbedded();
        $books = Book::orderBy('created_at', 'desc')->paginate(10);
        return view('dashboard.book.index', compact('books'));
    }
    ```
5. Commit Video 060:
    + $ git add .
    + $ git commit -m "Commit 060: Relaciones de Uno a Muchos y de Muchos a Uno con documento embebido"
    + $ git push -u origin main

### Nota 061. Tarea y recordatorio
1. Tarea y recordatorio:
    + Te queda como tarea aplicar las relaciones de tipo One to One y One to Many y viceversa de tipo FK y de documentos que vimos hasta este punto nuevamente en tu proyecto pero sin ver las clases; y esto es para reforzar conocimientos.
    + Recuerda que siempre es básico saber como operan este tipo de relaciones y cual emplear en tu proyecto, cual se adapta más a tus necesidades, si las de tipo documentos embebidos que son recomendadas cuando tienes datos únicos en la relación, cuando sabes que los datos a relacionar NO los vas a emplear o repetir en otros documentos/registros de la relación; por ejemplo, la dirección (o direcciones) de un usuario, que sabemos que es única y no se va a repetir para otros usuarios; por otra parte, las relaciones de tipo de FK son útiles cuando sabes que estos datos van a cambiar en el tiempo, por ejemplo, en el esquema de post y categorías en donde una categoría la vas a aplicar a más de un post.
2. Commit Nota 061:
    + $ git add .
    + $ git commit -m "Commit 061: Tarea y recordatorio"
    + $ git push -u origin main

### Video 062. Guardar categoría de un libro
1. Modificar el modelo **app\Category.php**:
    ```php
    <?php

    namespace App;

    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Category extends Model
    {
        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title'];
        protected $collection = 'categories_collection';

        // Relación inversa 1:n Category - 
        public function books(){
            return $this->hasMany(Book::class);
        }
    }
    ```
1. Modificar el modelo **app\Book.php**:
    ```php
    <?php

    namespace App;

    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Book extends Model
    {
        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title', 'description', 'age', 'category_id'];
        protected $collection = 'books_collection';

        // Relación 1:n Category - Book
        public function category(){
            return $this->belongsTo(Category::class);
        }
    }
    ```
2. Reprogramar el método **create** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function create()
    {
        $book = new Book();
        $categories = Category::pluck('_id', 'title');
        return view('dashboard.book.create', compact('book', 'categories'));
    }
    ```
3. Reprogramar el método **edit** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function edit(Book $book)
    {
        $categories = Category::pluck('_id', 'title');
        return view('dashboard.book.edit', compact('book', 'categories'));
    }
    ```
4. Modificar la vista **resources\views\dashboard\book\_form.blade.php**:
    ```php
    @csrf
    <label for="title">Título</label>
    <input name="title" id="title" type="text" class="form-control" value="{{ old('title', $book->title ) }}">

    <label for="age">Año</label>
    <input name="age" id="age" type="numeric" class="form-control" value="{{ old('age', $book->age ) }}">

    <label for="category_id">Categoría</label>
    <select name="category_id" id="category_id" class="form-control">
        @foreach ($categories as $title => $id)
            <option {{ $book->category_id == $id ? 'selected' : '' }} value="{{ $id }}">{{ $title }}</option>
        @endforeach
    </select>

    <label for="description">Descripción</label>
    <textarea name="description" id="description" class="form-control" cols="30" rows="10">
        {{ old('description', $book->description ) }}
    </textarea>
    ```
5. Modificar el método **myRules** del request **app\Http\Requests\SaveBook.php**:
    ```php
    public function myRules(){
        return [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:2000',
            'category_id' => 'required',
            'age' => 'required|integer',
        ];
    }
    ```
6. Commit Video 062:
    + $ git add .
    + $ git commit -m "Commit 062: Guardar categoría de un libro"
    + $ git push -u origin main

### Video 063. Código fuente de la sección
+ Código fuente de la sección: Por favor, no se les olvide de calificar el curso y dejarme una reseña si te ha servido y has aprendiendo; eso me ayuda a llegar a mas personas como tú y dar lo mejor de mí con más material para este curso!
+ [Código fuente de la sección](00_fuentes_autor\seccion08_laramongo.zip)
1. Commit Video 063:
    + $ git add .
    + $ git commit -m "Commit 063: Código fuente de la sección"
    + $ git push -u origin main

## Sección 09: Relaciones de muchos a muchos MongoDB y Laravel

### Video 064. Introducción
+ Contenido: Introducción a la sección.
1. Commit Video 064:
    + $ git add .
    + $ git commit -m "Commit 064: Código fuente de la sección"
    + $ git push -u origin main

### Video 065. Tarea: CRUD para los tags
1. Crear modelo **app\Tag.php**:
    ```php
    <?php

    namespace App;

    /* use Illuminate\Database\Eloquent\Model; */
    use Jenssegers\Mongodb\Eloquent\Model;

    class Tag extends Model
    {
        protected $primaryKey = '_id';
        protected $fillable = ['_id', 'title'];
        protected $collection = 'tags_collection';

        // Relación inversa 1:n Tag - 
        public function books(){
            //return $this->hasMany(Book::class);
        }
    }
    ```
2. Crear vista **resources\views\dashboard\tag\_form.blade.php**:
    ```php
    @csrf
    <label for="title">Título</label>
    <input name="title" id="title" type="text" class="form-control" value="{{ old('title', $tag->title ) }}">    
    ```
3. Crear vista **resources\views\dashboard\tag\create.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Crear tag
            </div>
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('tag.store') }}" method="post">
                    @include('dashboard.tag._form')
                    <input type="submit" value="Enviar" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    @endsection
    ```
4. Crear vista **resources\views\dashboard\tag\edit.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Editar tag: {{ $tag->title }}
            </div>
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('tag.update', $tag->_id) }}" method="post">
                    @method('PUT')
                    @include('dashboard.tag._form')
                    <input type="submit" value="Actualizar" class="mt-3 btn btn-success">
                </form>
            </div>
        </div>
    @endsection
    ```
5. Crear vista **resources\views\dashboard\tag\index.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Lista de tags MongoDB
            </div>
            <div class="card-body my-2">
                <a href="{{ route('tag.create') }}" class="btn btn-success text-white">
                    <i class="fa fa-plus"></i> Crear
                </a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Creación</th>
                            <th>Actualización</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tags as $tag)
                            <tr>
                                <td>{{ $tag->_id }}</td>
                                <td>{{ $tag->title }}</td>
                                <td>{{ $tag->created_at->format('d-m-Y') }}</td>
                                <td>{{ $tag->updated_at->format('d-m-Y') }}</td>
                                <td>
                                    <a class="btn btn-sm btn-success text-white" href="{{ route('tag.edit', $tag->_id) }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a 
                                        data-id="{{ $tag->_id }}"
                                        data-title="{{ $tag->title }}"
                                        class="btn btn-sm btn-danger text-white" 
                                        href="#" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#deleteModal"
                                    >
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $tags->links() }}
            </div>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar <span></span></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Seguro que quieres eliminar el registro seleccionado?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form id="formDelete" data-action="{{ route('tag.destroy', 0) }}" action="{{ route('tag.destroy', 0) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- script Modal --}}
        <script>
        var deleteModal = document.getElementById('deleteModal')
        deleteModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            var button = event.relatedTarget
            // Extract info from data-bs-* attributes
            var id = button.getAttribute('data-id')
            var title = button.getAttribute('data-title')

            // Form
            var action = document.getElementById('formDelete').getAttribute('data-action')
            action = action.slice(0,-1)
            document.getElementById('formDelete').setAttribute('action', action + id)
            
            // Update the modal's content.
            var modalTitle = deleteModal.querySelector('.modal-title span')

            modalTitle.textContent = title
        })
        </script>
    @endsection
    ```
6. Modificar archivo de rutas **routes\web.php**:
    ```php
    ≡
    Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function () {
        ≡
        Route::resource('tag', 'TagController');
    });
    ```
7. Crear request **app\Http\Requests\SaveTag.php**:
    ```php
    <?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;

    class SaveTag extends FormRequest
    {
        /**
        * Determine if the user is authorized to make this request.
        *
        * @return bool
        */
        public function authorize()
        {
            return true;
        }

        /**
        * Get the validation rules that apply to the request.
        *
        * @return array
        */
        public function rules()
        {
            return $this->myRules();
        }

        public function myRules(){
            return [
                'title' => 'required|string|max:255',
            ];
        }
    }
    ```
8. Crear controlador **app\Http\Controllers\Dashboard\TagController.php**:
    ```php
    <?php

    namespace App\Http\Controllers\Dashboard;

    use App\Tag;
    use App\Http\Controllers\Controller;
    use App\Http\Requests\SaveTag;
    use Illuminate\Http\Request;

    class TagController extends Controller
    {
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
            $tags = Tag::orderBy('created_at', 'desc')->paginate(10);
            return view('dashboard.tag.index', compact('tags'));
        }

        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {
            $tag = new Tag();
            return view('dashboard.tag.create', compact('tag'));
        }

        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(SaveTag $request)
        {
            Tag::create($request->validated());
            return back()->with('status', 'Tag creado correctamente');
        }

        /**
        * Display the specified resource.
        *
        * @param  \App\Tag  $tag
        * @return \Illuminate\Http\Response
        */
        public function show(Tag $tag)
        {
            //
        }

        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\Tag  $tag
        * @return \Illuminate\Http\Response
        */
        public function edit(Tag $tag)
        {
            return view('dashboard.tag.edit', compact('tag'));
        }

        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\Tag  $tag
        * @return \Illuminate\Http\Response
        */
        public function update(SaveTag $request, Tag $tag)
        {
            $tag->update($request->validated());
            return back()->with('status', 'Tag ' . $tag->title . ' actualizado correctamente');
        }

        /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Tag  $tag
        * @return \Illuminate\Http\Response
        */
        public function destroy(Tag $tag)
        {
            $tag->delete();
            return back()->with('status', 'Tag ' . $tag->title . ' eliminado correctamente');
        }
    }
    ```
9. Commit Video 065:
    + $ git add .
    + $ git commit -m "Commit 065: Tarea: CRUD para los tags"
    + $ git push -u origin main

### Video 066. Relación Many To Many (Muchos a Muchos) con FK
1. Crear función de prueba **testBelongsManyFK** en controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    private function testBelongsManyFK(){
        // tagID 61cb5bece634000070003af4 61cb5bc9e634000070003af3
        $book = Book::find('6182f9bf9a5a00006b004f5b');
        $tag = Tag::find("61cb5bece634000070003af4");

        dd($book->tags());

        $book->tags()->attach(
            $tag
        );
    }
    ```
2. Modificar modelo **app\Book.php**:
    ```php
    ≡
    class Book extends Model
    {
        ≡
        // Relación n:m Tag - Book
        public function tags(){
            return $this->belongsToMany(Category::class);
        }
    }
    ```
3. Modificar el método **books** del modelo **app\Tag.php**:
    ```php
    // Relación inversa 1:n Category - 
    public function books(){
        return $this->belongsToMany(Book::class);
    }
    ```
4. Commit Video 066:
    + $ git add .
    + $ git commit -m "Commit 066: Relación Many To Many (Muchos a Muchos) con FK"
    + $ git push -u origin main

### Video 067. Tags Libros: Estructura inicial
1. Modificar el método **edit** del controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function edit(Book $book)
    {
        $categories = Category::pluck('_id', 'title');
        $tags = Tag::pluck('_id', 'title');
        return view('dashboard.book.edit', compact('book', 'categories', 'tags'));
    }
    ```
2. Crear vista **resources\views\dashboard\book\_tags.blade.php**:
    ```php
    <div class="row">
        <div class="col-10">
            <select id="tag_id" class="form-control">
                @foreach ($tags as $title => $id)
                    <option value="{{ $id }}">{{ $title }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <button class="btn btn-success" id="tag_save">Enviar</button>
        </div>
    </div>

    @foreach ($book->tags as $tag)
        <button id="{{ $tag->_id }}" class="btn btn-danger btn-sm mt-2 ml-1"><i class="fa fa-trash"></i>{{ $tag->title }}</button>
    @endforeach
    ```
3. Modificar la vista **resources\views\dashboard\book\edit.blade.php**:
    ```php
    @extends('dashboard.master')
    @section('content')
        <div class="card mt-4">
            <div class="card-header">
                Editar libro: {{ $book->title }}
            </div>
            <div class="card-body">
                @include('dashboard.partials.errors-form')
                <form action="{{ route('book.update', $book->_id) }}" method="post">
                    @method('PUT')
                    @include('dashboard.book._form')
                    <input type="submit" value="Actualizar" class="mt-3 btn btn-success">
                </form>
            </div>

            <div class="card-header">
                Etiquetas de libro: {{ $book->title }}
            </div>
            <div class="card-body">
                @include('dashboard.book._tags')
            </div>
        </div>
    @endsection
    ```
4. Commit Video 067:
    + $ git add .
    + $ git commit -m "Commit 067: Tags Libros: Estructura inicial"
    + $ git push -u origin main

### Video 068. Tags Libros: Guardar etiquetas de los libros
1. Crear el método **tag_add** en el controlador **app\Http\Controllers\Dashboard\BookController.php**:
    ```php
    public function tag_add(Book $book, Tag $tag){
        $book->tags()->attach($tag);
    }
    ```
2. Crear ruta **tag/add** en **routes\web.php**:
    ```php
    ≡
    Route::group(['prefix' => 'dashboard', 'namespace' => 'Dashboard', 'middleware' => 'auth'], function () {
        ≡
        Route::get('tag/add/{book}/{tag}', 'BookController@tag_add');
    });
    ```
3. Modificar la vista **resources\views\dashboard\book\_tags.blade.php**:
    ```php
    ```
4. mmm
5. Commit Video 068:
    + $ git add .
    + $ git commit -m "Commit 068: Tags Libros: Guardar etiquetas de los libros"
    + $ git push -u origin main

### Video 069. Tags Libros: Eliminar etiquetas de los libros
### Video 070. Código fuente de la sección
### Video 071. Documentos por referencia





    ≡
    ```php
    ```

## Comandos Git:
+ Historial de commit:
    + git log --pretty=oneline
+ Borrar ultimo commit:
    + git reset HEAD^ --soft
+ Forzar push
    + git push origin -f

## Conectar MongoDB con PHP utilizando XAMPP y Composer:
1. Ir a https://www.mongodb.com/try/download/community
2. Descargar e instalar la versión actual de MongoDB para tu SO.
3. Iniciar los servicios de MongoDB ejecutano en una terminal:
    + mongod
4. Anexar la siguiente ruta a las variables de entorno de Windows:
    + C:\Program Files\MongoDB\Server\5.0\bin
5. Ir a https://pecl.php.net/package/mongodb y descargar la DLL (**X:X Thread Safe (TS) x64**) de la versión más actual y estable.
6. Descomprimimos la descargas y movemos el archivo **php_mongodb.dll** a **C:\xampp\php\ext** el resto de la descarga lo borramos.
7. Modificar el archivo de configuración **C:\xampp\php\php.ini** para agregar la extensión de MongoDB **extension=php_mongodb.dll**:
    ```ini
    ≡
    ;extension=soap
    ;extension=sockets
    ;extension=sodium
    ;extension=sqlite3
    ;extension=tidy
    ;extension=xmlrpc
    ;extension=xsl
    extension=php_mongodb.dll

    ;;;;;;;;;;;;;;;;;;;
    ; Module Settings ;
    ;;;;;;;;;;;;;;;;;;;
    ≡
    ```
8. Para probar la correcta instalación:
    + Crear archivo **C:\xampp\htdocs\test.php**:
        ```php
        <?php
            echo phpinfo();
        ?>
        ```
    + En un navegador escribimos la siguiente ruta:
        + http://localhost/test.php
            + **Nota**: verificar que este encendido el servidor **Apache** de **XAMPP**.
        + **Nota**: si todo salio bien debe aparecer el servicio de mongodb en la página.
9. Ir a https://getcomposer.org y descargar e instalar Composer.
    + **Nota**: verificar que la ruta completa de PHP sea:
        + C:\xampp\php\php.exe
10. Ejeuctar la siguiente instrucción para todos aquellos proyectos que requieran de MongoDB:
    + $ composer require mongodb/mongodb

## Conectar MongoDB con PHP utilizando Laragon y Composer:
1. Ir a https://www.mongodb.com/try/download/community
2. Descargar en formato **zip** la versión actual de MongoDB para tu SO.
3. Descomprimir la descarga y extraer la carpeta **bin** (lo demás se puede eliminar).
4. Renombrar la carpeta **bin** a **mongodb-[versión]** (Ejm.: **mongodb-5.03**) y ubicarla en:
    + C:\laragon\bin\mongodb
5. En laragon ir a **Menú > MongoDB** y cambiar la versión a la nueva.
5. Anexar la siguiente ruta a las variables de entorno de Windows:
    + C:\laragon\bin\mongodb\mongodb-[versión]
6. Ir a https://pecl.php.net/package/mongodb y descargar la DLL (**X:X Thread Safe (TS) x64**) de la versión más actual y estable.
7. Descomprimimos la descargas y movemos el archivo **php_mongodb.dll** a **C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\ext** el resto de la descarga lo borramos.
8. Modificar el archivo de configuración **C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\php.ini** para agregar la extensión de MongoDB **extension=php_mongodb.dll**:
    ```ini
    ≡
    ;extension=soap
    ;extension=sockets
    ;extension=sodium
    ;extension=sqlite3
    ;extension=tidy
    ;extension=xmlrpc
    extension=xsl
    extension=php_mongodb.dll

    ;;;;;;;;;;;;;;;;;;;
    ; Module Settings ;
    ;;;;;;;;;;;;;;;;;;;
    ≡
    ```
9.  Para probar la correcta instalación:
    + Crear archivo **C:\laragon\www\test\test.php**:
        ```php
        <?php
            echo phpinfo();
        ?>
        ```
    + En un navegador escribimos la siguiente ruta:
        + http://test.test
            + **Nota**: verificar que esten levantados los servicios de **Laragon**.
        + **Nota**: si todo salio bien debe aparecer el servicio de mongodb en la página.
10. Ir a https://getcomposer.org y descargar e instalar Composer.
    + **Nota**: verificar que la ruta completa de PHP sea:
        + C:\laragon\bin\php\php-7.4.19-Win32-vc15-x64\php.exe
11. Ejeuctar la siguiente instrucción para todos aquellos proyectos que requieran de MongoDB:
    + $ composer require mongodb/mongodb

## Crear base de datos en MongoDB Atlas
1. mmmm






---------------------------------------------------------------------
## Creación del proyecto Laravel - Jetstream
1. Crear proyecto **fid_2022**:
    + $ laravel new fid_2022 --jet
    + Seleccionar **livewire**.
    + No trabajaremos con equipos:
        - Will your application use teams? (yes/no) [no]: no
2. Instalar Node Package Manager y compilar sus dependencias:
    + $ npm install
    + $ npm run dev
3. Crear un dominio local: **fid_2022.test**.
    + [Guía de Coders Free para crear un dominio local](https://codersfree.com/blog/como-generar-un-dominio-local-en-windows-xampp)
4. Crear base de datos **fid_2022** en MySQL (Cotejamiento: **utf8_general_ci**).
5. Hacer coincidir los parámetros de base de datos y de dominio del proyecto en **.env** en caso de ser necesario:
    ```env
    APP_NAME="FID"
    ≡
    APP_URL=http://fid_2022.test
    ≡
    DB_DATABASE=fid_2022
    ≡
    ```
6. Ejecutar migraciones:
    + $ php artisan migrate
7. Realizar commit:
    + $ git add .
    + $ git commit -m "Creación del proyecto Laravel - Jetstream"
    + $ git push -u origin main

## Creación del esqueleto del proyecto
1. Modificar vista **resources\views\welcome.blade.php** para adaptarla al proyecto **FID** como página de **bienvenida**.
2. Modificar vista **resources\views\dashboard.blade.php** para adaptarla al proyecto **FID** como página de **inicio**.
3. Modificar menú de navegación **resources\views\navigation-menu.blade.php**.
4. Crear archivo de rutas **routes\admin.php** para administrar el módulo de administración (**admin**):
    ```php
    <?php

    use Illuminate\Support\Facades\Route;
    ```
5. Crear archivo de rutas **routes\formation.php** para administrar el módulo de formación (**formation**):
    ```php
    <?php

    use Illuminate\Support\Facades\Route;
    ``` 
6. Crear archivo de rutas **routes\investigation.php** para administrar el módulo de formación (**investigation**):
    ```php
    <?php

    use Illuminate\Support\Facades\Route;
    ``` 
7. Crear archivo de rutas **routes\documentation.php** para administrar el módulo de documentación (**documentation**):
    ```php
    <?php

    use Illuminate\Support\Facades\Route;
    ``` 
8. Crear archivo de rutas **routes\diffusion.php** para administrar el módulo de difusión (**diffusion**):
    ```php
    <?php

    use Illuminate\Support\Facades\Route;
    ```
9. Registrar los nuevos archivos de rutas en el provider **app\Providers\RouteServiceProvider.php**:
    ```php
    ≡
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('web', 'auth')
                ->name('admin.')
                ->prefix('admin')
                ->namespace($this->namespace)
                ->group(base_path('routes/admin.php'));
                
            Route::middleware('web')
                ->name('formation.')
                ->prefix('formation')
                ->namespace($this->namespace)
                ->group(base_path('routes/formation.php'));
                
            Route::middleware('web')
                ->name('investigation.')
                ->prefix('investigation')
                ->namespace($this->namespace)
                ->group(base_path('routes/investigation.php'));
                
            Route::middleware('web')
                ->name('documentation.')
                ->prefix('documentation')
                ->namespace($this->namespace)
                ->group(base_path('routes/documentation.php'));
                
            Route::middleware('web')
                ->name('diffusion.')
                ->prefix('diffusion')
                ->namespace($this->namespace)
                ->group(base_path('routes/diffusion.php'));
        });
    }
    ≡
    ```
10. Estructura los directorios del proyecto para las **vistas**:
    + resources\views\admin
    + resources\views\formation
    + resources\views\investigation
    + resources\views\documentation
    + resources\views\diffusion
11. Estructura los directorios del proyecto para los **modelos**:
    + app\Models\admin
    + app\Models\formation
    + app\Models\investigation
    + app\Models\documentation
    + app\Models\diffusion
12. Estructura los directorios del proyecto para los **controladores**:
    + app\Http\Controllers\admin
    + app\Http\Controllers\formation
    + app\Http\Controllers\investigation
    + app\Http\Controllers\documentation
    + app\Http\Controllers\diffusion
13. Realizar commit:
    + $ git add .
    + $ git commit -m "Creación del esqueleto del proyecto"
    + $ git push -u origin main

## Instalación de dependencias principales
+ [Laravel Permission](https://spatie.be/docs/laravel-permission/v3/basic-usage/basic-usage)
+ [Laravel AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE)
+ [Plantilla AdminLTE](https://adminlte.io/themes/v3/index.html)
+ [Documentación Laravel Collective](https://laravelcollective.com/docs/6.x/html)
+ [Sweetalert2](https://sweetalert2.github.io)
+ [Bootstrap GitHub](https://github.com/twbs/bootstrap)
+ [Bootstrap npm](https://www.npmjs.com/package/bootstrap)
1. Instalación de **Laravel Permission** para la implementación de un sistema de roles y permisos:
    + $ composer require spatie/laravel-permission
    + Publicar las vistas de Laravel Permission:
        + $ php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
    + Ejecutar las migraciones:
        + $ php artisan migrate
    + Implementar el trait **HasRoles** en el modelo **User**:
        ```php
        ≡
        use Spatie\Permission\Traits\HasRoles;

        class User extends Authenticatable
        {
            ≡
            use HasRoles;
            ≡
        }
        ```
2. Integración de plantilla **AdminLTE** para el panel administrativo:
	+ $ composer require jeroennoten/laravel-adminlte
    + $ php artisan adminlte:install
    + Publicar vista de AdminLTE:
        + $ php artisan adminlte:install --only=main_views
        + **Nota 1**: En **resources\views\vendor\adminlte\page.blade.php** es de donde se extienden las plantillas.
        + **Nota 2**: Modelo de uso de la plantilla AdminLTE:6. Diseñar vista para pruebas **resources\views\admin\index.blade.php**:
            ```php
            @extends('adminlte::page')

            @section('title', 'Sistemas de roles y permisos | Soluciones++')

            @section('content_header')
                <h1>Sistemas de roles y permisos</h1>
            @stop

            @section('content')
                <p>Sistemas de roles y permisos</p>
            @stop

            @section('css')
                {{-- ARCHIVOS CSS REQUERIDOS POR LA APLICACIÓN --}}
            @stop

            @section('js')
                {{-- ARCHIVOS JS REQUERIDOS POR LA APLICACIÓN --}}
            @stop
            ```
3. Instalar **Laravel Collective** para hacer formularios:
    + $ composer require laravelcollective/html
4. Instalar **Sweetalert2** para notificaciones:
    + $ php artisan adminlte:plugins install
    + Modificar en **config\adminlte.php**:
        ```php
        ≡
        'Sweetalert2' => [
            'active' => true,   /* Activamos para todas las vistas de la plantilla Sweetalert2 */
            'files' => [
                [
                    'type' 		=> 'js',
                    'asset' 	=> true,
                    'location' 	=> 'vendor/sweetalert2/sweetalert2.all.min.js',
                ],
            ],
        ],
        ≡
        ```
    + Agregamos la siguiente instrucción al archivo **resources\js\app.js**:
        ```js
        window.Swal = require('sweetalert2');
        ```
    + $ npm install sweetalert2
	+ $ npm run dev
5. Instalar Bootstrap:
    + $ npm install bootstrap
7. Instalar Font Awesome:
    + $ npm i font-awesome
8. Realizar commit:
    + $ git add .
    + $ git commit -m "Instalación de dependencias principales"
    + $ git push -u origin main

## Configurar un servicio de base de datos MongoDB

## Crear un servicio de base de datos MySQL en AWS

## Crear un servicio de base de datos MongoDB en AWS

## Deploy del proyecto en AWS

    ```php
    ```

## Comandos Git
+ Crear repositorio local:
    + $ git init
+ Agregar cambios al staging:
    + $ git add .
+ Realizar confirmación de los cambios (empaquetar los cambios):
    + $ git commit -m "Antes de iniciar"
+ Crear rama principal
    + $ git branch -M main
+ Enlazar repositorio Local con proyecto GitHub
    + $ git remote add origin https://github.com/petrix12/fid_2022.git
+ Sincronizar de Local a GitHub:
    + $ git push -u origin main


+ Sincronizar de GitHub a Local:
    + $ git pull --rebase origin



+ Configuración de email:
    + $ git config --global user.email "bazo.pedro@gmail.com"
+ Configuración del nombre de usuario:
    + $ git config --global user.name "Pedro Bazó"
+ Verificar los datos guardados de configuración:
    + $ git config --global -e  (muestra el resultado en el editor de texto predeterminado)
    + $ git config --global -l  (muestra el resultado en la misma terminal)
    + $ git config user.name    (muestra el nombre de usuario)
    + $ git config user.email   (muestra el eamil de usuario)
+ Listar la configuración inicial de Git:
    + $ git config --list
+ Verificar modificaciones en repositorio:
    + $ git status
+ Sacar un archivo del staging:
    + $ git reset HEAD archivo.txt
+ Regresar todo al commit anterior (se perderán todos los cambios): 
    + $ git checkout .
+ Ver todos los commits:
    + $ git log
    + $ git show
+ Volver a un commit determinado:
    + $ git checkout 0e26441c67500daa2b3cc16a101f8994e57c6dff
+ Crear una rama:
    + $ git branch nueva_rama
+ Ver en que rama estamos:
    + $ git branch
+ Cambiar de rama:
    + $ git branch otra_rama
+ Unir una rama con la principal:
    + $ git merge rama_a_unir
+ Eliminar una rama:
    + $ git branch -d rama_a_eliminar
+ Traer las actualizaciones desde GitHub:
    + git pull origin main



## Deploy en DigitalOcean
+ https://www.digitalocean.com/community/tutorials/how-to-install-mysql-on-ubuntu-20-04-es
+ https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-20-04

### Creación del cloud
1. Ingresar a [DigitalOcean](https://cloud.digitalocean.com/login).
2. Crear Droplets (Create cloud servers).
3. Seleccionar un sistema operativo Ubuntu y seleccione:
    + Select additional options:
        + Monitoring
        + IPv6
        + User data
    + Choose a hostname: fid-2022

### Conexión SSH con PuTTY en windows
+ https://docs.digitalocean.com/products/droplets/how-to/connect-with-ssh/putty
1. Descargar e instalar PuTTY en https://www.chiark.greenend.org.uk/~sgtatham/putty/latest.html
2. Ejecutar y configurar PuTTY:
    + Session:
        + Nombre de host (o dirección IP): ************
        + Port: 22
        + Tipo de conexión: SSH
    + Connection
        + Data:
            + Nombre de usuario de inicio de sesión automático: root
        + SSH: Asegúrese de que **2** esté seleccionado para la versión del protocolo SSH.
    + Session:
        + Sesiones guardadas: **fid2022**
        + Presionar el botón **Save**
3. Conexión SSH:
    + Ejecutar PuTTY:
    + Session:
        + Seleccionar session: **fid2022**
        + Presionar botón **Load**
        + Presionar botón **Open**
    + **Nota**: se abrirá una terminal solicitando la clave y listo.

### Configurar servidor web
1. En la terminal del servidor del proyecto **fid-2022** en DigitalOcean:
    + Actualizar servidor:
        + $ sudo apt-get update
        + $ sudo apt-get upgrade
        + Do you want to continue? [Y/n]: y
    + Actualizar nuevamente el servidor:
        + $ sudo apt-get update
    + Configurar entorno para ejecutar Laravel:
        + $ sudo apt-get install software-properties-common
        + $ sudo add-apt-repository ppa:ondrej/php
        + Press [ENTER] to continue or Ctrl-c to cancel adding it: ENTER.
    + Actualizar nuevamente el servidor:
        + $ sudo apt-get update
    + Instalar php:
        + $ sudo apt-get install php7.4
        + Do you want to continue? [Y/n]: y
    + Instalar el servidor apache:
        + $ sudo apt-get install apache2
        + $ sudo apt-get install libapache2-mod-php7.4
        + Para ver la versión de php:
            + $ php -v
        + Para saber los modulos instalados en php:
            + $ php -m
            + **Nota**: Constrastar contra **https://laravel.com/docs/8.x/deployment#server-requirements** y verificar cuales son necesarias.
    + Instalar extensiones de php necesarias para Laravel:
        + $ sudo apt-get install php7.4-bcmath
        + $ sudo apt-get install php7.4-mbstring
            + Do you want to continue? [Y/n]: y
        + $ sudo apt-get install php7.4-xml
    + Instalar paquetes que necesitaremos más adelante:
        + $ sudo apt-get install unzip
        + $ sudo apt-get install php7.4-zip
            + Do you want to continue? [Y/n]: y
        + $ sudo apt-get install php7.4-mysql
        + $ sudo apt-get install php7.4-curl
    + Reiniciar el servidor apache:
        + $ sudo service apache2 restart
    + Para verificar que no tengamos ningún error:
        + $ sudo service apache2 status
    + Habilitar el modulo rewrite
        + $ sudo a2enmod rewrite
    + Reiniciar el servidor apache:
        + $ sudo service apache2 restart
    + Definir punto de acceso a nuestra aplicación web:
        + Ingresar a la ruta: /var/www/html
            + $ cd /var/www/html
            + **Nota 1**: para ver los archivos contenidos en una ruta:
                + $ ls
            + **Nota 2**: para editar el archivo **index.html**:
                + $ sudo nano index.html
                + Para guardar, presionar:
                    + Ctrl + X
                    + y
                    + ENTER
    + Editar archivo de configuración de punto de acceso:
        + $ sudo nano /etc/apache2/sites-enabled/000-default.conf
            + Cambiar línea:
                * DocumentRoot /var/www/html
            + Por:
                * DocumentRoot /var/www/fid_2022/public
            + Para guardar, presionar:
                + Ctrl + X
                + y
                + ENTER
    + Reiniciar el servidor apache:
        + $ sudo service apache2 restart

### Instalar Composer en servidor web
1. Copiar de la página: **https://getcomposer.org/download**, el bloque de **Command-line installation**:
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === '906a84df04cea2aa72f40b5f787e49f22d4c2f19492ac310e8cba5b96ac8b64115ac402c8cd292b8a03482574915d1a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
2. En la terminal del servidor web pegar las líneas de comandos que acabamos de copiar y presionar ENTER.
3. Realizar la instalación global de composer:
    + $ sudo mv composer.phar /usr/local/bin/composer
    + **Nota**: Este comando se encuentra en **https://getcomposer.org/doc/00-intro.md**
    + Para comprobar que tenemos instalado composer, ejecutar:
        + $ composer

### Clonar nuestro repositorio de Git
1. Ir a la ruta **/var/www**:
    + $ cd /var/www
2. Clonar el repositorio del proyecto:
    + $ sudo git clone https://github.com/petrix12/fid_2022.git
3. Ir a la ruta **/var/www/awsejemplo**:
    + $ cd /var/www/fid_2022
4. Para poder instalar las dependencias de composer, ejecutar:
    + $ sudo chown -R root:www-data .
5. Ejecutar permisos para la carpeta de laravel:
    + $ chmod -R 755 .
    + $ chmod -R 777 ./storage
6. Instalar composer:
    + $ composer install
7. Crear el archivo **.env**:
    + $ touch /var/www/fid_2022/.env
8. Eidtar archivo de variable de entorno **.env**:
    + $ sudo nano /var/www/fid_2022/.env
        ```env
        APP_NAME=FID
        APP_ENV=production
        APP_KEY=base64:pe5xSWArGyI1gjwQVYV/vbbdEuyCh0O+ozbP3BJqjJs=
        APP_DEBUG=false
        APP_URL=http://137.184.246.143

        LOG_CHANNEL=stack
        LOG_DEPRECATIONS_CHANNEL=null
        LOG_LEVEL=debug

        DB_CONNECTION=mysql
        DB_HOST=107.180.2.195
        DB_PORT=3306
        DB_DATABASE=fid
        DB_USERNAME=pxvim6av41qx
        DB_PASSWORD="L5=Rj#8lW}YuK"

        BROADCAST_DRIVER=log
        CACHE_DRIVER=file
        FILESYSTEM_DRIVER=local
        QUEUE_CONNECTION=sync
        SESSION_DRIVER=database
        SESSION_LIFETIME=120

        MEMCACHED_HOST=127.0.0.1

        REDIS_HOST=127.0.0.1
        REDIS_PASSWORD=null
        REDIS_PORT=6379

        MAIL_MAILER=smtp
        MAIL_HOST=mailhog
        MAIL_PORT=1025
        MAIL_USERNAME=null
        MAIL_PASSWORD=null
        MAIL_ENCRYPTION=null
        MAIL_FROM_ADDRESS=null
        MAIL_FROM_NAME="${APP_NAME}"

        AWS_ACCESS_KEY_ID=
        AWS_SECRET_ACCESS_KEY=
        AWS_DEFAULT_REGION=us-east-1
        AWS_BUCKET=
        AWS_USE_PATH_STYLE_ENDPOINT=false

        PUSHER_APP_ID=
        PUSHER_APP_KEY=
        PUSHER_APP_SECRET=
        PUSHER_APP_CLUSTER=mt1

        MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
        MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
        ```
9.  Generar llave del proyecto:
    + $ php artisan key:generate
10. Instalar NodeJs:
    + $ sudo apt install nodejs
        * Do you want to continue? [Y/n]: y
11. Para ver la versión de NodeJs:
    + $ nodejs -v
12. Actualizar NodeJs:
    + $ curl -sL https://deb.nodesource.com/setup_14.x | sudo -E bash -
13. Ejecutar:
    + $ sudo apt-get install -y nodejs
14. Para ver la versión de npm:
    + $ npm -v
15. Ejecutar:
    + $ npm install
    <!-- + $ npm run dev -->
    + $ npm run prod
16. Para editar **.env**:
    + $ nano .env
17. Reiniciar el servidor de apache:
    + $ sudo service apache2 restart
18. Para ver el estatus del servidor apache:
    + $ sudo service apache2 status

### Instalar y configurar MySQL en el servidor web:
1. Instalar MySQL:
    + $ sudo apt update
    + $ sudo apt install mysql-server
    + $ mysql
    + > CREATE DATABASE fid;
2. mmm






### Fix: Configuración del servidor web
1. Ingresar al archivo de configuración de apache en la terminal ftp:
    + $ sudo nano /etc/apache2/apache2.conf
2. Comentar las siguientes líneas con #:
    ```conf
    # User ${APACHE_RUN_USER}
    # Group ${APACHE_RUN_GROUP}
    ```
3. A continuación agregar las líneas:
    ```conf
    # User ubuntu
    User root
    Group ubuntu
    ```
4. Cambiar el siguiente bloque de códgio:
    ```conf
    <Directory /var/www/>
        Options Indexes FollowSymLinks
        AllowOverride None
        Require all granted
    </Directory>
    ```
    Por:
    ```conf
    <Directory /var/www/>
        Options Indexes FollowSymLinks
        AllowOverride All 
        Require all granted
    </Directory>
    ```
5. Para guardar los cambios:
    + $ Ctrl + X
    + $ y
    + $ ENTER
6. Habilitar modo rewrite:
    + $ sudo a2enmod rewrite
7. Reiniciar el servidor de apache:
    + $ sudo service apache2 restart
1. Para ver el estatus del servidor apache:
    + $ sudo service apache2 status



### Ajustes finales
1. Ingresa a la terminal y escribe:
    + $ sudo nano /etc/apache2/sites-enabled/000-default.conf
2. Al editar el archivo anterior añadir las siguientes reglas:
    + RewriteEngine On
    + RewriteCond %{HTTP:X-Forwarded-Proto} =http
    + RewriteRule .* https://%{HTTP:Host}%{REQUEST_URI} [L,R=permanent]
    + **Nota**: añadir al final del archivo y antes del cierre de </VirtualHost>
    + Salvar el archivo: 
        + $ Ctrl + X
        + $ y
        + $ ENTER
3. Reiniciar el servidor de apache:
    + $ sudo service apache2 restart