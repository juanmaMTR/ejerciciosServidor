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
                    echo "<tr><td>".$fila['nombre']."</td><td>".$fila['icono']."</td><td>".$fila['ruta']."</td></tr>";
                }
            ?>
        </table>
        <a href="../index.html">Volver al Inicio</a><br/>
    </body>
</html>