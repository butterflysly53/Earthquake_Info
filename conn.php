<?php
//Development connection
 /*$host="localhost";
 $db="earthquakenew";
 $user="root";
 $pass="";
 $charset="utf8mb4";*/

//Remote Database Connection

 $host="sql6.freesqldatabase.com";
 $db="sql6440167";
 $user="sql6440167";
 $pass="Wv5sUIDvEU";
 $charset="utf8mb4";
 
 $dsn="mysql:host=$host;dbname=$db;charset=$charset";
 
 try{
    $pdo=new PDO($dsn,$user,$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected";
 }
 catch(PDOException $e){
     echo "<h1 class='text-danger'>No dataBase Found</h1>";
     throw new PDOException($e->getMessage());
 }
 require_once "crud.php";
 $crud=new crud($pdo);
?>