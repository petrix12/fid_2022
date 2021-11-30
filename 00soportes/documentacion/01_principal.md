# Proyecto FID: Formación, Investigación y Documentación
+ URL local:
+ URL prueba:
+ URL producción:
+ Figma: https://www.figma.com/proto/qAREYzpdkJtjdE262QOCwb/CDS?node-id=79%3A2&scaling=min-zoom&page-id=2%3A2&starting-point-node-id=79%3A2
+ Repositorio GitHub:

## Antes de iniciar:
1. Crear proyecto en la página de [GitHub](https://github.com) con el nombre: **fit_2022**.
    + **Description**: Proyecto FID: Formación, Investigación y Documentación. Desarrollado principalmente con las siguientes tecnológias: Laravel, Angular, MySQL y MongoDB.
    + **Private**.
2. En la ubicación raíz del proyecto en la terminal de la máquina local:
    + $ git init
    + $ git add .
    + $ git commit -m "Antes de iniciar"
    + $ git branch -M main
    + $ git remote add origin https://github.com/petrix12/fit_2022.git
    + $ git push -u origin main

## Creación del proyecto Laravel - Jetstream
1. Crear proyecto **fit_2022**:
    + $ laravel new fit_2022 --jet
    + Seleccionar **livewire**.
    + No trabajaremos con equipos:
        - Will your application use teams? (yes/no) [no]: no
2. Instalar Node Package Manager y compilar sus dependencias:
    + $ npm install
    + $ npm run dev
3. Crear un dominio local: **fit_2022.test**.
    + [Guía de Coders Free para crear un dominio local](https://codersfree.com/blog/como-generar-un-dominio-local-en-windows-xampp)
4. Crear base de datos **fit_2022** en MySQL (Cotejamiento: **utf8_general_ci**).
5. Hacer coincidir los parámetros de base de datos y de dominio del proyecto en **.env** en caso de ser necesario:
    ```env
    APP_NAME="FID"
    ≡
    APP_URL=http://fit_2022.test
    ≡
    DB_DATABASE=fit_2022
    ≡
    ```
6. Ejecutar migraciones:
    + $ php artisan migrate
7. Realizar commit:
    + $ git add .
    + $ git commit -m "Creación del proyecto Laravel - Jetstream"
    + $ git push -u origin main

