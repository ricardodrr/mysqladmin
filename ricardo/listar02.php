<?
session_start(); 
ob_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);

function Connect($host,$user,$passwd)
     {  
      if(!($link=mysql_connect($host,$user,$passwd)))
       {
        echo "Error connecting to DDBB.";
        exit();
       }
       return $link;
     }

function listar()
{
    
    echo '<select name="lista">';
    $select="show databases";
    $select=mysql_query($select); 
    
    while($row = mysql_fetch_row($select))
   {
       ?>
       <option onclick='form.submit();' value="<?php echo $row[0]; ?>"><?php echo $row[0]; 
       
       
       ?></option>
      
      
       
       <?php
   }        
    echo '</select>';
    

}



$link=Connect('localhost','root','');
echo '<form method="post" action="'.$_SERVER['PHP_SELF'].'?send">';
listar();
global $nueva;
echo '</form>';
if(isset($_GET['send'])){
    echo "Has seleccionado ".$_POST['lista']."";
    
    $nueva = $_POST['lista'];
    //echo $nueva;
    
    
    $_SESSION['nombre']=$nueva;
//echo '<a href="restore01.php">pagina</a>';

    echo $_SESSION;
    echo $_SESSION['nombre'];
   
    echo $nueva;

    echo "<FORM ACTION=borrar01.php METHOD=post>";

    echo "<INPUT TYPE=submit NAME=submit  VALUE=Borrar><BR>";

    echo "</FORM>";
    echo "<br>";
   
   
    }

 echo '<br> <div align="center"><a href="Inicio.html">Regresar Menu Principal</a></div>';




?> 