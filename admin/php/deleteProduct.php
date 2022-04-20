<?php
    include_once("../includes/connect.php");

    if (isset($_POST['delete']) && isset($_POST['id']))
    {
        $sql = "DELETE FROM products WHERE id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_POST['id']);
        $stmt->execute();

        header("Location: ../admin.php");
        exit();
    } else {
        header("Location: ../index.php");
        exit();
    }
?>