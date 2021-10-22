<?php
require_once "unirse.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link  rel="stylesheet" href="css/style.css">
    <title>SENA SOFT</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        
        Clave:<br>
        <input type="text" name="codigo"><br><br>
        <input type="submit" name="login" value="Ingresar">
    </form>
    </div>
</body>
</html>






















