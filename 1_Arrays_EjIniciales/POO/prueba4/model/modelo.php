<?php
    class Modelo{
        function verValores($meses,$diasemana){
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
            /* Sumo uno al indice porque empieza en la posicion 0 */
            foreach($diasemana as $indice=>$valor){
                echo "Dia[". $indice+1 ."]: $valor<br>";
            }
            echo "<h3>For utilizando el count</h3>";
            /* Sumo uno al indice porque empieza en la posicion 0, y el count te dice la cantidad de elementos que tiene el array */
            for ($i=0; $i < count($diasemana); $i++) { 
                echo "Dia[". $i+1 ."]: ". $diasemana[$i] ."<br>";
            }
        }
    }
/* FIN DE LA PAGINA */