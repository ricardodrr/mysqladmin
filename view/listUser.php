<h3>Lista de usuarios existentes en el sistema.<h3>
<table border="0">
    <tr>
        <th>Usuario</th>
        <th>Host</th>
        <th>Editar</th>
        <th>Eliminar</th>        
</tr>
<?php
        foreach($users as $us){
            echo "<tr>";
            echo "<td>".$us->getUser()."</td>";
            echo "<td>".$us->getHost()."</td>";
            echo "<td><a href='index.php?action=editUser&userLogin=".$us->getUser()."@".$us->getHost()."'>Editar</a></td>";
            echo "<td><a href='index.php?action=dropUser&userLogin=".$us->getUser()."@".$us->getHost()."'>Eliminar</a></td>";
            echo "</tr>";
        }
?>
</table>