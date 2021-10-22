<!DOCTYPE html>
<html>
<head>
	<title>preguntas aleatorias</title>
</head>
<body>
	<?php 
$lista_array=array(0,1,2,3,4,5,6,7,8,9,10); //CREAR LISTA ARRAY
            $random_keys=array_rand($lista_array,3);// NUMERO DE VALORES A OBTENER DENTRO SWL ARREGLO
                        $a= $lista_array[$random_keys[0]];//POCICION 1
                        $b= $lista_array[$random_keys[1]];//POSICION 2 
                        $c= $lista_array[$random_keys[2]];//POSICION 2 

//------------------------------------------------------------------

echo "<h1><center> 
numeros aleatorios sin repetir <br>";

echo $a;
echo "<p></p>";
echo $b;
echo "<p></p>";
echo $c;

echo "</h1>";
	 ?>
</body>
</html>