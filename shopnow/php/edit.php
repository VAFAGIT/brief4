<?php
require_once 'config.php';




$id=$_POST["id"];
$name= $_POST["name"];
$price=$_POST["price"];
$quantity=$_POST["quantity"];
$category=$_POST["category"];



if($_FILES["image"]["name"]==""){
    $sql = "UPDATE  products SET P_name='$name',Price='$price', Quantity='$quantity',Category='$category' WHERE id_product=$id";
}
else {
    include 'upload_image.php';
    $sql = "UPDATE  products SET P_name='$name',Price='$price', Quantity='$quantity',Category='$category', image_url='$file_name' WHERE id_product=$id";
}

$conn->query($sql);
$conn->close();


header("location: ../index.php");

?>