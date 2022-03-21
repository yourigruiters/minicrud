<?php
    include_once("../includes/connect.php");

    if (isset($_POST['update']) && isset($_POST['id']))
    {
        $sql = "UPDATE products SET name = :name, description = :description, price = :price, category = :category WHERE id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":description", $_POST['description']);
        $stmt->bindParam(":price", $_POST['price']);
        $stmt->bindParam(":category", $_POST['category']);
        $stmt->bindParam(":id", $_POST['id']);
        $stmt->execute();

        header("Location: ../admin.php");
        exit();
    } else {
        header("Location: ../index.php");
        exit();        
    }
?>

UPDATE `products` SET `name` = 'sdgdf' WHERE `products`.`id` = 18;