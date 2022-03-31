<?php
    /**
     * @author Juan Manuel Toscano Reyes
     * @file modelo.php
     * Sirve para tener funciones con las consultas php
     */
    header('Access-Control-Allow-Origin: *');
    class Modelo{
        function __construct(){

        }
        /**
         *  Función recoger_formulario() 
         *  Recojo los datos del formulario y los devuelvo en otro array para trabajar con él.
         *  @return $formulario
         */
        function recoger_formulario(){
            if(isset($_POST["enviar"])){
                foreach($_POST as $nombre=>$valor){
                    $formulario["$nombre"]=$valor;
                }
            }
            return $formulario;
        }
        /**
         * Función mostrar_datos()
         * Muestro los datos que me llegan del controlador
         * @param $datosFormulario
         */
        function mostrar_datos($datosFormulario){

        }
    }
?>