<?
session_start();
extract($_SERVER,EXTR_SKIP);
extract($_SESSION,EXTR_SKIP);
extract($_COOKIE,EXTR_SKIP);
extract($_POST,EXTR_SKIP);
extract($_GET,EXTR_SKIP);  
if($boton) 
{
	if (is_uploaded_file($HTTP_POST_FILES['archivo']['tmp_name'])) 
        {
		//copy($HTTP_POST_FILES['archivo']['tmp_name'],$HTTP_POST_FILES['archivo']['name']);
                if($HTTP_POST_FILES['archivo']['type']== 'application/octet-stream') 
                {		
				copy($HTTP_POST_FILES['archivo']['tmp_name'], $HTTP_POST_FILES['archivo']['name']);
				$subio = true;
                }
                
                //move_uploaded_file($_FILES['AUX']['tmp_name'], "C:\Users\Administrador\Documents\Dropbox\PHP HTML/{$_FILES['AUX']['name']}");
		//$subio = true;
                $aux=$_SERVER['DOCUMENT_ROOT'];
                //echo $aux;
                //echo "<br>";
                //echo '&nbsp';
                //echo $HTTP_POST_FILES;
                
	}
	if($subio==true) {
		echo "El archivo subio con exito";
                //echo "<a href="Inicio.html">Regresar Menu Principal</a>"; 
                echo '<div align="center"><a href="Inicio.html">Regresar Menu Principal</a></div>'; 
	} else {
		echo "El archivo no cumple con las reglas establecidas";
                //echo "<a href="Inicio.html">Regresar Menu Principal</a>"
                //echo '<td><a href="Inicio.html">Regresar Menu Principal</a></td>';
                echo '<div align="center"><a href="resp01Tron.php">Regresar Menu Principal</a></div>';  
	}
	die();
}else 
?>

<html>
<head>
<title>Upload en PHP - Ejemplo 1</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<form action="<?=$PHP_SELF; echo $PHP_SELF; ?>" method="post" enctype="multipart/form-data" name="form1">
  <p align="center">Archivo
  	<input name="archivo" type="file" id="archivo">
  </p>
  <p align="center"><input name="boton" type="submit" id="boton" value="Enviar"></p>
</form>
    <div align="center"><a href="Inicio.html">Regresar Menu Principal</a></div>

</body>
</html>
