# Crea tus aplicaciones con Laravel y MongoDB
+ [URL del curso en Udemy](https://www.udemy.com/course/crea-tus-aplicaciones-con-laravel-y-mongodb)
+ [URL del repositorio en GitHub](https://github.com/petrix12/laravel_mongodb_2021.git)
+ [Comando comunes MongoDB](consultas.md)

## Antes de iniciar:
1. Crear proyecto en la página de [GitHub](https://github.com) con el nombre: **laravel_mongodb_2021**.
    + **Description**: Proyecto para seguir el curso de Crea tus aplicaciones con Laravel y MongoDB, creado por Andrés Cruz Yoris en Udemy.
    + **Public**.
2. En la ubicación raíz del proyecto en la terminal de la máquina local:
    + $ git init
    + $ git add .
    + $ git commit -m "Commit 000: Antes de iniciar"
    + $ git branch -M main
    + $ git remote add origin https://github.com/petrix12/laravel_mongodb_2021.git
    + $ git push -u origin main

## Sección 01: Introducción

### Video 001. Introducción
+ **Contenido**: Breve introducción sobre el curso.
1. Commit Video 001:
    + $ git add .
    + $ git commit -m "Commit 001: Introducción"
    + $ git push -u origin main

### Video 002. **** IMPORTANTE: Realizar preguntas
1. Recuerda que si quieres ver TODO el contenido e ir viendo TODO lo que voy subiendo a lo largo del mes, desde la sección de anuncios es mi blog puedes buscar la publicación o desde este enlace:
    + https://www.desarrollolibre.net/anuncios/contenido-para-septiembre-2021-actualizaciones-cursos-flask-vue-y-nuevo-curso-vue-native
2. Youtube:
    + [Aprende a usar las redirecciones en Django en menos de 5 minutos](https://www.youtube.com/watch?v=EvS-H-Y8T0M)
    + [Migrar de RaisedButton a un ElevatedButton en Flutter](https://www.youtube.com/watch?v=EvS-H-Y8T0M)
3. Mi Blog
    + [Conoce unas historias de éxitos de empresas que migraron a Vue](https://www.desarrollolibre.net/blog/vue/9-empresas-que-utilizan-vuejs-en-2021)
    + [Operaciones tipo CRUD con MongoDB](https://www.desarrollolibre.net/blog/mongodb/realizar-operaciones-crud-con-mongodb)
4. Commit Video 002:
    + $ git add .
    + $ git commit -m "Commit 002: **** IMPORTANTE: Realizar preguntas"
    + $ git push -u origin main

### Video 003. Sobre el curso
1. Instalar Laravel.
2. Commit Video 003:
    + $ git add .
    + $ git commit -m "Commit 003: Sobre el curso"
    + $ git push -u origin main

### Video 004. Estructura del curso
+ **Contenido**: El objetivo principal del curso es aprender trabajar MongoDB en Laravel.
1. Commit Video 004:
    + $ git add .
    + $ git commit -m "Commit 004: Estructura del curso"
    + $ git push -u origin main

### Video 005. Requisitos para tomar el curso
+ **Contenido**: Sobre requisitos del curso.
1. Commit Video 005:
    + $ git add .
    + $ git commit -m "Commit 005: Requisitos para tomar el curso"
    + $ git push -u origin main

### Video 006. Sobre las calificaciones
+ **Contenido**: Evaluar el curso honestamente.
1. Commit Video 006:
    + $ git add .
    + $ git commit -m "Commit 006: Sobre las calificaciones"
    + $ git push -u origin main

## Sección 02: Preparar el entorno de desarrollo

### Video 007. Instalar MongoDB en Windows con Laragon
+ https://www.mongodb.com/es
+ https://laragon.org/docs/quick-add.html
+ https://forum.laragon.org/topic/815/mongodb-addon-for-laragon
1. Ejecutar **Laragon** e ir a **Menú > Herramientas > Quick add > mongodb-4** para instalar MongoDB.
    + **Nota**: MongoDB se instalará en **C:\laragon\bin\mongodb\mongodb-4.0.3**
    + **Ruta para ejecutar MongoDB**: C:\laragon\bin\mongodb\mongodb-4.0.3\
2. Reiniciar los servicios de **Laragon** para activar los servicios de **MongoDB**.
3. Commit Video 007:
    + $ git add .
    + $ git commit -m "Commit 007: Instalar MongoDB en Windows con Laragon"
    + $ git push -u origin main

### Nota 008. Opcional: Instalar MongoDB en Windows (Sin Laragon)
1. **Opcional**: Instalar MongoDB en Windows (Sin Laragon)
    + También puedes instalar MongoDB de la manera tradicional (Esto es útil si necesitas trabajar con la última versión de MongoDB, que es descargando el instalador desde la web oficial en:
        + https://www.mongodb.com/try/download/community
2. Commit Nota 008:
    + $ git add .
    + $ git commit -m "Commit 008: Opcional: Instalar MongoDB en Windows (Sin Laragon)"
    + $ git push -u origin main

### Video 009. Agregar la extensión (DLL) de MongoDB a PHP en Windows/Laragon
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
10. Commit Video 009:
    + $ git add .
    + $ git commit -m "Commit 009: Agregar la extensión (DLL) de MongoDB a PHP en Windows/Laragon"
    + $ git push -u origin main

### Video 010. Actualizar MongoDB Windows con Laragon
+ Actualización MongoDB Laragon: https://forum.laragon.org/topic/172/tutorial-how-to-install-mongodb-extension/2
+ DLL's MongoDB PHP: https://dl.mongodb.org/dl/win32/x86_64
+ **Contenido**: sobre como actualizar MongoDB.
5. Commit Video 010:
    + $ git add .
    + $ git commit -m "Commit 010: Actualizar MongoDB Windows con Laragon"
    + $ git push -u origin main

### Video 011. Instalar MongoDB en MacOS
+ **Contenido**: sobre como instalar MongoDB en una MacOS.
1. Commit Video 011:
    + $ git add .
    + $ git commit -m "Commit 011: Instalar MongoDB en MacOS"
    + $ git push -u origin main

### Video 012. Agregar la extensión (DLL) de MongoDB a PHP en general
+ **Contenido**: sobre como instalar el controlador de MongoDB en Windows. Para esta tarea seguir los pasos indicados en la siguiente página:
    + https://www.php.net/manual/es/mongodb.installation.windows.php
1. Commit Video 012:
    + $ git add .
    + $ git commit -m "Commit 012: Agregar la extensión (DLL) de MongoDB a PHP en general"
    + $ git push -u origin main

### Video 013. Crear el proyecto en Laravel 7
1. Crear proyecto Laravel
    + $ composer create-project laravel/laravel 29laravel_mongo "7.*"
    + **Nota 1**: de aquí en adelante la apllicación se puede ejecutar en local en http://29laravel_mongo.test
2. Commit Video 013:
    + $ git add .
    + $ git commit -m "Commit 013: Crear el proyecto en Laravel 7"
    + $ git push -u origin main

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



### Video 065. Tarea: CRUD para los tags
### Video 066. Relación Many To Many (Muchos a Muchos) con FK
### Video 067. Tags Libros: Estructura inicial
### Video 068. Tags Libros: Guardar etiquetas de los libros
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





## Deploy del proyecto en Heroku
1. Crear en la raíz del proyecto el archivo **Procfile** (sin extensión) para elegir un servidor apache en Heroku y también indicarle la ubicación del archivo incial index.php:
    ```
    web: vendor/bin/heroku-php-apache2 public/
    ```
2. Actualizar repositorio en GitHub.
3. Ingresar a [Heroku](https://dashboard.heroku.com/apps) e ir a **Dashboard**.
4. Crear un nuevo proyecto en **New > Create new app**
    + Nombre: laravelmongo
5. Ir a Deploy y dar clic en GitHub.
6. Clic en el botón Connect to GitHub e ingresar las credenciales.
7. Seleccionar el repositorio **laravel_mongodb_2021** y presionar el botón **Connect**.
8. Para tener siempre la ultima actualización de nuestro proyecto se recomienda presionar el botón **Enable Automatic Deploys**.
9. Presionar el botón **Deploy Branch**.
10. Descargar e instalar [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli).
12. En la terminal en la raíz del proyecto en local e iniciar sesión en Heroku:
    + $ heroku login
13. Víncular con la aplicación de Heroku **paymet**:
    + $ git remote add heroku git.heroku.com/laravelmongo.git
        + (git remote set-url Origin git.heroku.com/laravelmongo.git)
    + $ heroku git:remote -a laravelmongo
14. Registrar variables de entorno de la aplicación desde la terminal:
    + $ heroku config:add APP_NAME=LaravelMongo
    + $ heroku config:add APP_ENV=production
    + $ heroku config:add APP_KEY=base64:uj60tvtM5vsuqIkjdkY4dCsyTH3BfhTl3VrGMd9IhAk=
    + $ heroku config:add APP_DEBUG=false
    + $ heroku config:add APP_URL=https://laravelmongo.herokuapp.com
15. Registrar variables de entorno de la base de datos desde la terminal:
    + $ heroku config:add DB_CONNECTION=mongodb
    + $ heroku config:add DB_DSN="mongodb+srv://petrix:xiphos333@cluster0.7y5of.mongodb.net/myFirstDatabase?retryWrites=true&w=majority"
    + $ heroku config:add DB_PORT=27017
    + $ heroku config:add DB_DATABASE=laramongo
    + $ heroku config:add DB_USERNAME=petrix
    + $ heroku config:add DB_PASSWORD=***
16. Salir de Heroku:
    + $ heroku logout
18. Desconectar con repositorio Heroku:
    + $ git remote rm heroku
