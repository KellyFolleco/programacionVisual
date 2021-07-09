<?php

include 'includes2/class.triangulo';
$triangulo = new CTriangulo ();
echo $triangulo->get_formulario();

if (isset($_POST['guardar'])){
    echo" <strong> El resultado del area es igual a <strong>".$triangulo->area($_POST['base'],$_POST['altura'])
            ." <strong> el resultado del perimetro es igual a <strong>".$triangulo->perimetro($_POST['lado1'], $_POST['lado2'],$_POST['base']);
}

