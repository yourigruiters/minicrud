<?php 
    include_once('includes/session.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant | Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Merriweather:wght@400;700&family=Open+Sans:wght@300;400;700&family=Raleway:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <script
      src="https://kit.fontawesome.com/fb463606a0.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <section class="admin-spacer">
        <div class="container">
            <p>Welcome Admin, <a href="php/logout.php">logout</a>.</p>
        </div>
    </section>
    <section class="reservation-spacer">
        <div class="container">
            <div class="title">
                <h1>Reservations</h1>
            </div>
            <div class="reservation">
                <table>
                    <tr>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Amount</th>
                        <th>Location</th>
                        <th>Delete</th>
                    </tr>
                    <?php 
                        include_once('php/readReservations.php');
                    ?>
                </table>
            </div>
        </div>
    </section>
    <section class="reservation-spacer">
        <div class="container">
            <div class="title">
                <h1>Products</h1>
                <a href="addProduct.php"><button class="green">Add product</button></a>
            </div>
            <div class="reservation">
                <table>
                    <tr>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <?php 
                        include_once('php/readProducts.php');
                    ?>
                </table>
            </div>
        </div>
    </section>
  </body>
</html>
