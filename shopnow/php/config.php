<?php 
    $conn= new mysqli("localhost","root","","inventory_management" );
 // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 
 
?>