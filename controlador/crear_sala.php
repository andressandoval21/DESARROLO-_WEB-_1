<?php

function codigo(){
    $numero=substr(md5(rand()), 0, 5);

    echo($numero);

    $mysqli= new mysqli('localhost', 'root', '', 'juego');
    $numero=hexdec($numero);
    
    $mysqli->query(sprintf("INSERT INTO sala (codigo) Values ($numero)"));
    $numero=dechex($numero);
    
    
}
        


codigo();






?>