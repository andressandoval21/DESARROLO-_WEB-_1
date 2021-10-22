
<?php
require_once "../controlador/crear_sala.php";
require_once "../controlador/cerrar_seccion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SALA DE JUEGO</title>
</head>
<body>


<div class="container">
  <div class="row">

    <div class="col-4"><br>
    <h1 class="text-primary text-center">TABLA</h1>
    <hr>

    <table class="table table-bordered"> 
        <thead >
                <th width="28%">nombre</th>
                <th width="20%">nota</th>                
                <?php
require_once "../controlador/mostrartabla.php";
?>   
 </thead>
        
</table>
</div>



    <div class="col-6"><br>
    <h1 class="text-primary text-center">FICHAS</h1>
    <hr>
    <div class="card" style="width: 18rem;">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    
        <?php 
        foreach($resultado as $row){ ?>
         <img src="<?php echo $row ['img']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
         <p class="card-text"><strong><?php echo $row ['carta'];?></strong></p>
        
        </div>
        <?php } ?>
    </div>
    </div>
    <input type="submit" name="salir" class="btn btn-primary" value="Salir" >
</div>

<?php
        require_once "../controlador/conexion.php";
        $conectar = new bdconnect;
        $conn = $conectar->connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM fichas";
        $query = $conn->query($sql);
        ?>
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>