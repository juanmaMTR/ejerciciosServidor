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
            $modelo->verValores();
        ?>
    </body>
</html>