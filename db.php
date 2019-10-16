<?php
$servername="localhost";
$username="root";
$password="";
$dbname="digi_mvc2";
$attr=[PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'];
$conn=new PDO("mysql:host=".$servername.";dbname=".$dbname,$username,$password,$attr);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


?>