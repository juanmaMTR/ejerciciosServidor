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
         * @param nombre,icono,ruta Son las variables necesarias para la consulta sql
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
         * @return resultado Array de datos que proviene de la consulta
         */
        function listar(){
            //Sentencia sql para listar minijuegos
            $sql="SELECT * FROM minijuego";
            //Realizo la consulta en la base de datos
            $resultado=$this->conexion->query($sql);
            //Retorno los datos que me devuelve la consulta
            return $resultado;
        }
        /**
         * @function cosnultaro()
         * Función para consultar un minijuego por id
         * @param id Variable necesaria para la consulta, es el id del minijuego que se desea consultar
         * @return resultado Array de datos que proviene de la consulta
         */
        function consultar($id){
            //Sentencia sql para mostrar el minijuego seleccionado por id
            $sql="SELECT * FROM minijuego WHERE id=$id";
            //Realizo la consulta en la base de datos
            $resultado=$this->conexion->query($sql);
            //Retorno los datos que me devuelve la consulta
            return $resultado;
        }
        /**
         * @function borrar()
         * Función para borrar un minijuego de la base de datos
         * @param id Variable necesaria para la consulta, es el id del minijuego que se va a borrar
         */
        function borrar($id){
            //Sentencia sql para borrar el minijuego seleccionado por id
            $sql="DELETE FROM minijuego WHERE id=$id";
            //Realizo la consulta en la base de datos
            $this->conexion->query($sql);
        }
    }

/* FIN DE LA PAGINA */