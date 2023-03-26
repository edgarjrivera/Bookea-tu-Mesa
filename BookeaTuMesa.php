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
        
    </body>
</html>