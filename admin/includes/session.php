<?php
    session_start();

    if(!isset($_SESSION['admin']) || !$_SESSION['admin']) {
        header("Location: index.php");
        exit();
    }
?>





