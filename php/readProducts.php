<?php
    include_once("includes/connect.php");

    $sql = "SELECT * FROM products ORDER BY category DESC";
    $stmt = $connect->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll();

    $starters = [];
    $main = [];
    $deserts = [];

    foreach ($result as $product) {
        switch ($product['category']) {
            case 'starters':
                array_push($starters, $product);
                break;
            case 'main':
                array_push($main, $product);
                break;
            case 'deserts':
                array_push($deserts, $product);
                break;
            default:
                break;
        }
    }
?>
<div class="heading">
    <h4 class="dancing">Starters</h4>
    <div class="divider">
        <hr />
        <i class="fa-solid fa-pepper-hot"></i>
    </div>
</div>
<div class="content">
    <?php 
        foreach ($starters as $product) {
            echo '<div class="menu-item">';
            echo '<div class="details">';
            echo '<p class="title">'. $product['name'] .'</p>';
            echo '<p class="description">'. $product['description'] .'</p>';
            echo '</div>';
            echo '<div class="price"><p>'. $product['price'] .'</p></div>';
            echo '</div>';
        }
    ?>
</div>
<div class="heading yellow">
    <h4 class="dancing">Main</h4>
    <div class="divider">
        <hr />
        <i class="fa-solid fa-bowl-food"></i>
    </div>
</div>
<div class="content">
    <?php 
        foreach ($main as $product) {
            echo '<div class="menu-item">';
            echo '<div class="details">';
            echo '<p class="title">'. $product['name'] .'</p>';
            echo '<p class="description">'. $product['description'] .'</p>';
            echo '</div>';
            echo '<div class="price"><p>'. $product['price'] .'</p></div>';
            echo '</div>';
        }
    ?>
</div>
<div class="heading green">
    <h4 class="dancing">Deserts</h4>
    <div class="divider">
        <hr />
        <i class="fa-solid fa-ice-cream"></i>
    </div>
</div>
<div class="content">
    <?php 
        foreach ($deserts as $product) {
            echo '<div class="menu-item">';
            echo '<div class="details">';
            echo '<p class="title">'. $product['name'] .'</p>';
            echo '<p class="description">'. $product['description'] .'</p>';
            echo '</div>';
            echo '<div class="price"><p>'. $product['price'] .'</p></div>';
            echo '</div>';
        }
    ?>
</div>