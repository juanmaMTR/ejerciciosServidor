<?php
    class Modelo{
        /* Deben de ser publicos porque los llamo desde un archivo externo */
        public $meses;
        public $diasemana;
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
    }
/* FIN DE LA PAGINA */