<!-- restaurants.php -->
<div class="Rest-Main">
    <h2 class="Rest-tittle">Explore Our Restaurants: Discover a World of Culinary Delights</h2>
    <div class="Rest-row">
        <?php include 'restaurants_list.php'; ?>
        <?php foreach ($restaurants as $restaurant): ?>
            <!-- Contenido de cada restaurante -->
            <div class="Rest-column">
                <div class="Rest-content">
                    <img src="<?php echo $restaurant["img"]; ?>" alt="<?php echo $restaurant["name"]; ?>" class="Rest-img">
                    <h3><?php echo $restaurant["name"]; ?></h3>
                    <p class="rest-description"><?php echo $restaurant["description"]; ?></p>
                </div>
                <div class="Rest-button">
                    <button class="action-button">View Details</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>