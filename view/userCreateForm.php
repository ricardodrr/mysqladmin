<!--Representa s—lo el formularo de creaci—n de usuarios. -->
<h2>Nuevo usuario</h2>
<p>
Ingresa los datos del usuario que deseas agregar al sistema.
</p>
<form action="index.php?action=createUser" method="post">
<label for="user">Usuario:</label><input type="text" name="user"></input><br>
<label for="server">Servidor:</label><input type="text" name="server" value="%"></input><br>
<label for="password">Contrase&ntilde;a:</label><input type="password" name="password" ></input><br>
<input type="submit" name="create" value="Crear"></input>
</form>