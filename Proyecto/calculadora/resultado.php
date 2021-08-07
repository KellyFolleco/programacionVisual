<?php
$resultado="";

if(isset($_POST['n1'])&&
isset($_POST['n2'])&&
isset($_POST['operaciones']))
{
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$opr=$_POST['operaciones'];


if($opr=="Sumar"){
    $resultado=$n1+$n2;   
    
}
if ($opr=="Restar"){
    $resultado=$n1-$n2;    
    
}
if ($opr=="Multiplicar"){
    $resultado=$n1*$n2;    
    
}
if ($opr=="Dividir"){
    $resultado=$n1/$n2;    
    
}
}
echo "<h1>El resultado es:".$resultado; 






 
