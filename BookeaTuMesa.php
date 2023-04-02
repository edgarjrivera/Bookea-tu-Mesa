<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Book a table</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
         <!-- Navigation Bar -->
     <div class="topnav">
            <a class="active" href="BookeaTuMesa.php">Book</a>
            <a href="login.php">Log In</a>
         </div>
         <!-- Banner de reservacion  -->
        <section class = "banner">
            <h2>Bookea' Tu Mesa</h2>
            <div class = "card-container">
                    <!-- foto de la tarjeta de reservacion -->
                <div class = "card-img">
                </div>
                    <!-- contenido de la tarjeta -->
                <div class = "card-content">
                    <h3>Reservation</h3>
                    <!-- coneccion de html y php -->
                    <form method="POST"> 
                        <div class="form-row">
                            <select name="place">
                                <option value= "place-select">Select place</option>
                                <option value="trasiego">Trasiego Sea Food</option>
                                <option value="triangulo">Triangulo Sea Food</option>
                                <option value="campioni">Campioni Pizza Birra & Tapas</option>
                                <option value="lola">Lola's Restaurant</option>
                                <option value="casadelcheff">La Casa Del Cheff</option>
                                <option value="vistas">Vistas Restaurant & Cocktail Lounge</option>
                                <option value="lacava">La Cava Restaurant</option>
                                <option value="mesa">Mesa-Cocina y Vinateria</option>
                                <option value="dejesus">De Jesus Restaurant</option>
                                <option value="rastro">El Rastro</option>
                            </select>
                        </div>
                        <div class = "form-row">
                            <input type="date" name="days">
                            <select name = "hours">
                                <option value = "hour-select">Select Hour</option>
                                <option value = "12:00pm">12:00 pm</option>
                                <option value = "1:00pm">1:00 pm</option>
                                <option value = "2:00pm">2:00 pm</option>
                                <option value = "3:00pm">3:00 pm</option>
                                <option value = "4:00pm">4:00 pm</option>
                                <option value = "5:00pm">5:00 pm</option>
                                <option value = "6:00pm">6:00 pm</option>
                                <option value = "7:00pm">7:00 pm</option>
                                <option value = "8:00pm">8:00 pm</option>
                                <option value = "9:00pm">9:00 pm</option>
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "text" placeholder="Full Name" name="Fname">
                            <input type="tel" placeholder="Phone Number" name="Pnumber">
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="How Many People? " min = "1" name="cantidadP">
                            <input type = "submit" name="book" value = "BOOK TABLE">
                        </div>
                    </form>
                    <?php

                       include("registrar.php");
                    
                    ?>
                </div>
            </div>
        </section>
        <!-- Lola Restaurant  -->
        <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="lolaRest.jpg" alt="Lola's Rest." style="width:100%">
        <div class="w3-container w3-white">
        <h3>Lola's Rest.</h3>
        <h6 class="w3-opacity">Ponce</h6>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Book a Reservation</button>
      </div>
    </div>
        <!-- Vistas Rest. -->
      <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="vistas.jpg" alt="Vistas Rest." style="width:100%">
        <div class="w3-container w3-white">
        <h3>Vistas Rest.</h3>
        <h6 class="w3-opacity">Ponce</h6>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Book a Reservation</button>
      </div>
      </div>
        <!-- Rincon Argentino Rest. -->
      <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="rinconArgentino.jpg" alt="Rincon Argentino Rest." style="width:100%">
        <div class="w3-container w3-white">
        <h3>Rincon Argentino Rest.</h3>
        <h6 class="w3-opacity">Ponce</h6>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom">Book a Reservation</button>
      </div>
      </div>
    </body>
</html>