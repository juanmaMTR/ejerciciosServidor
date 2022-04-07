<!DOCTYPE html>
<!-- Creamos el array en el archivo externo y se llama al método visualizar para que muestre los datos -->
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
            $diasemana[]="lunes";
            $diasemana[]="martes";
            $diasemana[]="miercoles";
            $diasemana[]="jueves";
            $diasemana[]="viernes";
            $diasemana[]="sabado";
            $diasemana[]="domingo";
            /* Llamo a los metodos del objeto */
            $modelo->verValores($meses,$diasemana);
        ?>
    </body>
</html>