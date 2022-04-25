<?php
    //LLamo al controlador
    require_once __DIR__. "/controller/controlador.php";
    $controlador=new Controlador();
    //Pregunto si existe la variable valor que se pasa por ruta
    if(isset($_GET['accion'])){
        //Realizo un switch de la accion y según la acción que viene por ruta llamo a un método del controlador u otro
        switch($_GET['accion']){
            case 'alta':
                $controlador->darAlta();
                break;
        }
    }
?>