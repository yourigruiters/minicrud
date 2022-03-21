<?php 
    include_once("includes/connect.php");

    $sql = "SELECT * FROM reservations ORDER BY location DESC, date DESC";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $product) {
        echo '<tr>';
            echo '<td>'. $product['date'] .'</td>';
            echo '<td>'. $product['time'] .'</td>';
            echo '<td>'. $product['name'] .'</td>';
            echo '<td>'. $product['email'] .'</td>';
            echo '<td>'. $product['amount'] .'</td>';
            echo '<td>'. $product['location'] .'</td>';
            echo '<td><form action="php/deleteReservation.php" method="post">
            <input type="hidden" name="id" value='.$product['id'].' >
            <input type="submit" value="delete" name="delete" class="delete" >
            </form></td>';
        echo '</tr>'; 
    }
?>