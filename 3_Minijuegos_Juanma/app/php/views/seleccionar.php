<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Juan Manuel Toscano Reyes">
        <link rel="stylesheet" href="../css/style.css">
        <title>Seleccionar Minijuegos</title>
    </head>
    <body>
        <h1>Seleccion de Minijuegos</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href='index.php?accion=alta'>Alta Minijuegos</a></li>
                <li><a href="index.php?accion=listar">Listado Minijuegos</a></li>
                <li><a href="index.php?accion=seleccionar">Seleccion Minijuegos</a></li>
            </ul>
        </nav>
        <form action="#" method="post">
            <select name="minijuegos">
                <?php
                    require_once __DIR__. "/../controller/controlador.php";
                    $controlador=new Controlador();
                    $resultado=$controlador->seleccionarMinijuego();
                    while($fila=$resultado->fetch_assoc()){
                        echo "<option value=".$fila['id'].">".$fila['nombre']."</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Ver" name="ver">
            <input type="submit" value="Cancelar" name="cancelar">
        </form>
        <?php
            if(isset($_POST['ver'])){
                $resultado=$controlador->datosMinijuegoSeleccionado($_POST['minijuegos']);
                echo    "
                            <table>
                            <tr>
                                <th>Nombre</th>
                                <th>Icono</th>
                                <th>Ruta</th>
                            </tr>
                            ";
                while($fila=$resultado->fetch_assoc()){
                    echo "<tr>
                            <td>".$fila['nombre']."</td>
                            <td>".$fila['icono']."</td>
                            <td>".$fila['ruta']."</td>
                        </tr>";
                }
                echo    "</table>";
            }
        ?>
    </body>
</html>
<?php
    if(isset($_POST['cancelar'])){
        header("Location: ../index.html");
    }
?>