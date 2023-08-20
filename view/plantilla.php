<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/css/inicio.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Casa Lila</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>

    <!--==========================================================================================
    =Creamos la lista blanca para direccinar las paginas que ya tenemos, estas paginas se        =
    = redireccinan con la variable GET llamada pagina, aqui mismo se crea esa variable.          =
    ===========================================================================================-->

    <?php 
    
    /**
     * #ISSET: isset() : determina si una variable esta definida o no esta definida y no es nula
     * y si es o no es null, esta parte se ejecuta cuando le damos clik a una etiqueta con href
     * ya que esa propiedad nos direcciona a una direccion, la cual es la direccion GET, entonces
     * la direccion seria asi "Index.php?pagina=login", la primera variable GET se agrega con "?"
     * a partir de ahí se agrega con "&".
     * Pero lo que hace esta condicion es decir si la variable GET pagina es igual a inicio por 
     * ejemplo, se mandará a esa direccion.
     */

        if(isset($_GET['accion'])){
            if($_GET['accion']=='cerrarSesion'){
                controladorLogin::ctrCerrarSesion();
            }
        }else if(isset($_GET["pagina"])){
            if($_GET["pagina"]== "inicio" || 
            $_GET["pagina"]== "login" ||
            $_GET["pagina"]== "academicos" ||
            $_GET["pagina"]== "culturales" ||
            $_GET["pagina"]== "verano"){
                
            #Se uncluye toda la carpeta dependiendo que traiga la variable GET con la carpeta paginas
                #==:inicio.php==
                include "paginas/".$_GET["pagina"].".php";
            } 
        }else if(isset($_GET["subPagina"])){
            if($_GET["subPagina"] == "verificarEmail" ||
                $_GET["subPagina"] == "verificarCodigo" ||
                $_GET["subPagina"] == "cambiarContraseña" ||
                $_GET["subPagina"] == "cursosAdmin" ||
                $_GET["subPagina"] == "estructuraCursos"){
                
            #Se uncluye toda la carpeta dependiendo que traiga la variable GET con la carpeta paginas
                #==:inicio.php==
                include "subPaginas/".$_GET["subPagina"].".php";
            }
        }else if(isset($_GET["publicacionesPagina"])){
            if($_GET["publicacionesPagina"] == "editor" ||
            $_GET["publicacionesPagina"] == "estructuraPublicacion"){

                include "publicacionesPaginas/".$_GET["publicacionesPagina"].".php";
            }

        }else if(isset($_GET['includesPagina'])){

            if($_GET['includesPagina'] == "miPerfil" ||
                $_GET["includesPagina"] == "crearCurso"){

                include "includesPaginas/".$_GET["includesPagina"].".php";
            }

        }else{
            #Modularizar
            #Se estandariza que sea la pagina principal
            include "paginas/inicio.php";
        }
        ?>
</body>
</html>