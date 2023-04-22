<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book a table</title>
    <link rel="icon" type="image/x-icon" href="logo-color.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="topnav">
        <a class="active" href="BookeaTuMesa.php">Home</a>
        <a href="login.php" >Login</a>
    </nav>

    <!-- Header -->
    <header class="banner-display">
    <!-- Banner de reservacion  -->
    <div class="booking-div">
        <section class="banner"> 
            <h1>Bookea' Tu Mesa</h1>
            <div class="card-container">
                <!-- foto de la tarjeta de reservacion -->
                <div class="card-img"></div>
                <!-- contenido de la tarjeta -->
                <div class="card-content">
                    <h3>Reservation</h3>
                    <form method="POST" action="registrar.php">
                        <div class="form-row">
                            <select name="place"  required>
                                <option value="place-select">Select place</option>
                                <option value="campioni">Campioni Pizza Birra & Tapas</option>
                                <option value="lola">Lola's Restaurant</option>
                                <option value="casadelcheff">La Casa Del Cheff</option>
                                <option value="vistas">Vistas Restaurant & Cocktail Lounge</option>
                                <option value="mesa">Mesa-Cocina y Vinateria</option>
                            </select>
                        </div>
                        <div class="form-row">
                            <input type="date" name="days" min="<?php echo date('Y-m-d'); ?>"required>
                            <select name="hours" required>
                                <option value="hour-select">Select Hour</option>
                                <?php for ($i=1; $i<=9; $i++) { ?>
                                    <option value="<?php echo $i; ?>:00 PM"><?php echo $i; ?>:00 pm</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-row">
                            <input type="text" placeholder="Full Name" name="Fname" required>
                            <input type="email" placeholder="Email Address" name="Email" required>
                        </div>
                        <div class="form-row">
                            <input type="number" placeholder="How Many People?" min="1" name="cantidadP"  required>
                            <input type="submit" name="book" value="BOOK TABLE">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    </header>
       <!-- Rest-Descriptions -->
    <div class="Rest-Main" >
    <h2 class="Rest-tittle">Explore Our Restaurants: Discover a World of Culinary Delights</h2>
    <div class="Rest-row">
      <?php
        $restaurants = array(
          array(
            "name" => "Lola's Rest.",
            "img" => "Media/lolaRest.jpg",
            "description" => "¡Bienvenidos a Lola's Restaurant! Lola proyecta un aire español con decoración moderna transportando tus sentidos culinarios. Un lugar acogedor que integra la buena comida con un ambiente casual y agradable"
          ),
          array(
            "name" => "Campioni Pizza",
            "img" => "Media/campioni.jpg",
            "description" => "¡Bienvenido a Campioni Pizzas! donde cada mordisco es una experiencia en sí misma. Nuestras pizzas se preparan con ingredientes frescos y de la más alta calidad para que puedas disfrutar de la mejor pizza posible."
          ),
          array(
            "name" => "Vistas Rest.",
            "img" => "Media/vistas.jpg",
            "description" => "¡Bienvenidos a Vistas! ¡El restaurante más espectacular de Ponce, Puerto Rico! Disfruta de vistas panorámicas de 360 grados del pueblo mientras disfrutas de nuestras deliciosas especialidades en carnes y cocteles. "
          ),
          array(
            "name" => "Rincon Argentino Rest.",
            "img" => "Media/rinconArgentino.jpg",
            "description" => "¡Bienvenidos a El Rincón Argentino, donde los sabores auténticos de Argentina se encuentran en cada plato! Preparamos nuestros platos clásicos argentinos con los ingredientes más frescos y auténticos, para ofrecerte una experiencia gastronómica única."
          ),
          array(
            "name" => "Vistas Rest.",
            "img" => "Media/vistas.jpg",
            "description" => "¡Bienvenidos a Vistas! ¡El restaurante más espectacular de Ponce, Puerto Rico! Disfruta de vistas panorámicas de 360 grados del pueblo mientras disfrutas de nuestras deliciosas especialidades en carnes y cocteles. "
          ),
          array(
            "name" => "Rincon Argentino Rest.",
            "img" => "Media/rinconArgentino.jpg",
            "description" => "¡Bienvenidos a El Rincón Argentino, donde los sabores auténticos de Argentina se encuentran en cada plato! Preparamos nuestros platos clásicos argentinos con los ingredientes más frescos y auténticos, para ofrecerte una experiencia gastronómica única."
          )
        );

        foreach ($restaurants as $restaurant) {
          echo '<div class="Rest-column">
                  <div class="Rest-content">
                    <img src="' . $restaurant["img"] . '" alt="' . $restaurant["name"] . '" class="Rest-img">
                    <h3>' . $restaurant["name"] . '</h3>
                    <p class="rest-description">' . $restaurant["description"] . '</p>
                  </div>
                </div>';
                }
              ?>
            </div>
            </div>
            <div class="hr-container">
              <hr class="modern-hr">
            </div>
            <div class="about-section">
              <div class="about-description">
                <h2>About Us</h2>
                <p>¡Bienvenido a Bookea' Tu Mesa! Somos la plataforma líder en reservas de mesas en los mejores restaurantes de Puerto Rico. Con solo unos clics, podrás encontrar y reservar una mesa en el restaurante de tu elección, desde la comodidad de tu hogar o donde quiera que te encuentres. Además, ofrecemos una amplia variedad de opciones gastronómicas para satisfacer todos los gustos y presupuestos. Ya sea que estés planeando una cena romántica, una reunión con amigos o una salida en familia, Bookea' Tu Mesa es la manera más fácil y conveniente de reservar tu mesa y disfrutar de una experiencia culinaria única en Puerto Rico. ¡Haz tu reserva ahora y vive una experiencia gastronómica inolvidable!</p>
                <div  class="bookea-logo">
                <img src="Media/bookea-logo.png" alt="Booke Logo">
                </div>
              </div>
              <div class="about-image">
                <img src="Media/about-img.png" alt="About us image">
              </div>
            </div>
            <div class="hr-container">
              <hr class="modern-hr">
            </div>
            <div class="contact-card">
              <img src="Media/eggy.jpg" alt="Eggy" style="width:100%">
              <h1 class="contact-name">Edgar J. Rivera</h1>
              <p class="title">CEO & Founder</p>
              <p class="education">Universidad Interamericana de Puerto Rico</p>
              <p><a href="https://www.linkedin.com/in/edgar-rivera-79b25023b/?originalSubdomain=pr" target="_blank"><button>Contact</button></a></p>
            </div>
        </div>
        </body>
    </html>