<?php
    include_once("../includes/connect.php");

    if (isset($_POST['token']) && $_POST['token'] === 'reservation')
    {
        $sql = "INSERT INTO reservations (name, email, amount, location, date, time) 
            VALUES (:name,:email,:amount,:location,:date, :time)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":email", $_POST['email']);
        $stmt->bindParam(":amount", $_POST['amount']);
        $stmt->bindParam(":location", $_POST['location']);
        $stmt->bindParam(":date", $_POST['date']);
        $stmt->bindParam(":time", $_POST['time']);
        $stmt->execute();

        echo 'true';
    }
?>