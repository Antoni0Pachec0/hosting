<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../html/css/paginas/p_inicio.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Casa Lila</title>
</head>
<body>

<!--==========================================================================
INCLUIMOS LA DIRECCION DEL HEADER PARA HACERLO MAS FACIL
===========================================================================-->

<?php include(__DIR__ . '/../includesPaginas/headerGlobal.php'); ?>

<!--=======================================================================-->



<!--Abriremos esta seccion es para "seprar" la primera seccion la cual es la de informacio inicial-->
    <section class="inicio">
        <div class="fondo"></div>
        <div class="info_s">
            <h1>Bienvenido</h1>
            <p>¿Se ha sorprendido alguna vez por todo lo que puede conseguir tan solo teniendo al profesor adecuado? Enhorabuena, acaba de llegar al sitio donde nunca va a parar de crecer y aprender.</p>
        </div>
    </section>

<!--Este es el contenedor para mostrar todos los apartados de la pagina, la de curosos culturales academicos o culturales o de verano-->
    <main class="s-cursos">
        <!--Contenedor de una de los apartados-->
        <div class="cursos">
            <!--La imagen promocional o demostrativa-->
            <div class="img" id="culturales"></div>
            <!--El texto que va dentro del mismo-->
            <h2>Cursos Culturales</h2>
            <p>¿Te interesa el arte? Encuentra actividades que ayuden a tu desarrollo artístico y diviertete aprendiendo.</p>
            
            <!--VARIABLE GET MEDIANTE URL-->
            <a href="index.php?pagina=culturales">Saber más</a>
        </div>

        <!--Contenedor de una de los apartados-->
        <div class="cursos">
            <!--La imagen promocional o demostrativa-->
            <div class="img" id="academicos"></div>
            <!--El texto que va dentro del mismo-->
            <h2>Cursos Academicos</h2>
            <p>Dí adiós a las dificultades y el aburrimiento, estudiar no debe ser tedioso, sino entretenido.</p>
            
            <!--VARIABLE GET MEDIANTE URL-->
            <a href="index.php?pagina=academicos">Saber más</a>
        </div>


        <!--Contenedor de una de los apartados-->
        <div class="cursos" >
            <div class="img" id="verano"></div>
            <h2>Cursos de Verano</h2>
            <p>¿Demasiado tiempo libre en vacaciones? Aprovéchalo y aprende algo nuevo.</p>
            
            <!--VARIABLE GET MEDIANTE URL-->
            <a href="index.php?pagina=verano">Saber más</a>
        </div>

        <div class="slider-frame">
            <ul>
                <li><img src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t39.30808-6/330379754_890730768675584_3428025644830171368_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_ohc=jiERfUMZuLcAX8_furF&_nc_ht=scontent.fpbc1-2.fna&oh=00_AfCwnbjdfXEyiG62OpKG1SPKXsKeie_veC2HOa2mS0tSvg&oe=64E36AFC" alt=""></li>
                <li><img src="https://scontent.fpbc1-1.fna.fbcdn.net/v/t39.30808-6/268491698_4127040940728763_9207223985302979492_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=a26aad&_nc_ohc=gdtVN-IXRioAX8YrJ-c&_nc_ht=scontent.fpbc1-1.fna&oh=00_AfAPvQdrsPEzle-vm9Ecbrv562HW6nw4pmitr6W0WjKALA&oe=64E3E092" alt=""></li>
                <li><img src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t39.30808-6/244244935_3895557747210418_1865862842568125945_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=a26aad&_nc_ohc=Vlz619UqGHYAX9UxfzX&_nc_ht=scontent.fpbc1-2.fna&oh=00_AfA2PZiOqJnMxrVmiMcYFFw77en2DtVd7TElTNn62XK3lg&oe=64E46313" alt=""></li>
                <li><img src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t39.30808-6/223186331_3682384731861055_6611691107174674295_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=a26aad&_nc_ohc=6GTP26hqngMAX-MyY5C&_nc_ht=scontent.fpbc1-2.fna&oh=00_AfAhiZKGgV91kSow8juudmHW24TNc6UZPZwBEzN_N3SFJA&oe=64E37E44" alt=""></li>
            </ul>
        </div>
    </main>

    <article class="info">
        <h2>Nuestra misión</h2>

<!--Este div es para contener todo el parrafo y poder posicionarlo-->
        <div>
            <p>Es fácil hacer un gran trabajo si realmente se cree en lo que se hace. Por este motivo trabajamos cada dia para llegar a más personas. Más que un grupo de expertos, somos una familia con una visión en común. Nuestra pasión y conocimientos nos ayudan a marcar la diferencia.</p>
        </div>

<!--Aqui va a ir la imagen promocional del lado dercho del section casi al mismo tamaño del mismo-->
        <img src="https://scontent.fpbc1-2.fna.fbcdn.net/v/t39.30808-6/311915091_5005862886179893_8884363460074812662_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=19026a&_nc_ohc=5wJA7r9XppwAX8vzteK&_nc_ht=scontent.fpbc1-2.fna&oh=00_AfAwcD5qJ4bxeGAkmNT2eqEoTvZCMALBO1GEzXhN1689nQ&oe=64E2F28B" alt="">
    </article>



<!--==========================================================================
INCLUIMOS LA DIRECCION DEL FOOTER PARA HACERLO MAS FACIL
===========================================================================-->

    <?php include(__DIR__ . '/../includesPaginas/footerGlobal.php'); ?>

<!--=======================================================================-->

</body>
</html>