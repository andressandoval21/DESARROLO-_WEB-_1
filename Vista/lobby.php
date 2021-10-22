

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/lobby.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>

<?php
require_once "../controlador/cerrar_seccion.php";
$jugadores = 0;
for($jugadores=0;$jugadores<=3;$jugadores++)
$sala = 0;
?>
    

<div class="contenido">

    <div class="numero_sala">
        <h3>
        SALA : 
        <?php echo $sala ?>
        </h3>
    </div>

    <h1>
        CARGANDO 
    </h1>

    <div>
            <label for="file">File progress:</label>
            <meter 
                id="file" 
                min = "0" 
                max="4" 
                value=<?php echo $jugadores ?>>  

            </meter>
            <h3> <?php echo $jugadores ?> / 4</h3>
    </div>

    <div class="salir_sala" >

        <button type="submit" class ="salir_sala" name=salir>salir</button>

    </div>


</div>




</body>
</html>


