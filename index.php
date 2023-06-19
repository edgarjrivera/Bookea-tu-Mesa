<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Book a table</title>
    <link rel="icon" type="image/x-icon" href="logo-color.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/main.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="topnav">
        <a class="active" href="index.php">Home</a>
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
            "name" => "Rest 1919.",
            "img" => "Media/Rest1919.jpg",
            "description" => "Welcome to 1919, where food isn’t just farm-to-table — it’s ocean-to-table.
             Chef Cuevas’ menu offers sophisticated dishes, from crispy grain salad to braised veal 
             cheeks over apio polenta, passionfruit curd, coconut ganache, and pineapple-cilantro sorbet.
              Visit 1919 for enchanting beachfront dining at the historic Condado Vanderbilt Hotel."
          ),
          array(
            "name" => "Campioni Pizza",
            "img" => "Media/campioni.jpg",
            "description" => "Welcome to Campioni Pizzas! Each bite is an experience. 
            Our pizzas feature fresh, high-quality ingredients for the best taste. 
            Choose from a variety of mouthwatering toppings, including premium cheeses, savory meats, 
            and vibrant vegetables. Whether you prefer classic flavors or adventurous combinations, 
            our pizzas are sure to satisfy your cravings."
          ),
          array(
            "name" => "Casa del Chef.",
            "img" => "Media/CasaCheff.jpg",
            "description" => "Welcome to Casa del Cheff! We specialize in soups, steak, and seafood. 
            Greeted by friendly staff, you'll dine in our cozy area with a warm ambiance. 
            Enjoy the perfect setting for a relaxed meal, featuring soft lighting and tasteful decor.
             Experience a comfortable and enjoyable dining experience at our restaurant."
          ),
          array(
            "name" => "Hard Rock.",
            "img" => "Media/hard-rock.jpg",
            "description" => "Welcome to Hard Rock, where juicy BBQ steak, mouthwatering hamburgers, and soulful live music unite. 
            Our restaurant is a haven for meat lovers and music enthusiasts in the heart of the city. Indulge in the best flavors and 
            unforgettable experiences at Hard Rock today! Treat yourself to an extraordinary dining adventure."
          ),
          array(
            "name" => "Jalapeños.",
            "img" => "Media/Jalapenos.jpg",
            "description" => "Welcome to Jalapeños, a vibrant and lively restaurant that transports you to the heart of Mexico through its
             authentic flavors, warm atmosphere, and friendly staff. Located in the heart of a bustling city, Jalapeños is a culinary 
             haven for food enthusiasts seeking a true taste of Mexico. Experience the richness of Mexican cuisine at Jalapeños today."
          ),
          array(
            "name" => "Lola's Rest.",
            "img" => "Media/lolaRest.jpg",
            "description" => "Welcome to Lola's Restaurant! Lola's ambiance projects a Spanish air with modern decoration, immersing you
             in a delightful culinary experience. Our cozy establishment seamlessly integrates exceptional cuisine with a casual and 
             pleasant atmosphere, creating the perfect setting for an unforgettable dining occasion."
          ),
          array(
            "name" => "Rincón Argentino Rest.",
            "img" => "Media/rinconArgentino.jpg",
            "description" => "Welcome to El Rincón Argentino, where authentic Argentine flavors abound! Our dishes are meticulously
             crafted with fresh, genuine ingredients, delivering a truly unique gastronomic experience. Indulge in the taste of Argentina
              as we showcase our classic recipes prepared with passion and expertise. Join this Argentine experience"
          ),
          array(
            "name" => "Vistas Rest.",
            "img" => "Media/vistas.jpg",
            "description" => "Welcome to Vistas, Ponce's most spectacular restaurant! Indulge in our delicious meat specialties and 
            handcrafted cocktails while taking in breathtaking 360-degree panoramic views of the town. Experience a culinary journey 
            like no other as you savor the flavors, ambiance, and scenery that make Vistas an unforgettable destination "
          ),
          array(
            "name" => "Tazza D' Oro Caffè",
            "img" => "Media/tazza-d-oro.jpg",
            "description" => "Welcome to Tazza D' Oro Caffè, the ultimate brunch and steak destination! Located in the city's heart,
             our chic restaurant delights brunch lovers and steak enthusiasts alike. Indulge in our exquisite dishes, from delectable
              brunch options to succulent steaks and flavorful pasta. Experience culinary excellence and trendy ambiance at Brunch &
               Bites."
          ),
          
        );

        foreach ($restaurants as $restaurant) {
          echo '<div class="Rest-column">
                  <div class="Rest-content">
                    <img src="' . $restaurant["img"] . '" alt="' . $restaurant["name"] . '" class="Rest-img">
                    <h3>' . $restaurant["name"] . '</h3>
                    <p class="rest-description">' . $restaurant["description"] . '</p>
                  </div>
                  <div class="Rest-button">
                  <button class="action-button">View Details</button>
                </div>
                </div>';
                }
              ?>
            </div>
            </div>
            <div class="hr-container">
              <hr class="modern-hr">
            </div>

            <!-- About Section -->
            <div class="about-section">
              <div class="about-description">
                <h2>About Us:</h2>
                <div class="bookea-logo">
                  <img src="Media/bookea-logo.png" alt="Bookea Logo">
                </div>
                <p>Welcome to Bookea'Tu Mesa! We are the leading platform for table reservations
                   in the best restaurants in Puerto Rico. With just a few clicks, 
                   you can find and reserve a table at the restaurant of your choice, 
                   from the comfort of your home or wherever you are. In addition, 
                   we offer a wide variety of dining options to satisfy all tastes and budgets. 
                   Whether you are planning a romantic dinner, a meeting with friends or a family outing,
                    Bookea' Tu Mesa is the easiest and most convenient way to 
                    reserve your table and enjoy a unique culinary experience in Puerto Rico. 
                    Make your reservation now and live an unforgettable gastronomic experience!</p>
              </div>
            </div>
              <!-- <div class="about-image">
                <img src="Media/about-img.png" alt="About us image">
              </div> -->
            </div>
            <div class="hr-container">
              <hr class="modern-hr">
            </div>
            <!-- Contact section -->
          <div class="contact-row">

