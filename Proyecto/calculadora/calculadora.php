<!DOCTYPE html>
<html>
    <head>
        <title>CALCULADORA</title>
        <meta charset="UTF-8">
        <meta name="resultado.php" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>            
            <h1>CALCULADORA PHP</h1>             
            <form action="" method="POST" enctype="multipart/form-data"> 
                    <strong>Número 1</strong>:<br>
                    <input type="number" name="n1" ><br>
                    <br>
                    <strong>Número 2</strong>:<br>
                    <input type="number" name="n2" ><br>
                    <br>                   
                    <input type="submit" name="operaciones" id="opr" value="Sumar" >                                            
                    <input type="submit" name="operaciones" id= "opr" value="Restar">                                                      
                    <input type="submit" name="operaciones" id="opr" value="Multiplicar">                                          
                    <input type="submit" name="operaciones" id="opr " value="Dividir">                     
            </form>
        </div>
    </body>  
</html>
<?php
include 'resultado.php';
 ?>
