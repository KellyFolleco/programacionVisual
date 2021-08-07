<?php
session_start();
echo "<h1>El valor de la sesión número es :".$_SESSION['valor']."</h1>";


echo "<a href = 'aumento.php'><br>Aumentar el valor</a><br>";
echo "<a href = 'disminuir.php'>Disminuir el valor</a>";


