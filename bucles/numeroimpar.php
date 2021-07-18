<?php

//DESPEGAR POR UN BUCLE LOS NÚMEROS IMPARES, ADICIONAL, REALIZAR EL FIBONACCI CON UN FOR

    echo "<strong>NUMEROS IMPARES</strong>";
    echo "<br>";
    echo "<br>";
$i = 1;     
$n = 50;   
$impar = 1; 
while ( $i <= $n){
	echo "$impar <br />";
	$i = $i + 1;
	$impar = $impar + 2;
}
echo "<strong>FIBONACCI</strong>";
    echo "<br>";
    echo "<br>";
function fibonacci($numero)
    {
        $numeros=[0,1];
        for ($i = 2; $i < $numero; $i++) {
            $numeros[$i] = $numeros[$i - 2] + $numeros[$i - 1];
        }
        return $numeros;
    }
    $resultado=fibonacci(15);
    echo join(",", $resultado); 

