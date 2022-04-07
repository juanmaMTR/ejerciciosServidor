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
            /* LLamo al archivo modelo.php */
            require_once __DIR__. "/model/modelo.php";
            /* Instancio el objeto */
            $modelo=new Modelo;
            /* Llamo a los metodos del objeto */
            $modelo->darValores();
            /* Recorro el array $meses y muestro los datos mediante un echo en el foreach */
            foreach($modelo->meses as $nombremes=>$dia){
                echo "Mes: $nombremes => $dia.<br>";
            }
            echo "<h3>Foreach solo valor</h3>";
            /* Recorro el array para mostrar solo el valor */
            foreach($modelo->meses as $dia){
                echo "Valor $dia<br>";
            }
            echo "<h3>Foreach dias de la semana con el indice</h3>";
            /* Sumo uno al indice porque empieza en la posicion 0 */
            foreach($modelo->diasemana as $indice=>$valor){
                echo "Dia[". $indice+1 ."]: $valor<br>";
            }
            echo "<h3>For utilizando el count</h3>";
            /* Sumo uno al indice porque empieza en la posicion 0, y el count te dice la cantidad de elementos que tiene el array */
            for ($i=0; $i < count($modelo->diasemana); $i++) { 
                echo "Dia[". $i+1 ."]: ". $modelo->diasemana[$i] ."<br>";
            }
        ?>
    </body>
</html>