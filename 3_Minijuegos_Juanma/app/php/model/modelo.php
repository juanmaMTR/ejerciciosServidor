<?php
    /**
     * @author Juan Manuel Toscano Reyes
     * @file modelo.php
     * Archivo que tendrá una clase con métodos donde estará el sql de la aplicación
     */
    class Modelo {
        public $conexion;
        function __construct(){
            require_once __DIR__. "/../config_db.php";
            $this->conexion=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE); //Realizo la conexion con la base de datos
        }
        function alta(){
            //Sentencia sql para realizar el alta
            $sql="INSERT INTO minijuego (nombre,icono,ruta) VALUES ('".$_POST['nombre']."',".$_POST['icono'].",'".$_POST['ruta']."');";
            //Realizo la consulta en la base de datos
            $this->conexion->query($sql);
        }
    }

/* FIN DE LA PAGINA */