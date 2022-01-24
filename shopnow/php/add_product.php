<?php
require_once 'config.php';
session_start();
require_once 'upload_image.php';

$name= $_POST["name"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$category=$_POST["category"];
$id= $_SESSION['id'];
// $bc=$_POST["bc"];


$sql = "INSERT INTO products (P_name,Price, Quantity,Category, image_url, id_user) 
VALUES
('$name', '$price', '$quantity', '$category' , '$file_name', $id)";
$conn->query($sql);
$conn->close();

header("location: ../index.php");


?>