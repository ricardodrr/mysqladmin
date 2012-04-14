<?php
    if($_POST['create']){
        $db= new MySQLdBO();
        echo $db->connect();
        $user = $_POST['user'];
        echo $user;
        $server = $_POST['server'];
        $password = $_POST['password'];
        createUser($user,$server,$password,$db);
        $msgOK[] = "User $user@$server successfully created";
    }
        $view = "userCreateForm";
?>