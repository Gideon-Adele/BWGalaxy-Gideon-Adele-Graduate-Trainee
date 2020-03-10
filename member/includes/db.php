<?php
/*$db['db_host']="localhost";
$db['db_user']="root";
$db['db_pass']="";
$db['db_name']="hospital_a";

	foreach ($db as $key => $value) {
		define(strtoupper($key), $value);

	}
$connection= mysqli_connect (DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (!$connection) {
		die('Connection failed');
	}*/

	$connection = mysqli_connect('localhost', 'root', '', 'bw_galaxy');
	if (!$connection) {
		die('connection failed');
	}
?>
