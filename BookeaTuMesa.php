<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book a table</title>
    <link rel="icon" type="image/x-icon" href="logo-color.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="topnav">
        <a class="active" href="BookeaTuMesa.php">Home</a>
        <a href="login.php">Login</a>
    </nav>

    <!-- Banner de reservacion  -->
    <div class="booking-div">
        <section class="banner"> 
            <h2>Bookea' Tu Mesa</h2>
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
       <!-- Rest-Descriptions -->
<div class="Rest-Main">

<!-- Portfolio Gallery Grid -->
<div class="Rest-row">
  
  <?php
    $restaurants = array(
      array(
        "name" => "Lola's Rest.",
        "img" => "lolaRest.jpg",
        "description" => "Lorem ipsum.."
      ),
      array(
        "name" => "Campioni Pizza",
        "img" => "campioni.jpg",
        "description" => "Lorem ipsum.."
      ),
      array(
        "name" => "Vistas Rest.",
        "img" => "vistas.jpg",
        "description" => "Lorem ipsum.."
      ),
      array(
        "name" => "Rincon Argentino Rest.",
        "img" => "rinconArgentino.jpg",
        "description" => "Lorem ipsum.."
      )
    );

    foreach ($restaurants as $restaurant) {
      echo '<div class="Rest-column">
              <div class="Rest-content">
                <img src="' . $restaurant["img"] . '" alt="' . $restaurant["name"] . '" class="Rest-img">
                <h3>' . $restaurant["name"] . '</h3>
                <p>' . $restaurant["description"] . '</p>
              </div>
            </div>';
    }
  ?>

</div>
</div>

    </div>
    </body>
</html>