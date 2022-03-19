<?php
    include_once("../includes/connect.php");

    if (isset($_POST['token']) && $_POST['token'] === 'reservation')
    {
        $status = 1;
        $sql = "INSERT INTO reservations (name, email, amount, location, date, time, status) 
            VALUES (:name,:email,:amount,:location,:date, :time, :status)";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":name", $_POST['name']);
        $stmt->bindParam(":email", $_POST['email']);
        $stmt->bindParam(":amount", $_POST['amount']);
        $stmt->bindParam(":location", $_POST['location']);
        $stmt->bindParam(":date", $_POST['date']);
        $stmt->bindParam(":time", $_POST['time']);
        $stmt->bindParam(":status", $status);
        $stmt->execute();

        echo 'true';
    } 
?>