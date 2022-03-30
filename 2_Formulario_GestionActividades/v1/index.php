<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Juan Manuel Toscano Reyes">
        <title>Gestion Actividades</title>
    </head>
    <body>
        <h1>Gestión Actividades</h1>
        <form action="#" method="post">
            <select name="categoria">
                <option value="navidad">Navidad</option>
                <option value="semanaIgnaciana">Semana Ignaciana</option>
                <option value="fiestasEscolares">Fiestas Escolares</option>
            </select><br />
            <br />
            <label>Nombre Actividad :</label>
            <input type="text" name="nombreActividad" placeholder="Nombre Actividad"><br />
            <br />
            <label>ETAPAS:</label> <br />
            <label>Primaria </label>
            <input type="checkbox" name="etapas[]" value="primaria"><br />
            <label>ESO </label>
            <input type="checkbox" name="etapas[]" value="eso"><br />
            <label>Bachillerato </label>
            <input type="checkbox" name="etapas[]" value="bachillerato"><br />
            <label>CFGM</label>
            <input type="checkbox" name="etapas[]" value="cfgm"><br />
            <label>CFGS </label>
            <input type="checkbox" name="etapas[]" value="cfgs"><br />
            <br />
            <label>Actividad de Sección: </label>
            <input type="radio" name="actividadSeccion"><br />
            <br />
            <input type="submit" value="Enviar" name="enviar">
        </form>
        <?php
            /* Si existe enviar pues hace lo que tiene dentro */
            /* if(isset($_POST['enviar'])){
                foreach($_POST as $nombre=>$valor){
                    if(isset($_POST["etapas"]) && $_POST["etapas"]==$_POST["$nombre"]){
                        foreach($_POST["etapas"] as $valor){
                            echo "$valor <br>";
                        }
                    }else{
                        if(isset($_POST["actividadSeccion"]) && $_POST["actividadSeccion"]==$_POST["$nombre"]){
                            echo "actividadSeccion <br>";
                        }else{
                            if($_POST["$nombre"]==$_POST["enviar"]){

                            }else{
                                echo "$nombre: $valor<br>";
                            }
                        }
                    }
                }
            }  */
            /* Si esxiste enviar, muestro los componentes del formulario 1 a 1 */
            if(isset($_POST['enviar'])){
                echo $_POST["categoria"];
                echo "<br>";
                echo $_POST["nombreActividad"];
                echo "<br>";
                if(isset($_POST["etapas"])){
                    print_r($_POST["etapas"]); /* Realizo un print_r para mostrar los valores porque es un array */
                }
                echo "<br>";
                if(isset($_POST["actividadSeccion"])){
                    echo $_POST["actividadSeccion"];
                }
            }
        ?>
    </body>
</html>