<div class="column">
          <div class="contact-card">
            <img src="Media/eggy.jpg" alt="Eggy" style="width:100%">
            <h1 class="contact-name">Edgar J. Rivera</h1>
            <p class="title">CEO & Founder</p>
            <p class="education">Universidad Interamericana de Puerto Rico</p>
            <p><a href="https://www.linkedin.com/in/edgar-rivera-79b25023b/?originalSubdomain=pr" target="_blank"><button>Contact</button></a></p>
          </div>
          </div>
          </div> 
          </div>
           <!--COMIENZA FOOTER -->
           <!-- LINK FONT -->
           <div class="hr-container">
              <hr class="modern-hr">
            </div>
          <link rel=" stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
           <footer>
                <footer class="footer">
                  <div class="footer-left">
                    <img src="Media/bookea-logo.png" style="height: 100px;">
                    <div class="footer-links">
                      <a href="#" class="link1">Home</a>
                      <a href="#"> Restaurants</a>
                      <a href="#"> About us</a>
                      <a href="#"> Contact</a>
                    </div>

                    <p class="footer-company">
                      Bookea' Tu Mesa
                    </p>
                  </div>

                  <div class="footer-center">
                      <div class="map-marker">
                        <img src="Media/map_marker.png" style="width: 25px;">
                        <p>Ponce, Puerto Rico</p>
                      </div>  
                      
                      <div class="telephone-icon">
                        <img src="Media/telephone-icon.png" style="width: 25px;">
                        <p>(787) 963-4810</p>
                      </div>

                      <div class="white-mail">
                        <img src="Media/whitemail.jpg" style="width: 20px;">
                        <p>bookeatumesa@gmail.com</a></p>
                      </div>
                  </div>

                  <div class="footer-right">
                    <p class="footer-company-about">
                      <span>About The Company</span>
                      <p>!Welcome to Bookea'Tu Mesa! We are the leading platform for table reservations in the best restaurants in Puerto Rico. 
                      With just a few clicks, you can find and reserve a table at the restaurant of your choice, from the comfort of your home or wherever you are.
                      In addition, we offer a wide variety of dining options to satisfy all tastes and budgets.</p>
                    </p>
                  </div>
           </footer>
            <div>

            </div>
        </div>
        </body>
    </html>