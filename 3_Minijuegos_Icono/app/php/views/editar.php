<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Juan Manuel Toscano Reyes">
        <link rel="stylesheet" href="../css/style.css">
        <title>Editar Minijuegos</title>
    </head>
    <body>
        <h1>Editar un Minijuego</h1>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href='index.php?accion=alta'>Alta Minijuegos</a></li>
                <li><a href="index.php?accion=listar">Listado Minijuegos</a></li>
                <li><a href="index.php?accion=seleccionar">Seleccion Minijuegos</a></li>
                <li><a href="index.php?accion=checkbox">Checkbox Minijuegos</a></li>
            </ul>
        </nav>
        <form action="#" enctype="multipart/form-data" method="post">
            <?php
                require_once __DIR__. "/../controller/controlador.php";
                $controlador=new Controlador();
                $resultado=$controlador->consultarMinijuego();
                while($fila=$resultado->fetch_assoc()){ ////Duda cuando devuelvo un string me da error porque tengo el fetch como podria arreglarlo
                    $nombre=$fila['nombre'];
                    $icono=$fila['icono'];
                    $ruta=$fila['ruta'];
                    //Como solo va a haber un id lo meto en una variable para después borrarlo si el usuario lo desea    
                    $id=$fila['id'];
                }
                echo "
                        <label>Nombre Minijuego: </label>
                        <input type='text' value=$nombre name='nombre'><br />
                        <label>Icono: </label>
                    ";
                if($icono==NULL){
                    echo "<input type='file' name='icono' /><br/>";
                }else{
                    echo    "<div class='img'><img src='".UPLOADS.$icono."'/></div>
                            <p>Si quiere cambiar la imagen selecciona otra aquí abajo, si quiere dejar esa imagen no seleccione ninguna.</p>
                            <input type='file' name='icono'><br />";
                }
                echo "
                        <label>Ruta Minijuego: </label>
                        <input type='text' value=$ruta name='ruta'><br />
                    "; 
                if($icono!=NULL){
                    echo "<input type='submit' value='Borrar Imagen' name='borrar'>";
                }
            ?>
            <br />
            <input type="submit" value="Editar" name="editar">
            <input type="submit" value="Cancelar" name="cancelar">
        </form>
    </body>
</html>
<?php
    if(isset($_POST['editar'])){
        //LLamo al método borrarMinijuego del controlador y le paso el id que guardo antes cuando consulto el minijuego
        $resultado=$controlador->editarMinijuego($id,$icono);
        //Visualizo el resultado del metodo
        echo $resultado;
        //Redirijo a la página index en 4seg
        //header("Refresh:1,url= ../index.html");
    }
    //Si pulsan cancelar redirijo a la página index
    if(isset($_POST['cancelar'])){
        header("Location: ../index.html");
    }
    //Si pulsan en borrar la imagen la elimino y meto NULL
    if(isset($_POST['borrar'])){
        $resultado=$controlador->borrarImagen($id,$icono);
        echo $resultado;
        header("Refresh:1,url:#");
    }
?>