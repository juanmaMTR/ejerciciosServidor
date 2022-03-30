<!DOCTYPE html>
<!-- Para enseñar los meses del año con foreach -->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Juan Manuel Toscano Reyes">
        <title>Foreach</title>
    </head>
    <body>
        <h1>Foreach</h1>
        <h3>Foreach con los meses del año y su valor de dias que le corresponde a cada uno</h3>
        <?php
            /* Creo la valiable meses que va a ser un array con los meses y el valor de los días */
            $meses=array(
                "enero"=>31,
                "febrero"=>28,
                "marzo"=>31,
                "abril"=>30,
                "mayo"=>31,
                "junio"=>30,
                "julio"=>31,
                "agosto"=>31,
                "septiembre"=>30,
                "octubre"=>31,
                "noviembre"=>30,
                "diembre"=>31
            );
            /* Recorro el array $meses y muestro los datos mediante un echo en el foreach */
            foreach($meses as $nombremes=>$dia){
                echo "Mes: $nombremes => $dia.<br>";
            }
            echo "<h3>Foreach solo valor</h3>";
            /* Recorro el array para mostrar solo el valor */
            foreach($meses as $dia){
                echo "Valor $dia<br>";
            }
            echo "<h3>Foreach dias de la semana con el indice</h3>";
            $diasemana[]="lunes";
            $diasemana[]="martes";
            $diasemana[]="miercoles";
            $diasemana[]="jueves";
            $diasemana[]="viernes";
            $diasemana[]="sabado";
            $diasemana[]="domingo";
            /* Sumo uno al indice porque empieza en la posicion 0 */
            foreach($diasemana as $indice=>$valor){
                echo "Dia[". $indice+1 ."]: $valor<br>";
            }
            echo "<h3>For utilizando el count</h3>";
            /* Sumo uno al indice porque empieza en la posicion 0 */
            for ($i=0; $i < count($diasemana); $i++) { 
                echo "Dia[". $i+1 ."]: $diasemana[$i]<br>";
            }
        ?>
    </body>
</html>