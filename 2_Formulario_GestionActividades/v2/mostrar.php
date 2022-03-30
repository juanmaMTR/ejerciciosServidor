<?php
    /* Si existe enviar meto en un array llamado formulario todo lo que contiene el $_POST del formulario */
    if(isset($_POST["enviar"])){
        foreach($_POST as $nombre=>$valor){
            $formulario["$nombre"]=$valor;
        }
    }
    /* Recorro el array de formulario donde he metido todo anteriormente y enseño los valores de las cosas, controlando algunos errores */
    if(isset($formulario['enviar'])){
        foreach($formulario as $nombre=>$valor){
            if(isset($formulario["etapas"]) && $formulario["etapas"]==$formulario["$nombre"]){
                foreach($formulario["etapas"] as $valor){
                    echo "$valor <br>";
                }
            }else{
                if(isset($formulario["actividadSeccion"]) && $formulario["actividadSeccion"]==$formulario["$nombre"]){
                    echo "actividadSeccion <br>";
                }else{
                    if($formulario["$nombre"]==$formulario["enviar"]){

                    }else{
                        echo "$nombre: $valor<br>";
                    }
                }
            }
        }
    }
?>