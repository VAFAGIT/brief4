<?php
require_once 'config.php';
session_start();
require_once 'upload_image.php';

$name= $_POST["name"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$Category=$_POST["Category"];
$id= $_SESSION['id'];


$sql = "INSERT INTO products (P_name,Price, Quantity,Category, image_url, id_user) 
VALUES
('$name', '$price', '$quantity', '$Category' , '$file_name', $id)";
$conn->query($sql);
$conn->close();

header("location: ../index.php");


?>