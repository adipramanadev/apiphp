<?php
header("Content-Type: application/json"); // Set header to JSON

include "conn.php"; // Include the database connection

$response = array(); // Initialize response array

// Query to fetch all items
$sql = "SELECT * FROM tb_item";
$hasilquery = $conn->query($sql);

if ($hasilquery === FALSE) {
    // Handle query error
    $response['error'] = "Query failed: " . $conn->error;
} else {
    $result = array();
    
    // Fetch results into an array
    while ($row = $hasilquery->fetch_assoc()) {
        $result[] = $row;
    }
    
    // Assign result to response
    $response['data'] = $result;
}

// Encode response to JSON and output it
echo json_encode($response);

// Close database connection
$conn->close();
?>
