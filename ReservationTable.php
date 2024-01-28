<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Booking List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/ReservationList-style.css">
</head>
<body>
    <!-- Navigation Bar -->
    <div class="topnav">
        <a class="active" href="index.php">Home</a>
        <a href="login.php">Log In</a>
    </div>

    <div class="container">
        <div class="table-container">
            <!-- Display reservations table -->
            <?php
            include("database_connection.php");

            // Check if delete button was clicked
            if (isset($_POST['delete'])) {
                $id = $_POST['delete'];
                $stmt = $conex->prepare("DELETE FROM reservaciones WHERE id = ?");
                $stmt->bind_param("i", $id);

                if ($stmt->execute()) {
                    echo "<script>alert('Reservation with ID $id deleted successfully.');</script>";
                } else {
                    echo "<p>Error deleting reservation with ID $id: " . $stmt->error . "</p>";
                }

                $stmt->close();
            }

            // Search functionality
            $search_query = isset($_POST['search']) ? $_POST['search'] : '';
            $query = "SELECT * FROM reservaciones WHERE RestaurantName LIKE '%$search_query%' OR FullName LIKE '%$search_query%'";
            $result = $conex->query($query);

            // Display table headers and search form
            echo '<form method="POST" action="">
                    <input type="text" placeholder="Search" name="search" class="search-table">
                    <button type="submit" class="search-button" name="submit" value="search"><img src="Media\searchicon.png" alt="Search" class="logo-img" /></button>
                </form>
                <table> 
                <caption><h2>Reservation List:<h2></caption>
                <tr> 
                <td><b>ID:</b></td> 
                <td class="RestName"><b>Restaurant Name:</b></td> 
                <td class="Date"><b>Date:</b></td> 
                <td class="Hour"><b>Hour:</b></td> 
                <td class="FName"><b>Full Name:</b></td>
                <td class="Email"><b>Email:</b></td> 
                <td class="NumOfPeople"><b>Number of People:</b></td> 
                <td class="Actions"><b>Actions:</b></td>
                </tr>';

            // Loop through result set and display data
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $RestName = $row["RestaurantName"];
                $Date = $row["Date"];
                $Hours = $row["Hours"];
                $Fname = $row["FullName"];
                $Email = $row["Email"];
                $NumOfPeople = $row["NumberOfPeople"];

                // Add delete button for each row
                echo '<tr> 
                        <td>'.$id.'</td> 
                        <td>'.$RestName.'</td> 
                        <td>'.$Date.'</td> 
                        <td>'.$Hours.'</td>
                        <td>'.$Fname.'</td> 
                        <td>'.$Email.'</td> 
                        <td>'.$NumOfPeople.'</td> 
                        <td><form method="POST" action="">
                            <button type="submit" name="delete" value="'.$id.'" class="delete-button">Delete</button>
                        </form></td>
                    </tr>';
            }

            // Free result set and close database connection
            $result->free();
            $conex->close();

            echo '</table>';
            ?>
        </div>
    </div>
</body>
</html>