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
        function recoger_formulario(){
            if(isset($_POST["enviar"])){
                foreach($_POST as $nombre=>$valor){
                    $formulario["$nombre"]=$valor;
                }
            }
            return $formulario;
            
        }
    }
?>