<?php

/**=========================================================================================
 * En esta parte es donde creamos todas las clases, las cules tienen metodos, estas clases
 * pueden ser estaticas o no estaticas, pero se ejecutan de diferente forma.
 * =========================================================================================*/

#Clase
class ControladorPlantilla{

    /** Llamar a la plantilla
     * ctr = controlador
    */

    #===:index.php=== referencia

    public function ctrTraerPlantilla(){
        #Include: se utiliza para invcar el archivo que contiene codigo html-php
        #Asi se declara la inclusion de la plantilla para el index php

        #===:plantilla.php===
        include "view/plantilla.php";
    }
    
}

?>