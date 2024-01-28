<!-- reservation_form.php -->
<div class="card-container">
    <!-- Contenido del formulario -->
    <div class="card-img"></div>
    <div class="card-content">
        <h3>Reservation</h3>
        <form method="POST" action="insert_reservation.php">
            <!-- Campos del formulario -->
            <div class="form-row">
                <select name="RestaurantName"  required>
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
                <input type="date" name="Date" min="<?php echo date('Y-m-d'); ?>"required>
                <select name="Hours" required>
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
                <input type="number" placeholder="How Many People?" min="1" name="NumOfPeople"  required>
                <input type="submit" name="book" value="BOOK TABLE">
            </div>
        </form>
    </div>
</div>