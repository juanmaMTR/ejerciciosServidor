<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Juan Manuel Toscano Reyes">
        <link rel="stylesheet" href="../css/style.css">
        <title>Checkbox Minijuegos</title>
    </head>
    <body>
        <h1>Checkbox de Minijuegos</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href='index.php?accion=alta'>Alta Minijuegos</a></li>
                <li><a href="index.php?accion=listar">Listado Minijuegos</a></li>
                <li><a href="index.php?accion=seleccionar">Seleccion Minijuegos</a></li>
                <li><a href="index.php?accion=checkbox">Checkbox Minijuegos</a></li>
            </ul>
        </nav>
        <form action="#" method="post">
            <?php
                require_once __DIR__. "/../controller/controlador.php";
                $controlador=new Controlador();
                $resultado=$controlador->checkboxMinijuegos();
                while($fila=$resultado->fetch_assoc()){
                    echo "
                        <label>".$fila['nombre']."</label>
                        <input type=checkbox name=".$fila['nombre']."><br>
                        ";
                }
            ?>
            <input type="submit" value="Ver" name="ver">
            <input type="submit" value="Cancelar" name="cancelar">
        </form>
        <?php
            if(isset($_POST['ver'])){
                unset($_POST['ver']);
                foreach($_POST as $nombre=>$valor){
                    echo "<div>$nombre</div>";
                }
            }
        ?>
    </body>
</html>
<?php
    if(isset($_POST['cancelar'])){
        header("Location: ../index.html");
    }
?>