<?php 
    include_once('includes/session.php');
    include_once('includes/connect.php');

    if (isset($_GET['id']))
    {
        $sql = "SELECT id, name, description, price, category FROM products WHERE id = :id";
        $stmt = $connect->prepare($sql);
        $stmt->bindParam(":id", $_GET['id']);
        $stmt->execute();
        $result = $stmt->fetch();

        $id = $result['id'];
        $name = $result['name'];
        $description = $result['description'];
        $price = $result['price'];
        $category = $result['category'];
    } else {
        header("Location: index.php");
        exit();
    }    
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
                <form action="php/updateProduct.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" required/>
                    <div class="input">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>" required/>
                    </div>
                    <div class="input">
                        <label>Description</label>
                        <textarea name="description" required><?php echo $description; ?></textarea>
                    </div>
                    <div class="input">
                        <label>Price</label>
                        <input type="text" name="price" value="<?php echo $price; ?>" required/>
                    </div>
                    <div class="input">
                        <label>Category</label>
                        <select name="category" required>
                        <option disabled>Select an option...</option>
                            <option value="starter" <?php if($category === 'starter'){echo 'selected';}?>>Starter</option>
                            <option value="main" <?php if($category === 'main'){echo 'selected';}?>>Main</option>
                            <option value="desert" <?php if($category === 'desert'){echo 'selected';}?>>Desert</option>
                        </select>
                    </div>
                    <button type="submit" name="update">Update</button>
                </form>
            </div>
        </div>
    </section>
  </body>
</html>
