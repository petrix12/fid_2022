# Proyecto FID: Formación, Investigación y Documentación
+ URL local:
+ URL prueba:
+ URL producción:
+ Figma: https://www.figma.com/proto/qAREYzpdkJtjdE262QOCwb/CDS?node-id=79%3A2&scaling=min-zoom&page-id=2%3A2&starting-point-node-id=79%3A2
+ Repositorio GitHub:

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






    ```php
    ```