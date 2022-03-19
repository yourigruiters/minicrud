<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restaurant</title>
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
    <?php 
      include('includes/header.php');
    ?>
    <section class="landing" id="home">
      <div class="scroll">
        <a href="#about"><span></span></a>
      </div>
    </section>
    <section class="about-spacer" id="about">
      <div class="container">
        <div class="about">
          <div class="heading">
            <h3 class="dancing">About us</h3>
            <div class="divider">
              <hr />
              <i class="fa-solid fa-pepper-hot"></i>
            </div>
          </div>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
              nihil similique qui reprehenderit ipsum, illo quibusdam dolorem
              iure facilis blanditiis maiores soluta rerum veritatis. Quidem ea
              et facilis tenetur unde nesciunt tempore debitis. Illum, ipsa!
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="reservation-spacer" id="reservation">
      <div class="container">
        <div class="reservation">
          <h3>Make a reservation</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi
            perspiciatis facilis quaerat maiores omnis laudantium. Lorem ipsum
            dolor semit.
          </p>
          <form action="">
              <div class="input-container">
                <label>Full name</label>
                <input type="text" placeholder="Juan Pedro" />
              </div>
              <div class="input-container">
                <label>Email adres</label>
                <input type="email" placeholder="juanpedro@info.org" />
              </div>
              <div class="input-container">
                <label>Amount of people</label>
                <input type="number" placeholder="2" />
              </div>
              <div class="input-container">
                <label>Restaurant location</label>
                <select>
                  <option value="">Tangamanga</option>
                  <option value="">Vértiz</option>
                  <option value="">Narvarte</option>
                </select>
              </div>
              <div class="input-container">
                <label>Date and time</label>
                <input type="datetime-local" />
              </div>
              <div class="input-container">
                <label></label>
                <button type="submit">Make reservation</button>
              </div>
          </form>
        </div>
      </div>
    </section>
    <section class="restaurants-spacer" id="restaurants">
      <div class="container">
        <div class="restaurants">
          <div class="heading">
            <h3 class="dancing">Our restaurants</h3>
            <div class="divider">
              <hr />
              <i class="fa-solid fa-wine-bottle"></i>
            </div>
          </div>
          <div class="content">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet
              nihil similique qui reprehenderit ipsum, illo quibusdam dolorem.
            </p>
          </div>
          <div class="locations">
            <div class="location">
              <img src="media/restaurant1.jpg" alt="restaurant" />
              <div class="overlay-spacer">
                <div class="overlay">
                  <h4>Jorge Ferreti 120</h4>
                  <h5>Tangamanga</h5>
                </div>
              </div>
            </div>
            <div class="location">
              <img src="media/restaurant2.jpg" alt="restaurant" />
              <div class="overlay-spacer">
                <div class="overlay">
                  <h4>Xochicalco 589</h4>
                  <h5>Vértiz</h5>
                </div>
              </div>
            </div>
            <div class="location">
              <img src="media/restaurant3.jpg" alt="restaurant" />
              <div class="overlay-spacer">
                <div class="overlay">
                  <h4>Matías Romero 78</h4>
                  <h5>Narvarte</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="menu-spacer" id="menu">
      <?php
        include_once('includes/connect.php');
      ?>
      <div class="menu">
        <div class="image"></div>
        <div class="menu-details">
          <div class="heading">
            <h4 class="dancing">Starters</h4>
            <div class="divider">
              <hr />
              <i class="fa-solid fa-pepper-hot"></i>
            </div>
          </div>
          <div class="content">
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
          </div>
          <div class="heading yellow">
            <h4 class="dancing">Main</h4>
            <div class="divider">
              <hr />
              <i class="fa-solid fa-bowl-food"></i>
            </div>
          </div>
          <div class="content">
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
          </div>
          <div class="heading green">
            <h4 class="dancing">Deserts</h4>
            <div class="divider">
              <hr />
              <i class="fa-solid fa-ice-cream"></i>
            </div>
          </div>
          <div class="content">
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
            <div class="menu-item">
              <div class="details">
                <p class="title">Jalapeno Poppers</p>
                <p class="description">Jalapeno, cheese, rice</p>
              </div>
              <div class="price"><p>€ 10.00</p></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="maps-spacer" id="contact">
      <iframe
        src="https://maps.google.com/maps?q=Jorge%20Ferreti%20120&t=&z=15&ie=UTF8&iwloc=&output=embed"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
      ></iframe>
    </section>
    <?php 
      include('includes/footer.php');
    ?>
    <script src="js/jQuery.js"></script>
    <script async src="js/main.js"></script>
  </body>
</html>
