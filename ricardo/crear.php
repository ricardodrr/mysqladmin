<?php
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
 
if (empty($_POST['NombreDB'])) {  
echo'El campo no puede estar vacio <br>';

 echo "<meta http-equiv='Refresh' content='3;url=nueva.php'>";
 echo "Seras Rediriguido para ingresar un nombre valido";
 echo '<br>';
 
} else { 
 
$db=$_POST['NombreDB'];


$select="create database  $db";

mysql_query($select); 

echo 'La base de datos '.$db .'  ha sido creada';
echo '<br>';

echo '<br> <div align="center"><a href="Inicio.html">Regresar Menu Principal</a></div>';
}

?>
