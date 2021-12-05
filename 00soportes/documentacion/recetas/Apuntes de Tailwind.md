# **Curso Tailwind CSS desde cero**
##### https://www.youtube.com/playlist?list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy
##### https://codersfree.com/course-status/curso-tailwind-desde-cero

#
##### **[Video 01][video01]**
[video01]: https://www.youtube.com/watch?v=AChUAzCY7rs&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=1
###### 01 - Cómo instalar Tailwind en tu proyecto Laravel - Curso Tailwind desde cero

## Crear proyecto
1. Ejecutar:
    >
        $ laravel new tailwind

    ## Ajustes iniciales
1. Generar dependencia de Node Js:
    >
        $ npm install

    ## Instalar Tailwind CSS
    ##### https://tailwindcss.com/docs/guides/laravel

1. Ejecutar:
    >
        $ npm install tailwindcss
1. Incorporar estilos de Tailwind en **resources\css\app.css**
    >
        @import "tailwindcss/base";
        @import "tailwindcss/components";
        @import "tailwindcss/utilities";
1. Agregar requerimientos de estilos Tailwind CSS en **webpack.mix.js**
    >
        ≡
        mix.js('resources/js/app.js', 'public/js')
            .postCss('resources/css/app.css', 'public/css', [
                require("tailwindcss"),
            ]);
1. Realizar compilación:
    >
        $ npm rum dev

    ## Aplicando estilos de Tailwind CSS
1. Rediseñar vista **resources\views\welcome.blade.php**
    >
        ≡
        ≡

    #
    ##### **[Video 02][video02]**
    [video02]: https://www.youtube.com/watch?v=Gh5NhN7IBoE&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=2
    ###### 02 - ¿Cómo funciona la grid de Tailwind? - Curso Tailwind desde cero

1. Para poder modificar los estilos por defecto en Tailwind CSS, ejecutar:
    >
        $ npx tailwindcss init
