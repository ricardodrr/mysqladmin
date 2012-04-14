<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<title><?php echo $title ?> | MySQL Admin</title>
	<?php
		include_once("theme/head.php");
	?></head>
	<body>
	<?PHP include("theme/header.php"); ?>
            <div class="contenido">
                <div class="dbcolumn">
                
                <?php include("$view.php"); ?>
                
                </div>
                
                <div class="maincontent">
                
                <?php include("$view.php"); ?>
                
                </div>
                
                
            </div>
            
	<?php include("theme/footer.php");?>
	</body>
</html>