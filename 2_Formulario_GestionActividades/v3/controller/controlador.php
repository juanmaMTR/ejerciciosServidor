<?php
    /**
     * @author Juan Manuel Toscano Reyes
     * @file controlador.php
     * Controlador para controlar la aplicación
     */
    header('Access-Control-Allow-Origin: *');
    class Controlador{
        function __construct(){
            require_once __DIR__. "/../model/modelo.php";
            $this->modelo=new Modelo();
        }
        function datosformulario(){
            $datosFormulario=$this->modelo->recoger_formulario();
            // echo print_r($datosFormulario);
            $this->modelo->mostrar_datos($datosFormulario);
        }
    }


?>