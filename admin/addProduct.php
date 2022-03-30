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
    <section class="form-spacer">
        <div class="container">
            <div class="form">
                <form action="php/createProduct.php" method="post">
                    <div class="input">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name..." required/>
                    </div>
                    <div class="input">
                        <label>Description</label>
                        <textarea name="description" required></textarea>
                    </div>
                    <div class="input">
                        <label>Price</label>
                        <input type="text" name="price" placeholder="Price..." required/>
                    </div>
                    <div class="input">
                        <label>Category</label>
                        <select name="category" required>
                          <option option disabled>Select an option...</option>
                            <option value="starter">Starter</option>
                            <option value="main">Main</option>
                            <option value="desert">Desert</option>
                        </select>
                    </div>
                    <button type="submit" name="add" class="green2">Add</button>
                </form>
            </div>
        </div>
    </section>
  </body>
</html>
