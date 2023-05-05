<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book a table</title>
    <link rel="icon" type="image/x-icon" href="logo-color.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                                <option value="Rest1919">Rest 1919</option>
                                <option value="Campioni Pizza">Campioni Pizza Birra & Tapas</option>
                                <option value="Casa del Chef">La Casa Del Cheff</option>
                                <option value="Hard Rock">Hard Rock Cafe</option>
                                <option value="Jalapeños">Jalapeños</option>
                               <option value="Lola">Lola's Restaurant</option>
                                <option value="Rincon Argentino">Rincón Argentino</option>
                                <option value="Vistas">Vistas Restaurant & Cocktail Lounge</option>
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
            "name" => "1919.",
            "img" => "Media/Rest1919.jpg",
            "description" => "¡Welcome to 1919, the food at this upscale restaurant isn’t just farm-to-table — it’s ocean-to-table. Executive Chef Juan José Cuevas’ menu is full of sophisticated dishes, from crispy grain salad to braised veal cheeks over an apio polenta, passionfruit curd, coconut ganache, and pineapple-cilantro sorbet. If the food weren’t reason enough to visit 1919, the beachfront location inside the historic Condado Vanderbilt Hotel is enchanting."
          ),
          array(
            "name" => "Campioni Pizza",
            "img" => "Media/campioni.jpg",
            "description" => "!Welcome to Campioni Pizzas! where each bite is an experience in itself. Our pizzas are prepared with fresh ingredients of the highest quality so that you can enjoy the best pizza possible."
          ),
          array(
            "name" => "Casa del Chef.",
            "img" => "Media/CasaCheff.jpg",
            "description" => "¡Welcome to our restaurant, where we specialize in soups, steak, and seafood! Upon entering, you'll be greeted by our friendly staff and seated in our cozy and comfortable dining area. Our restaurant features a warm and inviting ambiance, with soft lighting and tasteful decor that creates the perfect setting for a relaxed and enjoyable meal"
          ),
          array(
            "name" => "Hard Rock.",
            "img" => "Media/210126HardRockCafePonce3-1024x576.jpg/",
            "description" => "!Welcome to Hard Rock, a dining experience that brings together the best of deliciously juicy BBQ steak, mouthwatering hamburgers, and soulful live music. Nestled in the heart of the city, our restaurant is a haven for meat lovers and music enthusiasts alike."
          ),
          array(
            "name" => "Jalapeños.",
            "img" => "Media/Jalapenos.jpg",
            "description" => "¡Welcome to Jalapeños, a vibrant and lively restaurant that transports you to the heart of Mexico through its authentic flavors and warm atmosphere. Located in the heart of a bustling city, Jalapeños is a culinary haven for food enthusiasts seeking a true taste of Mexico."
          ),
          array(
            "name" => "Lola's Rest.",
            "img" => "Media/lolaRest.jpg",
            "description" => "!Welcome to Lola's Restaurant! Lola projects a Spanish air with modern decoration transporting your culinary senses. A cozy place that integrates good food with a casual and pleasant atmosphere."
          ),
          array(
            "name" => "Rincón Argentino Rest.",
            "img" => "Media/rinconArgentino.jpg",
            "description" => "!Welcome to El Rincón Argentino, where the authentic flavors of Argentina are found in every dish! We prepare our classic Argentine dishes with the freshest and most authentic ingredients, to offer you a unique gastronomic experience."
          ),
          array(
            "name" => "Vistas Rest.",
            "img" => "Media/vistas.jpg",
            "description" => "Welcome to Vistas! The most spectacular restaurant in Ponce, Puerto Rico! Enjoy 360 degree panoramic views of the town while enjoying our delicious meat specialties and cocktails. "
          ),
          array(
            "name" => "Tazza D' Oro Caffè",
            "img" => "Media/tazza de oro cafe.jpg",
            "description" => "Welcome to Tazza D' Oro Caffè, the ultimate dining destination for brunch lovers and steak enthusiasts! Located in the heart of the city, Brunch & Bites is a chic and trendy restaurant that specializes in serving exquisite brunch, steak, and pasta dishes. "
          ),
          
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
                <p>!Welcome to Bookea'Tu Mesa! We are the leading platform for table reservations in the best restaurants in Puerto Rico. With just a few clicks, you can find and reserve a table at the restaurant of your choice, from the comfort of your home or wherever you are. In addition, we offer a wide variety of dining options to satisfy all tastes and budgets. Whether you are planning a romantic dinner, a meeting with friends or a family outing, Bookea' Tu Mesa is the easiest and most convenient way to reserve your table and enjoy a unique culinary experience in Puerto Rico. Make your reservation now and live an unforgettable gastronomic experience!</p>
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
            <!-- Contact section -->
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