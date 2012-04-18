<?php

session_start(); //
ob_start();  
    function Connect($host,$user,$passwd)
     {  
      if(!($link=mysql_connect($host,$user,$passwd)))
       {
        echo "Error connecting to DDBB.";
        exit();
       }
       return $link;
     }
$link=Connect('localhost','root','');
//
 
 
$db=$_SESSION['nombre'];   

$select="drop database  $db";

$adi=mysql_query($select); 

echo 'La base de datos '.$db .'  ha sido borrada';
echo '<br>';

echo '<br> <div align="center"><a href="Inicio.html">Regresar Menu Principal</a></div>';

?>
