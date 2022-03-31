<?php
    /* Si existe enviar meto en un array llamado formulario todo lo que contiene el $_POST del formulario */
    if(isset($_POST["enviar"])){
        foreach($_POST as $nombre=>$valor){
            $formulario["$nombre"]=$valor;
        }
    }
    /* Recorro el array de formulario donde he metido todo anteriormente y enseño los valores de las cosas, controlando algunos errores */
    if(isset($formulario['enviar'])){
        /* Elimino el campo enviar del formulario para que no lo muestre */
        unset($formulario["enviar"]);
        /* Recorro el array formulario con un foreach */
        foreach($formulario as $nombre=>$valor){
            /* Compruebo si está en el campo "nombreActividad" y si está vacío pues no hago nada */
            if(empty($formulario["nombreActividad"]) && $formulario["nombreActividad"]==$formulario["$nombre"]){
                echo "Debe introducir un nombre en la actividad";
            }else{
                /* Compruebo si está en el campo "etapas" y si existe a la vez y solo muestro el valor del campo */
                if(isset($formulario["etapas"]) && $formulario["etapas"]==$formulario["$nombre"]){
                    foreach($formulario["etapas"] as $valor){
                        echo "$valor <br>";
                    }
                }else{
                    /* Compruebo si está en el campo "actividadSeccion" y si existe a la vez y solo muestro el nombre de actividadSeccion */
                    if(isset($formulario["actividadSeccion"]) && $formulario["actividadSeccion"]==$formulario["$nombre"]){
                        echo "actividadSeccion <br>";
                    }else{
                        /* Si no se cumple nada de lo anterior pues muestro el nombre del campo con su valor */
                        echo "$nombre: $valor<br>";
                    }
                }
            }
        }
    }
?>