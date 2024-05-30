<?php

/**
 * mysql_connect is deprecated
 * using mysqli_connect instead
 */

$databaseHost = 'rud-users-cloud.mysql.database.azure.com';
$databaseName = 'crud_with_login';
$databaseUsername = 'U19052194';
$databasePassword = 'CloudComputing2024!';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
	
?>
