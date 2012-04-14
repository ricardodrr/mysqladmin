<?PHP

if($_POST['drop']){
//Lo borramos.
    $user = new User();
    $user->setUser($_POST['user']);
    $user->setHost($_POST['host']);
    $db= new MySQLdBO();
    echo $db->connect();
    dropUser($user->getUser(),$user->getHost(),$db);
    $msgOK[] = "Se ha borrado exitosamente.";
    include("action/listUser.php");
}else{
    echo $_GET['userLogin']; 
    $us = explode('@',$_GET['userLogin']);
    $user = new User();
    $user->setUser($us[0]);
    $user->setHost($us[1]);
    $view = "dropUserForm";
}

?>