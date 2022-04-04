<?php
    /**
     * @author Juan Manuel Toscano Reyes
     * @file controlador.php
     * Controla la validación del formulario
     */
    header('Access-Control-Allow-Origin: *');
    class Controlador{
        /**
         * Función __construct()
         * LLamo al modelo
         */
        function __construct(){
            require_once __DIR__. "/../model/modelo.php";
            $this->modelo=new Modelo();
        }
        /**
         * Función datosformulario()
         * Utilizo el formulario y llamo a funciones del modelo
         */
        function datosformulario(){
            $formulario=$this->modelo->recoger_formulario();
            if(empty(($formulario["nombreActividad"]))){
                unset($formulario["nombreActividad"]);
                return "Introduce un nombre de Actividad<br>";
            }
            if(!isset($formulario["actividadSeccion"])){
                $formulario["actividadSeccion"]="no es una actividad de sección";
            }else{
                $formulario["actividadSeccion"]="es una actividadSeccion";
            }
            if(!isset($formulario["etapas"])){
                return "Debes seleccionar al menos una etapas<br>";
            }
            $this->modelo->mostrar_datos($formulario);
        }
    }
?>