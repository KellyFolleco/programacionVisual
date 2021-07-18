<?php

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

