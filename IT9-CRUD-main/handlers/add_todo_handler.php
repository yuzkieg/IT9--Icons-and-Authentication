<?php

include "../database/database.php";

try {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $productName = $_POST['productName']; 
        $quantity = $_POST['quantity'];
        $price = $_POST['price']; 
        $status = 0;

        $stmt = $conn->prepare("INSERT INTO todo (productName, quantity, price) VALUES (?, ?, ?)"); 

        $stmt->bind_param("sii", $productName, $quantity, $price); 

        if ($stmt->execute()) {
            header("Location: ../index.php");
            exit;
        } else {
            echo "Operation failed: " . $stmt->error; 
        }
        $stmt->close();
        $conn->close(); 
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>