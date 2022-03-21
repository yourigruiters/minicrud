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
                <form action="php/login.php" method="post">
                    <div class="input">
                        <label>Username</label>
                        <input type="text" name="name" placeholder="Username..." />
                    </div>
                    <div class="input">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password..." />
                    </div>
                    <button type="submit" name="submit">Login</button>
                </form>
            </div>
        </div>
    </section>
  </body>
</html>
