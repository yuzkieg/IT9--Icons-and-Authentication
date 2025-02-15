<?php

  include "../database/database.php";

  try
  {

    if($_SERVER['REQUEST_METHOD']=="POST"){

      $productName = $_POST['productName'];
      $quantity = $_POST['quantity'];
      $price= $_POST['price'];
      $id = $_POST['id'];

      $stmt = $conn->prepare("UPDATE todo SET productName = ?, quantity = ? , price = ? WHERE id = ?"); 
      
      $stmt->bind_param("siii",$productName, $quantity, $price, $id);

      if($stmt->execute())
      {
        header("Location: ../index.php");
        exit;
      }
      else
      {
        echo "operation failed";
      }
    }

  }
  catch(\Exception $e)
  {
    echo "Error: ".$e;
  }





?>
