<?php

//  Conexion con el servidor y la base de datos
$conexion = new mysqli('localhost', 'root', '', 'juego');
if ($conexion->connect_errno) {
    echo "ERROR al conectar con la DB.";
    exit;
}
if(isset($_POST['login2'])){
    

    header('location:../vista/lobby.php');
    

}
if(isset($_POST['login1'])){
    

    header('location:../vista/sala.php');
    

}

//  isset() del boton login
if(isset($_POST['login'])){

    //  Variables $_POST[]
    $codigo = $_POST['codigo'];
    
    if($codigo == "" ){ // Validamos que ningún campo quede vacío
        echo "<script>alert('Error: codigo vacio !');</script>"; // Se utiliza Javascript dentro de PHP
    }else{
        //  Cadena de SQL
        $sql = "SELECT codigo FROM sala WHERE codigo = '$codigo'";

        //  Ejecuto cadena query()
        if(!$consulta = $conexion->query($sql)){
            echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

            //  Cuento registros obtenidos del select. 
            
            $filas = mysqli_num_rows($consulta);

            //  Comparo cantidad de registros encontrados
            if($filas == 0){
                echo "<script>alert('Error:  codigo incorrecto!!');</script>";
            }else{
                header('location:../vista/lobby.php'); // Si está todo correcto redirigimos a otra página
            }

        }
    }
}

