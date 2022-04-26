<?php
    /**
     * @author Juan Manuel Toscano Reyes
     * @file modelo.php
     * Archivo que tendrá una clase con métodos donde estará el sql de la aplicación
     */
    class Modelo {
        public $conexion;
        /**
         * @function __construct()
         * Constructor donde realizo la conexión con la base de datos
         */
        function __construct(){
            require_once __DIR__. "/../config_db.php";
            $this->conexion=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE); //Realizo la conexion con la base de datos
        }
        /**
         * @function alta()
         * Función para realizar la consulta del alta en la base de datos
         */
        function alta($nombre,$icono,$ruta){
            //Sentencia sql para realizar el alta
            $sql="INSERT INTO minijuego (nombre,icono,ruta) VALUES ($nombre,$icono,$ruta);";
            //Realizo la consulta en la base de datos
            $this->conexion->query($sql);
        }
        /**
         * @function listar()
         * Funcion para realizar la consulta para sacar los datos que se necesitan para realizar el listar
         * @return $resultado Array de datos que proviene de la consulta
         */
        function listar(){
            //Sentencia sql para listar minijuegos
            $sql="SELECT nombre,icono,ruta FROM minijuego";
            //Realizo la consulta en la base de datos
            $resultado=$this->conexion->query($sql);
            //Retorno los datos que me devuelve la consulta
            return $resultado;
        }
    }

/* FIN DE LA PAGINA */