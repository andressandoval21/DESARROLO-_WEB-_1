<?php
require_once "../controlador/cerrar_seccion.php";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SALA DE JUEGO</title>
</head>
<body>
    codigo de la SALA

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="submit" name="salir" class="btn btn-primary" value="Salir" >
</body>
</html>


<?php
require_once "../controlador/crear_sala.php";
?>
