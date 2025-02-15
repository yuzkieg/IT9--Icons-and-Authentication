<?php

include "../database/database.php";  

try {
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $Fname = $_POST['Fname'];
        $Mname = $_POST['Mname'];
        $Lname = $_POST['Lname'];
        $username = $_POST['username'];

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
        $stmt = $conn->prepare("INSERT INTO users (Fname, Mname, Lname, username, password) VALUES (?, ?, ?, ?, ?)");

        $stmt->bind_param("sssss", $Fname, $Mname, $Lname, $username, $password);

        if ($stmt->execute()) {
            header("Location: ../login.php");  
            exit(); 
        } else {
            echo "Registration failed: " . $stmt->error; 
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Invalid request.";
    }
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
        exit();
    }
} catch (Exception $e) {  
    echo "Error: " . $e->getMessage();
}



?>