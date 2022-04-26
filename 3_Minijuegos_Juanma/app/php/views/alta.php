<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Juan Manuel Toscano Reyes">
        <link rel="stylesheet" href="../css/style.css">
        <title>Alta Minijuegos</title>
    </head>
    <body>
        <h1>Alta Minijuegos</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href='index.php?accion=alta'>Alta Minijuegos</a></li>
                <li><a href="index.php?accion=listar">Listado Minijuegos</a></li>
            </ul>
        </nav>
        <form action="#" method="post">
            <label>Nombre Minijuego: </label>
            <input type="text" name="nombre" placeholder="Nombre" /><br/>
            <label>Nombre Icono: </label>
            <input type="text" name="icono" placeholder="Icono" /><br/>
            <label>Ruta Minijuego: </label>
            <input type="text" name="ruta" placeholder="Ruta" /><br/>
            <br />
            <input type="submit" value="Enviar" name="enviar"><br/>
        </form>
    </body>
</html>
<?php
    if(isset($_POST['enviar'])){
        require_once __DIR__. "/../controller/controlador.php";
        $controlador=new Controlador();
        $resultado=$controlador->darAlta();
        echo $resultado;
    }

?>