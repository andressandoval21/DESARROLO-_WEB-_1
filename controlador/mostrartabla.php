<?php 
require_once "conexion.php";

function mostrarTabla(){


    $conectar = new bdconnect;
    $conn = $conectar->connect();
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM tabla";
    $query = $conn->query($sql);
    $query -> execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);


    if($query -> rowCount() > 0){
        foreach($results as $result){
            echo "<tr>
                <td>".$result -> nombres."</td>
                <td>".$result -> notas."</td>
                </tr>";    
        }
    }
}
mostrarTabla();




?>