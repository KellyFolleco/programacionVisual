<?php

if (isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo "<strong>El título del formulario es:</strong> ".$_POST['titulo']."<br><strong> La descripcion es:</strong> </br> ".$_POST['descripcion'];
    echo "<br><strong> El sexo es: </strong></br> ";
    if($_POST['sexo']== 0){
        echo "Hombre";
    }else{
        echo "Mujer ";
    };
    echo "<br>";
    echo "<strong>El color es :</strong> ".$_POST['color'] ;
    echo "<br>";
    echo "<strong>La URL es :</strong> ".$_POST['url'];
}


