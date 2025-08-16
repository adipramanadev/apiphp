<?php
include "conn.php"; // Include the connection file

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['error' => 'Only POST method is allowed']);
    exit();
}

// Assign values from POST request
$item_code = isset($_POST['item_code']) ? trim($_POST['item_code']) : '';
$item_name = isset($_POST['item_name']) ? trim($_POST['item_name']) : '';
$price = isset($_POST['price']) ? filter_var($_POST['price'], FILTER_VALIDATE_FLOAT) : 0;
$stock = isset($_POST['stock']) ? filter_var($_POST['stock'], FILTER_VALIDATE_INT) : 0;


// Function to save data in the database
$conn->query("INSERT INTO tb_item(item_code, item_name, price, stock)
            VALUES(
                '" . $item_code . "',  
                '" . $item_name . "',
                '" . $price . "',
                '" . $stock . "')");
?>