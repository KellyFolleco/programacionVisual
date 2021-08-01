<?php

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

foreach($_POST as $clave => $valor){
    if($valor=="-"){
        $restar=$num1-$num2;
        echo "La resta es:".$restar;
    }
    if($valor=="+"){
        $suma=$num1+$num2;
        echo "La suma es:".$suma;
    }
    if ($valor=="*"){
        $multi=$num1*$num2;
        echo "La multiplicación es:".$multi;
    }
    if ($valor=="/"){
        $divide=$num1/$num2;
        echo "La división es:".$divide;
    }
}


