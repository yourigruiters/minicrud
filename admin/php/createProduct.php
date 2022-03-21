<?php
    include_once("../includes/connect.php");

    if (isset($_POST['add']))
    {
        $sql = "INSERT INTO products (name, description, price, category) 
            VALUES (:name,:description,:price,:category)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":description", $_POST['description']);
        $stmt->bindParam(":price", $_POST['price']);
        $stmt->bindParam(":category", $_POST['category']);
        $stmt->execute();

        header("Location: ../admin.php");
        exit();
    } else {
        header("Location: ../index.php");
        exit();        
    }
?>