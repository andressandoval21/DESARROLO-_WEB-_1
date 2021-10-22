<?php
require_once "../controlador/conexion.php";
class DaoJugador extends bdconnect{


function listar(){
  

    try {
        $conn = $this->connect();
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = $conn->prepare("SELECT * FROM jugadores"); 
        $sql->execute();
        $resultado = $sql->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new listarTabla(new RecursiveArrayIterator($sql->fetchAll())) as $key=>$valor) { 
            echo $valor;
        }
    }
    catch(PDOException $error) {
        echo "Error: " . $error->getMessage();
    }
    $conexion = null;
    echo "</table>";
    }
    
    }
        
    class listarTabla extends RecursiveIteratorIterator { 
       function __construct($esto) { 
            parent::__construct($esto, self::LEAVES_ONLY); 
         }
        
        function current() {
             return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
        }
        
        function beginChildren() { 
            echo "<tr>"; 
        } 
        
        function endChildren() { 
            echo "</tr>" . "\n";
        } 
    }






?>