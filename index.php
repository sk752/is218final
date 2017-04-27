<?php
	echo "test";
	$dsn = 'mysql:host=sql2.njit.edu;dbname=sk752';
 	$username = 'sk752';
 	$password = '56TTksv2';

//	try{
	$db = new PD0($dsn, $username, $password);
	echo "Connected Successfully!";
//	}catch (PD0Exception $e){
//	$error_message =$e->getMessage();
//	echo "test2";
//	exit();
//	}
?>
