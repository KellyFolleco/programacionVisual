<!DOCTYPE html>
<html>
        <head>
        <meta https-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>VIDEOJUEGO</title>
    </head>
    <body>
        <h1>VIDEOJUEGO</h1>         
        <?php       
        $a["videojuego"]["ACCIÓN"]=["GTA", "COD","PUBG"];      
        $a["videojuego"]["AVENTURA"]=["ASSASINS","CRASH","PRINCE OF PERSIA"];      
        $a["videojuego"]["DEPORTE"]=["FIFA 19","PES 19","MOTO GP 19"];             
        $keys = array_keys($a["videojuego"]);        
        $table = "<table border=\"1\">";
        $table .= "<tr>";        
        foreach($keys as $i){
            $table .= "<th>".$i."</th>";          
        }        
        $table.="</tr>";
        include 'aventura.php';
        include 'accion.php';
        include 'deportes.php';
        $table .= "</table>";       
        echo $table;
        //echo "<pre>";var_dump($a);echo"</pre>";  
        ?>
    </body>
</html>
