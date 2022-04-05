<?php
    class Modelo{
        private $meses;
        private $diasemana;
        function darValores(){
            /* Creo la valiable meses que va a ser un array con los meses y el valor de los días */
            $this->meses=array(
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
            $this->diasemana[]="lunes";
            $this->diasemana[]="martes";
            $this->diasemana[]="miercoles";
            $this->diasemana[]="jueves";
            $this->diasemana[]="viernes";
            $this->diasemana[]="sabado";
            $this->diasemana[]="domingo";
        }
        function verValores(){
            /* Recorro el array $meses y muestro los datos mediante un echo en el foreach */
            foreach($this->meses as $nombremes=>$dia){
                echo "Mes: $nombremes => $dia.<br>";
            }
            echo "<h3>Foreach solo valor</h3>";
            /* Recorro el array para mostrar solo el valor */
            foreach($this->meses as $dia){
                echo "Valor $dia<br>";
            }
            echo "<h3>Foreach dias de la semana con el indice</h3>";
            /* Sumo uno al indice porque empieza en la posicion 0 */
            foreach($this->diasemana as $indice=>$valor){
                echo "Dia[". $indice+1 ."]: $valor<br>";
            }
            echo "<h3>For utilizando el count</h3>";
            /* Sumo uno al indice porque empieza en la posicion 0, y el count te dice la cantidad de elementos que tiene el array */
            for ($i=0; $i < count($this->diasemana); $i++) { 
                echo "Dia[". $i+1 ."]: ". $this->diasemana[$i] ."<br>";
            }
            
        }
    }
/* FIN DE LA PAGINA */