<?php
 $dsn = 'mysql:host=sql2.njit.edu;dbname=sk752';
 $username = 'sk752';
 $password = '56TTksv2';
 try{
   $db = new PDO($dsn,$username,$password);
}catch (PDOException $e){
   $error_message = $e->getMessage();
   echo $error_message;
   exit();
 }
?>
