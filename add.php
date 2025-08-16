<?php 
include "conn.php"; // Include the connection file

// Assign values from POST request
$item_code =$_POST['item_code'];
$item_name = $_POST['item_name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

// Function to save data in the database
$conn->query("INSERT INTO tb_item(item_code, item_name, price, stock)
            VALUES(
                '".$item_code."',  
                '".$item_name."',
                '".$price."',
                '".$stock."')");
?>
