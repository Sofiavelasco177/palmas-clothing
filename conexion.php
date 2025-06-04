
<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass= ''; 
$dbname = 'palmas';

	$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>