<?php

/**==========================================================================================================
 * REQUERIMOS EL ARCHIVO DONDE DE CREO LA CLASE CON EL METODO PARA MANDAR A TRAER LA VISTA DE INICIO        =
 * =====================================                                                                    =
 */
require_once "controller/plantilla.controlador.php";

/**==========================================================================================================
 * REQUERIMOS EL ARCHIVO DONDE DE CREO EL ARCHIVO PARA MANDAR A TRAER LOS CONTROLADORES DE LOGIN            =
 * =====================================                                                                    =
 */
require_once "controller/login.controlador.php";



/**==========================================================================================================
 * REQUERIMOS EL ARCHIVO DONDE DE CREO EL ARCHIVO PARA LOS MODELOS DE LOGIN                                 =
 * =====================================                                                                    =
 */
require_once "model/login.model.php";

/**==========================================================================================================
 * REQUERIMOS EL ARCHIVO DONDE DE CREO EL ARCHIVO PARA MANDAR A TRAER LOS CONTROLADORES DE LOGIN            =
 * =====================================                                                                    =
 */
require_once "controller/cursos.controlador.php";



/**==========================================================================================================
 * REQUERIMOS EL ARCHIVO DONDE DE CREO EL ARCHIVO PARA LOS MODELOS DE LOGIN                                 =
 * =====================================                                                                    =
 */
require_once "model/cursos.model.php";



/**==========================================================================================================
 * CREAMOS UN OBJETO DE LA CLASE DEL CONTROLADOR                                                            =
 * =====================================                                                                    =
 */
$Inicio = new ControladorPlantilla();

/**==========================================================================================================
 * EJECUTAMOS EL METODO CON EL CUAL SE MANDARÁ A LLAMAR A LA VISTA       =
 * =====================================                                                                    =
 */
$Inicio -> ctrTraerPlantilla();