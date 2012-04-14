<div id="header">
    <h1><img src="theme/images/mysql.gif" width="200px"/> Admin</h1>
</div>
<nav id="navmenu" >
    <ul>
        <li><a href="index.php" >Inicio</a></li>
        <li>Usuarios
            <ul>
                <li><a href="index.php?action=userList" >Listar</a></li>
                <li><a href="index.php?action=createUser" >Crear</a></li>
            </ul>
        </li>
        
    </ul>
</nav>
<div id="mensajes">
<?php
if(isset($mensajes)){
	foreach($mensajes as $mensaje){
		echo "<li class='info'>$mensaje</li>";
	}
}
?>
</div>