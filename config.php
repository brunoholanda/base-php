<?php
$password="";
$username="root";
$server="localhost";
$banco="telefones";

try {
$conn = new PDO('mysql:host=localhost;dbname=mysql', $username, $password);
$conn->exec("set names utf8");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
echo 'ERROR: ' . $e->getMessage();
}

?>