1. Para modificar la clase container modificar el archivo **tailwind.config.js**
    >
        ≡
        theme: {
            container: {
                center: true,
            },
        ≡
1. Compilar Node Js:
    >
        $ npm run dev
1. Para aumentar la cantidad de columnas de un grid modificar el archivo **tailwind.config.js**
    >
        ≡
        extend: {
            gridTemplateColumns: {
                // Simple 16 column grid
                '16': 'repeat(16, minmax(0, 1fr))',

                // Complex site-specific column configuration
                'footer': '200px minmax(900px, 1fr) 100px',
            }
        },
        ≡
1. Compilar Node Js con **run watch**:
    >
        $ npm run watch
    ##### Ahora cada vez que se modifique el archivo **tailwind.config.js** la compilación se realizará automaticamente.
1. Ejemplo Grid 1:
    >
        <div class="container mx-auto">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4  gap-4">
                <div class="bg-blue-200">A</div>
                <div class="bg-blue-300">B</div>
                <div class="bg-blue-400">C</div>
                <div class="bg-blue-500">D</div>
                <div class="bg-blue-600">C</div>
                <div class="bg-blue-700">D</div>
            </div>
        </div>
1. Ejemplo Grid 2:
    >
        <div class="container mx-auto">
            <div class="grid grid-cols-16  gap-4">
                <div class="bg-blue-200">A</div>
                <div class="bg-blue-300">B</div>
                <div class="bg-blue-400">C</div>
                <div class="bg-blue-500">D</div>
                <div class="bg-blue-600">C</div>
                <div class="bg-blue-700">D</div>
                <div class="bg-blue-200">A</div>
                <div class="bg-blue-300">B</div>
                <div class="bg-blue-400">C</div>
                <div class="bg-blue-500">D</div>
                <div class="bg-blue-600">C</div>
                <div class="bg-blue-700">D</div>
                <div class="bg-blue-200">A</div>
                <div class="bg-blue-300">B</div>
                <div class="bg-blue-400">C</div>
                <div class="bg-blue-500">D</div>
                <div class="bg-blue-600">C</div>
                <div class="bg-blue-700">D</div>
                <div class="bg-blue-200">A</div>
                <div class="bg-blue-300">B</div>
                <div class="bg-blue-400">C</div>
                <div class="bg-blue-500">D</div>
                <div class="bg-blue-600">C</div>
                <div class="bg-blue-700">D</div>
            </div>
        </div>
1. Ejemplo Grid 3:
    >
        <div class="container mx-auto">
            <div class="grid grid-cols-4  gap-4">
                <div class="bg-blue-200 col-span-2 col-start-2">A</div>
                <div class="bg-blue-300 col-start-1">B</div>
                <div class="bg-blue-400">C</div>
                <div class="bg-blue-500">D</div>
                <div class="bg-blue-600">C</div>
                <div class="bg-blue-700">D</div>
            </div>
        </div>
1. Ejemplo Grid 4:
    >
        <div class="container mx-auto">
            <div class="grid grid-cols-4 grid-rows-2 gap-4">
                <div class="bg-blue-200">A</div>
                <div class="bg-blue-300">B</div>
                <div class="bg-blue-400 col-span-2 row-span-2">C</div>
                <div class="bg-blue-500">D</div>
                <div class="bg-blue-600">C</div>
                <div class="bg-blue-700">D</div>
            </div>
        </div>
1. Ejemplo Grid 5:
    >
        <div class="container mx-auto">
            <div class="grid grid-flow-col grid-rows-3 grid-cols-4">
                <div class="bg-blue-100">1</div>
                <div class="bg-blue-200">2</div>
                <div class="bg-blue-300">3</div>
                <div class="bg-blue-400">4</div>
                <div class="bg-blue-500">5</div>
                <div class="bg-blue-600">6</div>
                <div class="bg-blue-700">7</div>
                <div class="bg-blue-800">8</div>
                <div class="bg-blue-900">9</div>
            </div>
        </div>
 
    #
    ##### **[Video 03][video03]**
    [video03]: https://www.youtube.com/watch?v=3gDkC0hHxzo&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=3
    ###### Avance del curso: Aprende a desarrollar una plataforma de cursos con Laravel (UDEMY)

    #
    ##### **[Video 04][video04]**
    [video04]: https://www.youtube.com/watch?v=GpQm5-TeK2E&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=4
    ###### 03 - Tipografias en tailwind - Curso Tailwind desde cero
    ###### **URL Tailwind CSS para tipografias**
    ###### https://v1.tailwindcss.com/docs/font-family
    ###### https://v1.tailwindcss.com/docs/font-size
    ###### https://v1.tailwindcss.com/docs/font-weight

1. Agregar los estilos tipográficos en **public\css\app.css**
    >
        h1{
            @apply font-sans text-3xl font-bold mb-4
        }

        p{
            @apply font-serif leading-relaxed mb-3 -ml-3
        }

        li{
            @apply font-mono text-sm italic
        }
1. Compilar para aceptar los cambios de estilos:
    >
        $ npm run dev
    ##### **Nota**: para purgar el caché del navegador presionar: Ctrl+F5.

    #
    ##### **[Video 05][video05]**
    [video05]: https://www.youtube.com/watch?v=vAPs-NODCDA&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=5
    ###### 04 - Tipografía en Tailwind (parte II) - Curso Tailwind desde cero
    ##### https://v1.tailwindcss.com/docs
1. Importar fuentes en la primera línea en resources\css\app.css
    >
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
    ##### https://fonts.google.com/specimen/Montserrat?preview.text_type=custom
1. Crear nuevo objeto para la fuente en **tailwind.config.js**
    >
        ≡
        theme: {
            fontFamily:{
            'mont' : ['Montserrat']
            },
        ≡
1. Compilar:
    >
        $ npm run dev
1. Ejemplo de tipografía 1:
    >
        <div class="container mx-auto">
            <h1 class="">Este es un título de prueba</h1>
            <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente eius, iure ipsa assumenda nobis veritatis maiores recusandae illum repudiandae adipisci error enim quae eligendi corporis velit incidunt tenetur. Quia, vel.</p>
            <ul>
                <li class="">Elemento #01</li>
                <li class="">Elemento #02</li>
                <li class="">Elemento #03</li>
            </ul>
        </div>
1. Ejemplo de tipografía 2:
    >
        <div class="container">
            <p class="font-mont font-hairline tracking-widest">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis nisi necessitatibus accusantium velit totam. Harum blanditiis enim, nam veritatis eius hic ratione nemo quod inventore ad error voluptates eum magnam!</p>
            <p class="font-mont font-light">Ea neque nam ab recusandae eos dolor sit blanditiis, voluptates non mollitia, earum molestiae assumenda quam qui modi ut dolorum voluptas reprehenderit veritatis obcaecati eligendi cupiditate odio vero totam. Fugit.</p>
            <p class="font-mont font-semibold">Placeat repudiandae, consequuntur iste, cum doloremque quo odio delectus culpa laboriosam qui eum reiciendis rem consequatur a aperiam quod velit fugiat quasi repellendus facere ipsum harum iure minus hic? Dolor!</p>
            <p class="font-mont font-black">Iure eos expedita repudiandae possimus culpa facilis, cupiditate adipisci quaerat blanditiis voluptatum quibusdam dignissimos non temporibus voluptate ipsa perspiciatis sapiente rem aliquam. Voluptate inventore iusto recusandae laboriosam sequi, assumenda natus.</p>
        </div>
1. Ejemplo de tipografía 3:
    >
        <div class="container">
            <h1 class="text-xl font-bold text-left md:text-center lg:text-right underline">Este es el título</h1>
            <p class="text-blue-600 hover:text-opacity-75">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor iusto repellat suscipit ea quisquam expedita officia saepe laudantium at! Eligendi maiores amet aspernatur quis, tenetur minus ratione inventore adipisci ullam.</p>
            <ul class="list-decimal list-inside">
                <li class="line-through">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur necessitatibus, molestiae sed tenetur quos eius delectus autem recusandae nam amet nemo labore, mollitia voluptatum aspernatur ut enim, nisi magni molestias.</li>
                <li class="uppercase">Soluta maiores placeat est nostrum officiis corporis maxime voluptatum libero repellat omnis obcaecati non facere, laudantium nesciunt repellendus saepe dolorem deleniti, dicta quisquam enim sint. Maxime ut doloribus inventore ipsum?</li>
                <li class="lowercase">Autem perferendis sit molestias eos nihil quibusdam error ex voluptatum ea distinctio! Quas esse dignissimos mollitia illum ipsam architecto porro cum sed sapiente ducimus non repudiandae, laborum consectetur, ipsum excepturi!</li>
                <li>Tempora, optio nihil voluptas doloremque iste ipsum non pariatur, deleniti itaque, reprehenderit fugiat ut sunt? Facere iure excepturi commodi, aperiam quam molestiae et a repellendus vel iusto deleniti ut veniam!</li>
                <li>Repellendus nihil exercitationem modi assumenda eligendi ipsum excepturi voluptas architecto magni sunt non ullam eos enim voluptatibus, expedita, accusamus maxime earum voluptates cumque dolores. Molestias illum ipsum recusandae dolore magnam.</li>
            </ul>
            <p class="capitaliz">pedro jesús bazo canelon</p>
        </div>


    #
    ##### **[Video 06][video06]**
    [video06]: https://www.youtube.com/watch?v=-GIoIYV_Ims&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=6
    ###### 05 - Background en Tailwind - Curso Tailwind desde cero
1. Crear carpeta **public\img** y guardar una imagen jpg
1. Ejemplo de Background 1:
    >
        <div class="container">
            <h1 class="text-center text-3xl font-bold mb-3">Background</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut repudiandae, laudantium quae voluptates corporis ullam dolorem voluptatem itaque eaque? Laudantium nesciunt aliquam porro numquam quia eveniet ut ratione accusamus expedita!</p>
            <div class="imagen bg-contain bg-repeat-x"></div>
            <div class="imagen bg-contain bg-no-repeat border-8 border-blue-600"></div>
            <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed bg-clip-padding p-4"></div>
            <div class="imagen bg-cover bg-center border-8 border-blue-600 border-dashed bg-clip-content p-4"></div>
            <div class="imagen bg-fixed"></div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa tempore asperiores, ab vero id blanditiis nemo illum, omnis voluptas ea dolor magnam. Temporibus minima, blanditiis quam dolorem omnis doloribus quod.</p>
            <p>Totam exercitationem accusantium est rem amet, non impedit corrupti ducimus laudantium inventore ipsum voluptatibus adipisci ad doloremque id laboriosam et molestiae culpa perferendis eveniet fugiat eum porro. Aut, nemo quibusdam?</p>
            <p>Ipsam fugit debitis alias eos cupiditate. Nulla recusandae accusantium reprehenderit quod inventore animi est rem architecto minima omnis quos a alias dolorem, cupiditate aliquid nesciunt possimus. Necessitatibus libero ex ipsum!</p>
            <p>Molestiae adipisci magnam, pariatur voluptatum harum aut eos quod sapiente nostrum maiores, dignissimos veniam commodi temporibus dolorem distinctio obcaecati enim tempore quaerat laudantium beatae debitis, in fuga optio maxime. Ex?</p>
            <p>Accusamus eveniet necessitatibus sunt eligendi autem, quia veritatis quis distinctio facilis ipsa unde voluptates? Reiciendis, consectetur. Possimus, aliquid, quo expedita reiciendis nisi ipsum nam necessitatibus eum in fugit mollitia quis.</p>
            <p>Error obcaecati amet earum enim! Quis officiis dolorem aliquam exercitationem harum neque quam incidunt quisquam. Id similique repudiandae itaque natus, quia vel, voluptatibus officiis totam repellendus rem mollitia magnam aut.</p>
            <p>Soluta, ea. Veniam eaque omnis laborum possimus ad, nobis amet minus iste modi reprehenderit repellendus libero at suscipit rerum distinctio aliquam eos dignissimos unde vel? Porro repellendus accusamus praesentium? Itaque.</p>
            <p>Sunt sed voluptatem repudiandae maiores praesentium aliquid, iure temporibus asperiores quod consequuntur eos et laboriosam ipsa dolores repellat. Eaque autem molestiae consequuntur reiciendis distinctio eveniet, ratione aut maiores! Molestias, id.</p>
            <p>Aliquid officiis voluptate sunt ab explicabo facere accusantium possimus, totam rerum, iste soluta optio quod amet odio velit a? Voluptas totam rem qui modi dolores, fugit voluptate vero ratione fuga.</p>
            <p>Non culpa officiis, nobis fuga laborum adipisci corporis magnam reprehenderit aliquid doloribus vel rerum laudantium qui quas provident cupiditate totam minima sed repudiandae. Autem tenetur, velit atque sed asperiores officia?</p>
            <div class="bg-blue-700 h-12 bg-opacity-25"></div>
        </div>
1. Ejemplo de Background 2:
    >
        <div class="container">
            <div class="bg-gradient-to-r from-blue-500 via-green-600 to-yellow-400 text-center font-extrabold text-5xl bg-clip-text text-transparent">
                Soluciones++
            </div>
        </div> 
   
    #
    ##### **[Video 07][video07]**
    [video07]: https://www.youtube.com/watch?v=ACOvnckC6HA&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=7
    ###### 06 - Bordes en Tailwind - Curso Tailwind desde cero
1. Ejemplo Borde 1:
    >
        <div class="container mx-auto pt-5">
            <div class="w-64 h-64 bg-gray-500 border border-blue-800"></div>
        </div>
1. Ejemplo Borde 2:
    >
        <div class="container mx-auto pt-5">
            <div class="w-64 h-64 bg-gray-500 border-8 border-blue-800"></div>
        </div>
1. Ejemplo Borde 3:
    >
        <div class="container mx-auto pt-5">
            <div class="w-64 h-64 bg-gray-500 border-l-8 border-blue-800 hover:border-indigo-500"></div>
        </div>
1. Ejemplo Borde 4:
    >
        <div class="container mx-auto pt-5">
            <div class="w-64 h-64 bg-gray-500 border-8 border-blue-800 border-dashed rounded-lg"></div>
        </div>
1. Ejemplo Borde 5:
    >
        <div class="container mx-auto pt-5">
            <div class="w-64 h-64 bg-gray-500 border-8 border-blue-800 border-dashed rounded-full"></div>
        </div>
1. Ejemplo Borde 6:
    >
        <div class="container mx-auto pt-5">
            <div class="w-32 h-64 bg-gray-500 border-8 border-blue-800 rounded-full"></div>
            <div class="divide-y-8 divide-gray-600 divide-dashed">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae nisi incidunt eius. Nisi inventore nihil velit qui placeat in voluptatibus, esse sint, laborum, expedita aliquam. Reprehenderit doloribus praesentium sit quibusdam.</p>
                <p>Natus quo sit maxime quas iusto velit quis incidunt quasi harum, repellat ea commodi. Dolore laborum quia nihil reprehenderit, id, asperiores esse eaque odio ipsam vel sint commodi ad quo?</p>
                <p>Ad porro odio enim, recusandae doloribus harum tempore similique consequatur quaerat, repellendus, corporis dolorum laboriosam corrupti alias eligendi. Corrupti laudantium consequuntur ipsum reiciendis nisi ut quia facere nulla rem consectetur?</p>
                <p>Fugit repellat voluptas impedit, omnis deserunt repudiandae nam necessitatibus neque? Id fugit sit, reprehenderit ducimus nisi eum illum officia itaque eligendi, ullam laborum maxime distinctio minima minus eius atque sapiente.</p>
                <p>Illo eius delectus itaque suscipit voluptates dolorum eveniet ipsa totam minus cum enim incidunt adipisci veniam officiis reiciendis, exercitationem earum accusamus velit numquam nihil voluptas quod quas. Impedit, illo fugit?</p>
            </div>
            <nav class="divide-x-2 divide-blue-600">
                <a href="">Link 1</a>
                <a href="">Link 2</a>
                <a href="">Link 3</a>
                <a href="">Link 4</a>
                <a href="">Link 5</a>
            </nav>
        </div>

    #
    ##### **[Video 08][video08]**
    [video08]: https://www.youtube.com/watch?v=FuKoaNgx6-U&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=8
    ###### 07 - Tablas en Tailwind - Curso Tailwind desde cero
1. Tabla sin usar estilos de archivo css:
    >   
        <div class="container">
            <table>
                <thead>
                    <tr>
                        <th class="border border-gray-400 px-4 py-2 text-gray-800">País</th>
                        <th class="border border-gray-400 px-4 py-2 text-gray-800">Ciudad</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-gray-200">
                        <td class="border border-gray-400 px-4 py-2">Perú</td>
                        <td class="border border-gray-400 px-4 py-2">Lima</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-400 px-4 py-2">Colombia</td>
                        <td class="border border-gray-400 px-4 py-2">Bogotá</td>
                    </tr>
                    <tr class="bg-gray-200">
                        <td class="border border-gray-400 px-4 py-2">España</td>
                        <td class="border border-gray-400 px-4 py-2">Madrid</td>
                    </tr>
                </tbody>
            </table>
        </div>
1. Crear **resources\css\estilos.css**
    >
        .table th, .table td{
            @apply border border-gray-400 px-4 py-2;
        }

        .table th{
            @apply text-gray-800;
        }

        .table tbody tr:nth-child(2n+1){
            @apply bg-gray-200;
        }
1. Importar **resources\css\estilos.css** en **resources\css\app.css**
    >
        @import "estilos.css";
1. Compilar **resources\css\app.css**
    >
        $ npm run watch
    ##### **Nota**: Ejecutamos **npm run watch** y no **npm run dev** para que el proceso de compilación se mantenga a la escucha de algún cambio en los archivos de estilos.
1. Tabla usando estilos de archivo css:
    >
        <div class="container">
            <table class="table w-full border-separate lg:border-collapse table-fixed">
                <thead>
                    <tr>
                        <th class="w-1/4">País</th>
                        <th class="w-1/4">Ciudad</th>
                        <th class="w-1/2">Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Perú</td>
                        <td>Lima</td>
                        <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam quidem quas recusandae error iste placeat, quos at maxime possimus id. Omnis veritatis est fuga? Et iste quibusdam alias eius quo.</td>
                    </tr>
                    <tr>
                        <td>Colombia</td>
                        <td>Bogotá</td>
                        <td>Totam, consequuntur! Commodi eaque doloremque, reprehenderit recusandae accusantium quidem quaerat voluptate voluptatibus aspernatur aperiam, exercitationem excepturi eveniet saepe, nobis possimus voluptatum. Quisquam, laudantium ab. Totam dolore laudantium officiis libero obcaecati.</td>
                    </tr>
                    <tr>
                        <td>España</td>
                        <td>Madrid</td>
                        <td>Beatae quam aliquam totam in! Porro veritatis, omnis culpa, maxime accusamus amet suscipit temporibus possimus aliquam minus exercitationem voluptatibus velit reprehenderit aspernatur corrupti quo eveniet deleniti? Veniam nam qui quos?</td>
                    </tr>
                </tbody>
            </table>
        </div>

    #
    ##### **[Video 09][video09]**
    [video09]: https://www.youtube.com/watch?v=NShQvNDuUwU&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=9
    ###### Curso crea una pasarela de pagos con Laravel Cashier y Stripe

    #
    ##### **[Video 10][video10]**
    [video10]: https://www.youtube.com/watch?v=ET2SevRGjb8&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=10
    ###### 08 - Sizes (width y height) - Curso Tailwind desde cero

1. Ejemplo Size 1:
    >
        <div class="container">
            <div class="bg-blue-600 h-64">
                <div class="bg-red-600 h-32"></div>
            </div>
        </div>
1. Ejemplo Size 2:
    >
        <div class="container">
            <div class="bg-blue-600 h-64">
                <div class="bg-red-600 h-full w-64"></div>
            </div>
        </div>
1. Ejemplo Size 3:
    >
        <div class="container">
            <div class="bg-blue-600 h-64">
                <div class="bg-red-600 h-full w-2/5"></div>
            </div>
        </div>
1. Ejemplo Size 4:
    >
        <div class="container">
            <div class="bg-blue-600 h-64">
                <div class="bg-red-600 h-full w-full md:w-3/4 lg:w-1/2"></div>
            </div>
        </div>
1. Ejemplo Size 5:
    >
        <div class="container">
            <div class="bg-blue-600 h-64">
                <div class="bg-red-600 h-full w-full max-w-5xl"></div>
            </div>
        </div>
1. Ejemplo Size 6:
    >
        <div class="bg-black w-64 h-screen">
        </div>
1. Ejemplo Size 7:
    >
        <div class="container">
            <div class="bg-green-600 h-32 w-screen"></div>
        </div>

    #
    ##### **[Video 11][video11]**
    [video11]: https://www.youtube.com/watch?v=2gJuUldbiWA&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=11
    ###### 09 - Layout - Curso Tailwind desde cero
1. Ejemplo Layout 1:
    >
        <div class="container mt-4">
            <div class="bg-gray-300 w-64 h-32 p-8 border-8 border-gray-500 box-content">
                <div class="bg-gray-500 w-full h-full">
                    
                </div>
            </div>
        </div>
1. Ejemplo Layout 2:
    >
        <div class="container mt-4 bg-blue-600">
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">1</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 my-2 inline">2</div>
            <div class="bg-gray-400 text-gray-700 text-center px-4 py-2 inline">3</div>
        </div>
1. Ejemplo Layout 3:
    >
        <div class="container">
            <img class="float-left" src="https://images.pexels.com/photos/6231576/pexels-photo-6231576.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <img class="float-right" src="https://images.pexels.com/photos/6231574/pexels-photo-6231574.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <p class="mb-2 clear-right">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus reiciendis optio dolore, quaerat quasi nostrum laborum. Voluptate sit eos commodi. Ex quo quia, sunt hic autem blanditiis ad ullam animi.</p>
            <p class="mb-2">A debitis doloremque deleniti ullam esse quidem sunt. Eius laborum quos, natus neque corporis, explicabo provident facere excepturi beatae illo quas. Esse architecto, reiciendis quidem dignissimos vero velit ratione earum.</p>
            <p class="mb-2">Deserunt dolor adipisci ex quod beatae culpa saepe vel facilis vitae fugit ipsam unde aliquid eius, fuga omnis, expedita cumque. Reprehenderit amet saepe placeat sunt eveniet ab officia assumenda tempore.</p>
            <p class="mb-2">Quo id, odit nihil tempore corrupti est. Vitae nemo nobis adipisci soluta nesciunt quidem, accusantium illo, quaerat molestiae, facilis incidunt a odio. Adipisci sit tempore perspiciatis itaque voluptate magnam officiis.</p>
            <p class="mb-2">Et minima eligendi eveniet adipisci. Ea repellendus quasi quis sed voluptatem, modi aliquam delectus consequuntur tenetur itaque deleniti provident nihil illo fugiat veniam vel corporis illum eius nobis ab tempore!</p>
            <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus reiciendis optio dolore, quaerat quasi nostrum laborum. Voluptate sit eos commodi. Ex quo quia, sunt hic autem blanditiis ad ullam animi.</p>
            <p class="mb-2">A debitis doloremque deleniti ullam esse quidem sunt. Eius laborum quos, natus neque corporis, explicabo provident facere excepturi beatae illo quas. Esse architecto, reiciendis quidem dignissimos vero velit ratione earum.</p>
        </div>
1. Ejemplo Layout 4:
    >
        <div class="container bg-gray-300">
            <img class="w-full h-64 object-contain" src="https://cdn.pixabay.com/photo/2020/07/31/07/59/flowers-5452263_960_720.jpg" alt="">
        </div>
1. Ejemplo Layout 5:
    >
        <div class="container bg-gray-300">
            <img class="w-full h-64 object-cover object-top" src="https://cdn.pixabay.com/photo/2021/02/05/21/10/church-5985941_960_720.jpg" alt="">
        </div>
1. Ejemplo Layout 6:
    >
        <div class="container bg-gray-300">
            <img class="w-full h-64 object-none" src="https://cdn.pixabay.com/photo/2021/02/05/21/10/church-5985941_960_720.jpg" alt="">
        </div>
1. Ejemplo Layout 7:
    >
        <div class="container">
            <div class="bg-gray-300 p-4 h-64 overflow-y-scroll">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, molestias neque tempore adipisci est voluptate quis accusamus voluptates voluptas at illo explicabo nisi iste eligendi quia minima laborum, eos quae.</p>
                <p>Natus corporis quo quas nulla blanditiis earum iste? Magni debitis dolorum molestias quos eaque pariatur eveniet officiis blanditiis hic. Repudiandae quos sed culpa minima dolores eveniet atque unde, odit veritatis!</p>
                <p>Cum optio iusto totam voluptate. Debitis mollitia minus ab quaerat necessitatibus deleniti voluptate inventore, modi eius possimus commodi voluptas expedita natus autem ad aut quasi facere eos eum magni. In?</p>
                <p>Modi similique, quas dolores reiciendis ipsa eligendi deleniti libero veritatis minus id voluptates, minima accusantium pariatur soluta aliquam tempora alias amet molestias excepturi totam nesciunt vel autem. Rem, ipsum tempora.</p>
                <p>Aliquam, tempora amet modi impedit excepturi doloribus ipsum necessitatibus cumque error ducimus! Architecto perspiciatis, assumenda laudantium numquam sequi cumque omnis aliquid quidem minus fugit, nostrum temporibus voluptatum. Quisquam, laudantium eum?</p>
                <p>Recusandae natus quis sequi quaerat consequuntur vitae fugiat nam temporibus, repellat tempora eum veniam, deserunt quae odio. Quam aspernatur a totam. Minus blanditiis vitae atque ipsam accusamus rem nulla eaque!</p>
                <p>Repellat quos facere dolores doloremque consectetur quasi autem magni possimus. Saepe exercitationem quam, ad quasi ipsam temporibus sapiente aperiam sequi tempore nemo incidunt iusto debitis facilis minima suscipit aliquam itaque?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel reiciendis molestias, officiis fuga, fugit minima voluptatibus dolore doloremque fugiat autem deserunt facere magni, eum quos pariatur rerum modi culpa distinctio!</p>
            </div>
        </div>
1. Ejemplo Layout 8:
    >
        <div class="container">
            <div class="bg-gray-300 p-4 h-64 overflow-auto">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, molestias neque tempore adipisci est voluptate quis accusamus voluptates voluptas at illo explicabo nisi iste eligendi quia minima laborum, eos quae.</p>
                <p>Natus corporis quo quas nulla blanditiis earum iste? Magni debitis dolorum molestias quos eaque pariatur eveniet officiis blanditiis hic. Repudiandae quos sed culpa minima dolores eveniet atque unde, odit veritatis!</p>
                <p>Cum optio iusto totam voluptate. Debitis mollitia minus ab quaerat necessitatibus deleniti voluptate inventore, modi eius possimus commodi voluptas expedita natus autem ad aut quasi facere eos eum magni. In?</p>
                <p>Modi similique, quas dolores reiciendis ipsa eligendi deleniti libero veritatis minus id voluptates, minima accusantium pariatur soluta aliquam tempora alias amet molestias excepturi totam nesciunt vel autem. Rem, ipsum tempora.</p>
                <p>Aliquam, tempora amet modi impedit excepturi doloribus ipsum necessitatibus cumque error ducimus! Architecto perspiciatis, assumenda laudantium numquam sequi cumque omnis aliquid quidem minus fugit, nostrum temporibus voluptatum. Quisquam, laudantium eum?</p>
                <p>Recusandae natus quis sequi quaerat consequuntur vitae fugiat nam temporibus, repellat tempora eum veniam, deserunt quae odio. Quam aspernatur a totam. Minus blanditiis vitae atque ipsam accusamus rem nulla eaque!</p>
                <p>Repellat quos facere dolores doloremque consectetur quasi autem magni possimus. Saepe exercitationem quam, ad quasi ipsam temporibus sapiente aperiam sequi tempore nemo incidunt iusto debitis facilis minima suscipit aliquam itaque?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel reiciendis molestias, officiis fuga, fugit minima voluptatibus dolore doloremque fugiat autem deserunt facere magni, eum quos pariatur rerum modi culpa distinctio!</p>
            </div>
        </div>
1. Ejemplo Layout 9:
    >
        <div class="container mt-4">
            <div class="bg-gray-300 p-4 relative">
                <div class="bg-gray-400 p-4">
                    <div class="bg-blue-400 p-4"></div>
                    <div class="bg-blue-600 p-4 absolute inset-y-0 left-0"></div>
                </div>
            </div>
        </div>
1. Ejemplo Layout 10:
    >
        <nav class="bg-blue-300 h-16 fixed inset-x-0 z-50">
            Soluciones++
        </nav>

        <aside class="w-64 bg-gray-800 fixed inset-y-0 z-40">
        </aside>
        
        <div class="container pt-16">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque repellat cum eligendi. Ipsum exercitationem nisi cupiditate fugit saepe. Nam possimus exercitationem error nisi inventore, ea aperiam quod reiciendis minus. Pariatur.</p>
            <p>Sit, mollitia odio! Repellat maiores earum doloremque quae fugiat. Ad officiis quidem laborum velit vero natus id nemo molestiae neque praesentium, alias qui repellat totam iure? At modi deserunt voluptate.</p>
            <p>Aperiam adipisci culpa consectetur rem vitae officia, est debitis suscipit fugit eum! Dolore culpa cum similique perferendis inventore veritatis quam velit quas voluptas, laboriosam nam obcaecati excepturi, reiciendis illo impedit?</p>
            <p>Adipisci suscipit quam asperiores dolor earum est commodi voluptatibus omnis quas natus eius ipsam porro error, consequatur eos explicabo atque necessitatibus aspernatur. Labore, aspernatur facilis. Nam repellat earum perferendis nulla?</p>
            <p>Hic amet nisi quasi non blanditiis excepturi, impedit quaerat nam tempora voluptate doloribus ullam atque qui voluptatum adipisci esse voluptatibus aspernatur ut fuga perferendis ducimus. Enim asperiores amet delectus laboriosam!</p>
            <p>Voluptates repudiandae harum maxime vero eum autem temporibus officia corrupti magni, suscipit nostrum nulla expedita in! Quasi suscipit laboriosam iure inventore illum repudiandae veritatis nulla, id harum, nisi, repellat dolorem.</p>
            <p>Suscipit aut cum tenetur beatae dolores distinctio recusandae nisi similique voluptatum magni odio quas voluptates quasi nemo, unde ipsa, error corporis! Dolorum, magni perspiciatis rem reiciendis itaque nulla dolores nemo?</p>
            <p>Consequatur eligendi, quaerat sed inventore atque tempore similique veritatis maxime natus sint culpa accusantium. Nobis incidunt officiis itaque, voluptates ea saepe. Animi consequatur alias distinctio ea quaerat est libero corporis.</p>
            <p>Esse id pariatur veritatis placeat quam assumenda est unde, asperiores suscipit? Voluptas corrupti aliquam saepe ipsum temporibus recusandae tempora eum? Et quod officia assumenda quas voluptatem, accusantium deleniti atque cum.</p>
            <p>Hic eius repudiandae nisi error ab, quibusdam rerum voluptatem nihil velit veritatis, ut vitae recusandae saepe aliquid similique alias qui quis libero consectetur mollitia veniam animi ex ducimus unde. Cupiditate.</p>
            <p>Quidem, eligendi dolor nisi aliquid eaque et dicta atque ratione nobis, ab sunt obcaecati est? Molestiae dolor rem illo! Aliquam ipsum, reiciendis magni ut odit perspiciatis libero quisquam error repudiandae.</p>
            <p>Ut nemo sit eum consequuntur odit harum, corporis atque repudiandae quis quod cupiditate asperiores repellat impedit nulla sed unde illum quae tempora. Doloremque fuga quia, nihil repellendus consequatur est! Tempora!</p>
            <p>Repellendus, debitis, atque reprehenderit dignissimos consequuntur quod qui et accusantium quae nisi quisquam soluta quasi. Hic est unde reprehenderit debitis? Illo, nam! Delectus odio eos praesentium consequatur iure! Eveniet, similique!</p>
            <p>Repudiandae totam in ipsa nisi optio voluptatibus iste minima numquam voluptatem ab earum, cumque alias temporibus magnam rem, nihil assumenda sunt facere voluptatum, ipsum sequi ut? Quasi consectetur quisquam doloremque?</p>
            <p>Explicabo, voluptatibus similique! Hic architecto quisquam eaque culpa minus ullam, alias dolore deserunt officiis totam quas aliquid fugiat voluptatibus laboriosam voluptatem nemo fugit in accusantium, vitae laudantium beatae rerum excepturi.</p>
            <p>Dolor sunt in omnis nisi porro! Eos nemo iusto cum ipsa repudiandae est nihil minima tempora sed facilis velit autem numquam, consequuntur deserunt aliquam molestiae rem accusamus dolore incidunt reprehenderit.</p>
        </div>
1. Ejemplo Layout 11:
    >
        <div class="container">
            <h1 class="bg-gray-300 text-gray-700 font-bold sticky top-0">Título 1</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit reprehenderit magnam aut velit, amet iste impedit enim rem earum eos, mollitia illo! Deserunt blanditiis est aut mollitia consectetur? Eaque, asperiores?</p>
            <p>Amet cumque possimus quisquam ipsa neque ut maiores aliquam nam ducimus voluptatibus numquam, earum iusto tempora dicta unde at saepe magnam? Veniam vitae nisi exercitationem tempora facilis, sint dolore molestias.</p>
            <p>Harum animi asperiores odit quasi, dolore modi voluptatibus? Natus ullam ipsa assumenda vel illo officia, provident at aspernatur totam consectetur animi incidunt vero autem id aut error debitis velit impedit.</p>
            <p>Delectus temporibus ipsum et pariatur maiores eveniet eligendi officia quod vero dolor placeat, consequuntur error exercitationem nostrum cupiditate ratione. Recusandae perferendis ex sequi fugit beatae doloribus possimus labore velit? Architecto?</p>
            
            <h1 class="bg-gray-300 text-gray-700 font-bold sticky top-0">Título 2</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit reprehenderit magnam aut velit, amet iste impedit enim rem earum eos, mollitia illo! Deserunt blanditiis est aut mollitia consectetur? Eaque, asperiores?</p>
            <p>Amet cumque possimus quisquam ipsa neque ut maiores aliquam nam ducimus voluptatibus numquam, earum iusto tempora dicta unde at saepe magnam? Veniam vitae nisi exercitationem tempora facilis, sint dolore molestias.</p>
            <p>Harum animi asperiores odit quasi, dolore modi voluptatibus? Natus ullam ipsa assumenda vel illo officia, provident at aspernatur totam consectetur animi incidunt vero autem id aut error debitis velit impedit.</p>
            <p>Delectus temporibus ipsum et pariatur maiores eveniet eligendi officia quod vero dolor placeat, consequuntur error exercitationem nostrum cupiditate ratione. Recusandae perferendis ex sequi fugit beatae doloribus possimus labore velit? Architecto?</p>
            
            <h1 class="bg-gray-300 text-gray-700 font-bold sticky top-0">Título 3</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit reprehenderit magnam aut velit, amet iste impedit enim rem earum eos, mollitia illo! Deserunt blanditiis est aut mollitia consectetur? Eaque, asperiores?</p>
            <p>Amet cumque possimus quisquam ipsa neque ut maiores aliquam nam ducimus voluptatibus numquam, earum iusto tempora dicta unde at saepe magnam? Veniam vitae nisi exercitationem tempora facilis, sint dolore molestias.</p>
            <p>Harum animi asperiores odit quasi, dolore modi voluptatibus? Natus ullam ipsa assumenda vel illo officia, provident at aspernatur totam consectetur animi incidunt vero autem id aut error debitis velit impedit.</p>
            <p>Delectus temporibus ipsum et pariatur maiores eveniet eligendi officia quod vero dolor placeat, consequuntur error exercitationem nostrum cupiditate ratione. Recusandae perferendis ex sequi fugit beatae doloribus possimus labore velit? Architecto?</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis vel iste sapiente doloremque neque totam doloribus temporibus consectetur ex repudiandae magnam nemo hic repellendus facere corporis facilis quasi, eveniet dolorum?</p>
            <p>Illo numquam possimus debitis dolorem, ea incidunt, unde dolores velit voluptatibus eligendi perspiciatis quasi natus quod. Enim, commodi praesentium, doloribus similique laudantium aspernatur doloremque provident earum iusto fugit nesciunt ipsa?</p>
            <p>Ex quasi non commodi, facilis hic corrupti necessitatibus aliquam? Quaerat vel delectus, similique alias architecto sequi excepturi amet earum, possimus pariatur commodi, animi sed aperiam asperiores ex consequatur expedita debitis?</p>
            <p>Nemo facilis aspernatur ex, explicabo non provident accusamus pariatur unde doloribus nihil corrupti ut nostrum impedit. Iure harum veritatis ad debitis cumque voluptas, deserunt sed et reiciendis, rem laudantium illum.</p>
            <p>Consequuntur modi fugiat sit quia. Recusandae blanditiis similique, praesentium porro consequatur aliquam nobis voluptatum pariatur cupiditate ab maxime! Quisquam neque maiores nisi ipsam distinctio officiis non ex ad odio vel.</p>
            <p>Labore non quod deleniti corporis tempora vero quisquam veniam, quos voluptates laudantium sed praesentium fugiat eius sit neque consequuntur recusandae, nobis tenetur quasi ea fugit dolore magni reiciendis. Atque, saepe?</p>
            <p>Vel natus, obcaecati mollitia assumenda ex eos dolores tempore ut minima? Commodi quaerat cumque aut, et deserunt, accusamus, omnis culpa quisquam expedita possimus eligendi suscipit eius! Qui sit nulla odit.</p>
            <p>Libero id nam esse, enim adipisci optio repudiandae eum, beatae quis quia aliquam rerum ipsa ratione modi atque illo exercitationem eligendi minima voluptatem! Et similique animi recusandae corrupti sequi molestias?</p>
            <p>Error numquam at accusamus labore voluptatum, dolorum pariatur corporis distinctio tenetur dolor laboriosam facilis. Ipsam placeat consectetur eius fuga, officiis similique totam mollitia, nemo repellendus voluptatum ut, quaerat vero maxime.</p>
            <p>Nulla unde, totam velit rerum reiciendis nostrum aliquam esse. Nesciunt molestiae nihil dolore sapiente iste corrupti minus doloribus, autem impedit ipsa! Voluptate ullam molestiae officia, velit suscipit eius quod culpa!</p>
            <p>Dolore modi velit consectetur sit magni? Saepe repellat quo et, molestias nihil quaerat nesciunt quidem eaque, earum mollitia, praesentium ipsa at. Eius dolor dolore cum accusantium totam? Saepe, esse fugit.</p>
            <p>Molestiae, necessitatibus velit. Quaerat esse sint suscipit vel eaque commodi harum sit! Repellendus nobis, quas inventore neque, modi magni placeat et ab eveniet deleniti corrupti tempora nulla eum quasi ad?</p>
            <p>Necessitatibus aperiam saepe ad error rem quam illo cum aliquam maiores! Sequi, laboriosam! Animi libero excepturi maxime, placeat minus incidunt omnis qui esse ipsa laboriosam! Nobis optio adipisci veniam iste?</p>
            <p>Dicta, harum officiis quo nobis eligendi eos optio tenetur repudiandae doloremque amet ipsum expedita consequatur sed deleniti, atque id modi rerum. Minima vel, tempore natus accusamus dolores nulla ratione sit!</p>
            <p>Eaque, quis illo nulla culpa suscipit dolores sed reiciendis ut officiis asperiores, at quae illum ex blanditiis aperiam iure atque dicta dolorem impedit, minima delectus sunt veniam. Eos, accusamus dolores.</p>
            <p>Dolores obcaecati reprehenderit cupiditate unde, esse voluptates neque, quo alias recusandae placeat odio perferendis magnam, id explicabo sequi ex minima assumenda nisi? Pariatur id nostrum consectetur nihil nulla possimus temporibus.</p>
            <p>Rem sunt blanditiis quam officia consequuntur commodi quibusdam, possimus explicabo perspiciatis officiis quod placeat, necessitatibus impedit cupiditate adipisci totam similique tempore iusto mollitia qui eos! Suscipit dolore fuga id repellendus.</p>
            <p>In impedit, eos, cum consequatur perferendis praesentium officia excepturi minus dignissimos neque doloribus nam itaque minima ut dolorum. Rem animi enim molestiae impedit deleniti aspernatur quae necessitatibus corrupti ullam natus?</p>
            <p>Non quas atque ullam veritatis quis ducimus nam dignissimos, voluptates blanditiis repellat accusantium illo dolore iusto tenetur saepe repellendus laborum doloremque! Doloribus adipisci explicabo eligendi vitae cum maxime sed sapiente!</p>
            <p>Mollitia, modi odio? Quia expedita autem ipsa quae sint sapiente quidem maxime nam! Officiis, laudantium adipisci! Amet nulla vitae voluptatum, voluptas, eaque, accusamus minima officia magni nostrum sunt esse eius!</p>
            <p>Quae, numquam qui nobis sunt perferendis, repellendus doloribus aperiam enim ex culpa quos, commodi modi distinctio temporibus adipisci? Aperiam, dolorem. Natus quos doloremque ipsum omnis, ad mollitia distinctio minus maiores!</p>
            <p>Nihil deserunt dolorem laudantium veniam, quas voluptatum. Laudantium deserunt aspernatur itaque deleniti modi vitae id nulla! Eum nisi itaque unde, minus consequatur expedita porro quae, dolor eligendi, ratione nihil. Rerum.</p>
            <p>Excepturi ab alias qui porro laborum tempore unde provident enim. Debitis odit dolorem incidunt eligendi vel! Dolor ex porro molestias dignissimos exercitationem, nobis animi cupiditate nihil consectetur id amet eveniet.</p>
            <p>Nihil fugiat quo cupiditate, sit illum explicabo praesentium commodi earum. Atque ex dignissimos minima quo nesciunt velit, beatae perspiciatis, accusantium iure mollitia in animi voluptatum molestias est similique, aperiam nam?</p>
            <p>Impedit quae culpa reprehenderit. Consectetur dolores, pariatur quae eum voluptatem mollitia vel numquam hic debitis possimus consequuntur nisi eaque odio, quisquam incidunt quo voluptas, amet repellendus iusto veniam nesciunt asperiores.</p>
            <p>Tempora dignissimos maiores amet unde, animi esse exercitationem necessitatibus nulla, nam asperiores sequi odio dolorem, error totam? Rem non quidem, dolores nulla quia dicta dolorum. Nisi repellat expedita tempora sequi?</p>
            <p>Necessitatibus aspernatur architecto tenetur dolore nostrum exercitationem atque, dolor praesentium ipsum numquam. Natus libero, inventore explicabo atque optio dolorem deserunt. Cumque, eos quidem. Minus, molestias. Laborum, eum. Sunt, doloremque sed.</p>
            <p>Dolores, aliquam praesentium placeat corporis, deserunt, dolorem reprehenderit libero eos hic quo inventore esse cum quasi officia architecto veritatis distinctio perferendis velit doloribus? Optio, debitis excepturi iste corporis recusandae illo.</p>
            <p>Impedit tempora exercitationem natus hic animi nisi quis quae quidem consequuntur illum, distinctio id praesentium amet reprehenderit voluptatum perspiciatis numquam asperiores dolore! Cum sapiente aperiam veniam facilis explicabo ex officiis.</p>
            <p>Nobis explicabo esse harum dolor ratione quidem rem vel autem, nostrum similique maiores sint, nesciunt, commodi unde nihil! Animi laudantium corporis aut voluptas sit a earum consectetur omnis nobis sunt.</p>
        </div>

    #
    ##### **[Video 12][video12]**
    [video12]: https://www.youtube.com/watch?v=jx-6-B96HnA&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=12
    ###### 10 - Flexbox - Curso Tailwind desde cero

1. Ejemplo Flexbox 1:
    >
        <div class="container">
            <div class="bg-gray-300 flex">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 2:
    >
        <div class="container">
            <div class="bg-gray-300 flex flex-row-reverse">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 3:
    >
        <div class="container">
            <div class="bg-gray-300 flex flex-col">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 4:
    >
        <div class="container">
            <div class="bg-gray-300 flex flex-col-reverse">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 5:
    >
        <div class="container">
            <div class="bg-gray-300 flex justify-end">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 6:
    >
        <div class="container">
            <div class="bg-gray-300 flex justify-center">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 7:
    >
        <div class="container">
            <div class="bg-gray-300 flex justify-between">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 8:
    >
        <div class="container">
            <div class="bg-gray-300 flex justify-around">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 9:
    >
        <div class="container">
            <div class="bg-gray-300 flex flex-col h-64 justify-around">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 11:
    >
        <div class="container">
            <div class="bg-gray-300 flex flex-col h-64 justify-end">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 12:
    >
        <div class="container">
            <div class="bg-gray-300 flex flex-col h-64 justify-center">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 13:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 14:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center items-start">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 15:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center items-end">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 16:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center items-center">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 17:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center items-baseline">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 text-sm">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 text-lg">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 text-3xl">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 18:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center items-start">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 text-sm">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 text-lg">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 text-3xl">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 19:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 20:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center flex-wrap">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 21:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center flex-wrap-reverse">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 22:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center flex-wrap content-between">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 23:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center flex-wrap content-around">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 24:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64 justify-center flex-wrap items-start">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64 self-stretch">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64 self-center">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64 self-end">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 25:
    >
        <div class="container">
            <div class="bg-gray-300 flex h-64">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 w-64">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 26:
    >
        <div class="container">
            <div class="bg-gray-300 flex">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 flex-1">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 27:
    >
        <div class="container">
            <div class="bg-gray-300 flex">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 flex-1">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 flex-1">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2">3</div>
            </div>
        </div>
1. Ejemplo Flexbox 28:
    >
        <div class="container">
            <div class="bg-gray-300 flex">
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 flex-1">1</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 flex-1">2</div>
                <div class="bg-gray-400 text-gray-700 px-4 py-2 m-2 flex-1">3</div>
            </div>
        </div>

    #
    ##### **[Video 13][video13]**
    [video13]: https://www.youtube.com/watch?v=WSA37Ui0b6Q&list=PLZ2ovOgdI-kVeYs74jL3kOj-AyoDKCXRy&index=13
    ###### Como crear un menú responsive con Tailwind y Alpine

1. Crear componente de liwire:
    >
        $ php artisan make:liwewire navigation
        

    