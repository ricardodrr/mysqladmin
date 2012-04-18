<?
session_start(); //
ob_start();  
  
//$_SESSION['nombre'];  
//echo $_SESSION['nombre'];  
  
$filename=$_SESSION['nombre'];  

$rest = substr($filename, 0, -4);  // return whitout .SQL
//echo $rest; 

 $Dataname=$rest; 
  
// Name of the file
//$filename = 'REGPER.sql';
// MySQL host
$mysql_host = 'localhost';
// MySQL username
$mysql_username = 'root';
// MySQL password
$mysql_password = '';
// Database name
$mysql_database = $Dataname;


// Connect to MySQL server
mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connecting to MySQL server: ' . mysql_error());

//There is a same database

        $select="show databases";
        $select=mysql_query($select); 
        while($row = mysql_fetch_row($select))
        {
            if($row[0]==$Dataname)
            { 
                //echo 'hay almenos una base';
                //echo '  con el mismo nombre';
                $dir=true;
        
            }
        } 
   
    if( $dir!=true)
    {
        $create="create database $Dataname";
        $select=mysql_query($create); 
        //echo 'base de datos creada' ;
     }



// Select database
mysql_select_db($mysql_database) or die('Error selecting MySQL database: <br>' . mysql_error()  .' <br> <div align="center"><a href="Inicio.html">Regresar Menu Principal</a></div>'  );
 
// Temporary variable, used to store current query
$templine = '';
// Read in entire file
$lines = file($filename);
// Loop through each line
foreach ($lines as $line)
{
    // Skip it if it's a comment
    if (substr($line, 0, 2) == '--' || $line == '')
        continue;
 
    // Add this line to the current segment
    $templine .= $line;
    // If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';')
    {
        // Perform the query
        $nasa=mysql_query($templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
        // Reset temp variable to empty
        
        $templine = '';
    }
}
if ($nasa==1)
{
    echo 'Restore successful';
    echo '<div align="center"><a href="Inicio.html">Regresar Menu Principal</a></div>';  
}

?>