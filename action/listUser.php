<?php
        $db= new MySQLdBO();
        echo $db->connect();
        $query = "SELECT  * FROM MYSQL.USER ";
        $result = $db->execQuery($query);
        $users = array();
        while($user=mysql_fetch_array($result)){
            $u = new User();
            $u->setUser ($user['User']);
            $u->setHost($user['Host']);
            $users[] = $u;
        }
        foreach($users as $us){
            echo $us->getUser();
        }
        $view = 'listUser'
?>