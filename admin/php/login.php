<?php
    include_once("../includes/connect.php");

    if (isset($_POST['submit']))
    {
        $sql = "SELECT name FROM users WHERE name = :name AND password = :password";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":password", $_POST['password']);
        $stmt->execute();
        $result = $stmt->fetch();

        if (isset($result['name']) && $result['name'] === 'admin') {
            session_start();

            $_SESSION["admin"] = true;
    
            header("Location: ../admin.php");
            exit();
        } else {
            header("Location: ../index.php");
            exit();
        }
    } else {
        header("Location: ../index.php");
        exit();
    }
?>