<?php
    ob_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Juan Manuel Toscano Reyes">
        <link rel="stylesheet" href="../css/style.css">
        <title>Borrar Minijuegos</title>
    </head>
    <body>
        <h1>Borrado de Minijuegos</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href='index.php?accion=alta'>Alta Minijuegos</a></li>
                <li><a href="index.php?accion=listar">Listado Minijuegos</a></li>
                <li><a href="index.php?accion=seleccionar">Seleccion Minijuegos</a></li>
                <li><a href="index.php?accion=checkbox">Checkbox Minijuegos</a></li>
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
                $resultado=$controlador->consultarMinijuego();
                while($fila=$resultado->fetch_assoc()){ ////Duda cuando devuelvo un string me da error porque tengo el fetch como podria arreglarlo
                    echo "<tr>
                            <td>".$fila['nombre']."</td>
                        ";

                    if(empty($fila['icono'])){
                        echo "<td></td>";
                    }else{
                        echo "<td><div class='img'><img src='".UPLOADS.$fila['icono']."'/></div></td>";
                    }
                    echo "<td>".$fila['ruta']."</td>
                        </tr>";
                    //Como solo va a haber un id lo meto en una variable para después borrarlo si el usuario lo desea    
                    $id=$fila['id'];
                    $icono=$fila['icono'];
                }
            ?>
        </table>
        <form action="#" method="post">
            <input type="submit" value="Borrar" name="borrar">
            <input type="submit" value="Cancelar" name="cancelar">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['borrar'])){
        //LLamo al método borrarMinijuego del controlador y le paso el id que guardo antes cuando consulto el minijuego
        $resultado=$controlador->borrarMinijuego($id,$icono);
        //Visualizo el resultado del metodo
        echo $resultado;
        //Redirijo a la página index en 4seg
        header("Refresh:2,url= ../index.html");
    }
    //Si pulsan cancelar redirijo a la página index
    if(isset($_POST['cancelar'])){
        header("Location: ../index.html");
    }
    ob_end_flush();
?>