<?php
    /**
     * @author Juan Manuel Toscano Reyes
     * @file modelo.php
     * Archivo que tendrá una clase con métodos donde estará el sql de la aplicación
     */
    class Modelo {
        function __construct(){
            require_once __DIR__. "/../config_db.php";
            $conexion=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);
        }
        function alta(){
            echo "alta";
        }
    }

/* FIN DE LA PAGINA */