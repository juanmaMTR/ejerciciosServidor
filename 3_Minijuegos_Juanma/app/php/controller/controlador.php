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
            //Compruebo que el nombre no se queda en blanco
            if($_POST['nombre']==''){
                return "No dejes el nombre en blanco";
            }
            //Compruebo si el icono está en blanco y le meto NULL y sino le pongo las comillas para después al realizar la consulta
            if($_POST['icono']==''){
                $_POST['icono']='NULL';
            }else{
                $_POST['icono']="'".$_POST['icono']."'";
            }
            //Compruebo que la ruta no se queda en blanco
            if($_POST['ruta']==''){
                return "No dejes la ruta en blanco";
            }
            //LLamo al alta para que realize la consulta
            $this->modelo->alta();
            //Compruebo si hay filas afectadas
            if($this->modelo->conexion->affected_rows>0){
                return "Hay ".$this->modelo->conexion->affected_rows." filas afectadas.";
            }
            //Compruebo que los nombres no se repitan con este error que sale al repetirse el nombre en la base de datos
            if($this->modelo->conexion->errno==1062){
                return "El nombre ya existe";
            }
        }
    }

/* FIN DE lA PÁGINA */
