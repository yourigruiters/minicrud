<?php 
    include_once("includes/connect.php");

    $sql = "SELECT * FROM products ORDER BY category DESC, name DESC";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    foreach ($result as $product) {
        echo '<tr>';
            echo '<td>'. $product['category'] .'</td>';
            echo '<td>'. $product['name'] .'</td>';
            echo '<td>'. $product['description'] .'</td>';
            echo '<td>'. $product['price'] .'</td>';
            echo '<td><a href="updateProduct.php?id='.$product['id'].'">Update</a></td>';
            echo '<td><form action="php/deleteProduct.php" method="post">
            <input type="hidden" name="id" value='.$product['id'].' >
            <input type="submit" value="delete" name="delete" class="delete" >
            </form></td>';
        echo '</tr>'; 
    }
?>