<?php
session_start();

if (isset ($_SESSION['valor']))
{  
    $_SESSION['valor']++;
}
else
{
    $_SESSION['valor']=1;
}
unset ($_SESSION[""]);
header("Location:session.php");

