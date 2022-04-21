<?php
    /**
     * @author Juan Manuel Toscano Reyes
     * @file controlador.php
     * Página para controlar todos los procesos de la aplicación
     */

    class Controlador{
        public $modelo;
        function __construct(){
            require_once __DIR__. "/../model/modelo.php";
            $this->modelo=new Modelo();
        }
        function darAlta(){
            $this->modelo->alta();
        }
    }

/* FIN DE lA PÁGINA */
