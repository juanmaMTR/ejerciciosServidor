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
            /* Si esxiste enviar, muestro los componentes del formulario 1 a 1 */
            /* if(isset($_POST['enviar'])){
                echo $_POST["categoria"];
                echo "<br>";
                echo $_POST["nombreActividad"];
                echo "<br>";
                if(isset($_POST["etapas"])){
                    foreach($_POST["etapas"] as $valor){
                        echo "$valor <br>";
                    }
                }
                if(isset($_POST["actividadSeccion"])){
                    echo "actividadSección";
                }
            } */
            if(isset($_POST["enviar"])){
                print_r($_POST);
            }
        ?>
    </body>
</html>