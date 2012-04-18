<?
session_start(); 
ob_start();

error_reporting(E_ALL);
ini_set("display_errors", 1);
function listar()
{
    $quitar_extension = array(".txt", ".php",".ini"); //Extensiones a quitar
    $saltar_archivo = false;
    echo '<select name="lista">';
    $dir = opendir("./");
    
    while($listar_d = readdir($dir))
    {

        if ($listar_d[0] != "." && $listar_d[0] != "..")
        {
            if(is_file($listar_d)){
                foreach ($quitar_extension as $extension){
                    if(strstr($listar_d, $extension)) $saltar_archivo = true;
                }
                if($saltar_archivo){
                    $saltar_archivo = false;
                    continue;
                } else {
                    echo "<option onclick='form.submit();' value=$listar_d>$listar_d</option>";
                }
                //echo "<option value=$listar_d>$listar_d</option>";
            }
        else { //Es directorio
            echo "<option onclick='form.submit();' value=$listar_d>$listar_d</option>";
        }
        }
        

    }
    echo '</select>';
    closedir($dir);
}



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

    echo "<FORM ACTION=restore01.php METHOD=post>";

    echo "<INPUT TYPE=submit NAME=submit  VALUE=Restaurar><BR>";

    echo "</FORM>";
    echo "<br>";
   
   
    }

 echo '<br> <div align="center"><a href="Inicio.html">Regresar Menu Principal</a></div>';




?> 