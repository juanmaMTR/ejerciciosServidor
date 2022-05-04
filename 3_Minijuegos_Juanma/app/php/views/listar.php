<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Juan Manuel Toscano Reyes">
        <link rel="stylesheet" href="../css/style.css">
        <title>Listar Minijuegos</title>
    </head>
    <body>
        <h1>Listado de Minijuegos</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href='index.php?accion=alta'>Alta Minijuegos</a></li>
                <li><a href="index.php?accion=listar">Listado Minijuegos</a></li>
                <li><a href="index.php?accion=seleccionar">Seleccion Minijuegos</a></li>
            </ul>
        </nav>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Icono</th>
                <th>Ruta</th>
            </tr>
            <?php
                require_once __DIR__. "/../controller/controlador.php";
                $controlador=new Controlador();
                $resultado=$controlador->listarMinijuego();
                while($fila=$resultado->fetch_assoc()) {
                    echo "<tr>
                            <td>".$fila['nombre']."</td>
                            <td>".$fila['icono']."</td>
                            <td>".$fila['ruta']."</td>
                            <td><a href='index.php?accion=borrar&id=".$fila['id']."'><img src='../img/eliminar.png' /></a></td>
                            <td><a href='index.php?accion=editar&id=".$fila['id']."'><img src='../img/editar.png' /></a></td>
                        </tr>";
                }
            ?>
        </table>
    </body>
</html>