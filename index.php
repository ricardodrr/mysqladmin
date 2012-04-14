<?php
include_once("db/mysql.php");
include_once("classes/classes.php");
if($action=$_GET['action']){
        include("action/$action.php");
        include("view/main.php");
}
?>