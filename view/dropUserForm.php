<!--Representa s—lo el formularo de creaci—n de usuarios. -->
<h2>Nuevo usuario</h2>
<p>
Est‡s seguro de querer eliminar al usuario: <?php echo $user->getUser()?>@<?php echo $user->getHost()?>
</p>
<form action="index.php?action=dropUser" method="post">
    <input type="hidden" name="user" value="<?php echo $user->getUser()?>">
    <input type="hidden" name="host" value="<?php echo $user->getHost()?>">

    <input type="submit" name="drop" value="S’, elim’nalo"></input>
</form>