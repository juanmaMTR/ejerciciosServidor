<?php
    /**
     * @author Juan Manuel Toscano Reyes
     * @file controlador.php
     * Página para controlar todos los procesos de la aplicación
     */

    class Controlador{
        public $modelo;
        /**
         * @function __construct()
         * Constructor de la clase que llama al Modelo
         */
        function __construct(){
            require_once __DIR__. "/../model/modelo.php";
            $this->modelo=new Modelo();
        }
        /**
         * @function darAlta()
         * Función para dar de alta a un Minijuego, llamo a la vista del alta
         * @return string texto explicativo por si falla algo o si la consulta se ha realizado correctamente
         */
        function darAlta(){
            //Incluyo la vista del alta
            include_once __DIR__. "/../views/alta.php";
            //Compruebo que el nombre no se queda en blanco
            if(empty($_POST['nombre'])){
                return "No dejes el nombre en blanco";
            }else{
                $nombre="'".$_POST['nombre']."'";
            }
            //Compruebo si el icono está en blanco y le meto NULL y sino le pongo las comillas para después al realizar la consulta
            if(empty($_POST['icono'])){
                $icono='NULL';
            }else{
                $icono="'".$_POST['icono']."'";
            }
            //Compruebo que la ruta no se queda en blanco
            if(empty($_POST['ruta'])){
                return "No dejes la ruta en blanco";
            }else{
                $ruta="'".$_POST['ruta']."'";
            }
            //LLamo al alta para que realize la consulta
            $this->modelo->alta($nombre,$icono,$ruta);
            //Compruebo si hay filas afectadas
            if($this->modelo->conexion->affected_rows>0){
                return "Hay ".$this->modelo->conexion->affected_rows." filas afectadas.";
            }else{
                //Compruebo que los nombres no se repitan con este error que sale al repetirse el nombre en la base de datos
                if($this->modelo->conexion->errno==1062){
                    return "El nombre ya existe";
                }else{
                    return "Se ha producido un error inesperado";
                }
            }
            
        }
        /**
         * @funtion listarMinijuego()
         * Función para listar los minijuegos que hay en la base de datos
         * @return resultado Array de datos que viene de realizar la consulta del modelo
         */
        function listarMinijuego(){
            //Incluyo la vista de listar
            include_once __DIR__. "/../views/listar.php";
            //Llamo al listar del modelo para que realize la consulta
            $resultado=$this->modelo->listar();
            //Retorno a la vista los datos que me llegan del modelo
            return $resultado;
        }
        /**
         * @function consultarMinijuego()
         * Función para consultar el minijuego que se selecciona en el listado
         * @return resultado Array de datos que viene de la consulta del modelo
         */
        function consultarMinijuego(){
            //Incluyo la vista de consultar
            include_once __DIR__. "/../views/borrar.php";
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                //LLamo al método del modelo y le paso el id correspondiente que viene por URL
                $resultado=$this->modelo->consultar($id);
                return $resultado;
            }else{
                return 'Se ha producido un error';
            }
        }
        /**
         * @function borrarMinijuego()
         * Funcion para borrar el minijuego que se desea
         * @param id Es el identificador del minijuego que será necesario para el modelo
         * @return string Texto que se devuelve, donde dice si se ha realizado bien el borrado o ha habido algún error
         */
        function borrarMinijuego($id){
            $this->modelo->borrar($id);
            if($this->modelo->conexion->affected_rows>0){
                return "Se ha eliminado correctamente";
            }else{
                return "Se ha producido un error";
            }
        }
    }

/* FIN DE lA PÁGINA */
