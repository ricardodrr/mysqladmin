<?php

//if (empty($_POST['NombreDB'])) {  
//echo' no metiste nada';
//}

if (empty($_POST['NombreDB'])) {
  echo 'Llen— los Datos';
}else{
  // No lleno los datos
}

?>

<HTML> 
<HEAD> <h2>Creaccion Base de Datos.</h2>
<TITLE>ADD DATA BASE    
</TITLE> 
</HEAD> 
<BODY bgcolor = "000000" text = "FFFFFF"> 

<FORM method= "POST" name="agregar"	action= "crear.php" >
<b>Crear base de datos</b>
<TABLE BORDER=0>
	
	<TR>
		<TD>Nombre</TD>
		<TD>
		<INPUT type=text name="NombreDB">
		</TD>
	</TR>
	
	<?php
        
        if (empty($_POST['NombreDB'])) {
  echo 'Llen— los Datos';
}else{
  // No lleno los datos
}

?>


<TR>
	<TD COLSPAN=2>
	
        <INPUT type="submit" name="nombre" value="Crear Base">
	
	</TD>
</TR>

<TR>
	<TD COLSPAN=2>
	<INPUT type="reset" name="nombre" value="Borrar nombre">
	</TD>
</TR>




</TABLE>
</FORM>

<div align="center"><a href="Inicio.html">Regresar Menu Principal</a></div>

	
</BODY> 
</HTML>
