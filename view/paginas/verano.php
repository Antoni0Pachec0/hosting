<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../html/css/paginas/c_verano.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Cursos de Verano</title>
</head>
<body>

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL HEADER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/headerGlobal.php'); ?>

<!--=======================================================================-->

    <!--Central-->
    <main>
        <!--Seccion superior de bienvenida-->
        <section class="superior">
            <!--Fondo-->
            <div class="background"></div>

            <!--Informacion-->
            <div class="info">
                <h1>Cursos de Verano</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vel tempora, mollitia ut error cum
                    tenetur nisi obcaecati voluptate alias.</p>
            </div>

            <!--Imagen-->
            <div class="img"></div>
        </section>

        <!--Seccion media: texto e imagen grandes-->
        <section class="medio">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odit ipsa optio quae! Sint placeat
                    voluptatum delectus, a unde alias in reprehenderit voluptatibus magni illum quia voluptates saepe
                    suscipit expedita.</p>
            </div>

            <div id="imagen"></div>
        </section>

        <!--Seccion inferior: pestañas de informacion-->
        <section class="inferior">

            <!--Div que contiene todo-->
            <div class="info-cursos">

                <!--Div de las pestañas-->
                <div class="tab_box">
                    <button class="tab_btn active">Ludicos</button>
                    <button class="tab_btn">Culturales</button>
                    <button class="tab_btn">Academicos</button>
                    <button class="tab_btn">Eventos</button>

                    <!--Linea que se mueve-->
                    <div class="line"></div>
                </div>

                <!--Div del contenido-->
                <div class="content_box">

                    <!--Contenido 1-->
                    <div class="content active">

                        <!--Div contiene info e imagen-->
                        <div class="informacion">
                            <div> <!--Solo informacion-->
                                <h2>Ludicos</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione totam ipsum,
                                    pariatur sit
                                    rem qui nisi blanditiis, alias non, cum illo porro. At voluptatem cum deleniti, a
                                    consequuntur incidunt inventore?</p>
                            </div>
                            <div id="c1" class="imgn"></div>
                        </div>
                    </div>

                    <!--Contenido 2-->
                    <div class="content">

                        <!--Div contiene info e imagen-->
                        <div class="informacion">
                            <div> <!--Solo informacion-->
                                <h2>Culturales</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione totam ipsum,
                                    pariatur sit
                                    rem qui nisi blanditiis, alias non, cum illo porro. At voluptatem cum deleniti, a
                                    consequuntur incidunt inventore?</p>
                            </div>
                            <div id="c2" class="imgn"></div>
                        </div>
                    </div>

                    <!--Contenido 3-->
                    <div class="content">

                        <!--Div contiene info e imagen-->
                        <div class="informacion">
                            <div><!--Solo informacion-->
                                <h2>Academicos</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione totam ipsum,
                                    pariatur sit
                                    rem qui nisi blanditiis, alias non, cum illo porro. At voluptatem cum deleniti, a
                                    consequuntur incidunt inventore?</p>
                            </div>
                            <div id="c3" class="imgn"></div>
                        </div>
                    </div>

                    <!--Contenido 4-->
                    <div class="content">

                        <!--Div contiene info e imagen-->
                        <div class="informacion">
                            <div><!--Solo informacion-->
                                <h2>Eventos</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione totam ipsum,
                                    pariatur sit
                                    rem qui nisi blanditiis, alias non, cum illo porro. At voluptatem cum deleniti, a
                                    consequuntur incidunt inventore?</p>
                            </div>
                            <div id="c4" class="imgn"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Script de las pestañas-->

            <!--Cuando se selecciona una pestaña, se le agrega la clase 'active', y se le quita la misma clase a la pestaña
            seleccionada anteriormente con su respectivo contenido, todas las animaciones van para la clase 'active'-->
            <script>
                const tabs = document.querySelectorAll('.tab_btn');
                const all_content = document.querySelectorAll('.content');

                tabs.forEach((tab, index) => {
                    tab.addEventListener('click', (e) => {
                        tabs.forEach(tab => { tab.classList.remove('active') });
                        tab.classList.add('active');

                        var line = document.querySelector('.line');
                        line.style.width = e.target.offsetWidth + "px";
                        line.style.left = e.target.offsetLeft + "px";

                        all_content.forEach(content => { content.classList.remove('active') });
                        all_content[index].classList.add('active');
                    })
                })
            </script>
        </section>
    </main>

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL FOOTER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/footerGlobal.php'); ?>

<!--=======================================================================-->

    
</body>

</html>