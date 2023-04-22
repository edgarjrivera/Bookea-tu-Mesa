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
            <a class="active" href="BookeaTuMesa.php">Home</a>
            <a href="login.php" >Log In</a>
         </div>

    <div class="container">
        <div class="table-container">
        <!-- Display reservations table -->
        <table class="All-Reservation">
            <?php 
            // Database credentials
            $username = "username"; 
            $password = "password"; 
            $database = "reservacion"; 

            // Connect to database
            $mysqli = new mysqli("localhost","root","","reservacion"); 

            // Check if delete button was clicked
            if (isset($_POST['delete'])) {
                $id = $_POST['delete'];

                // Prepare delete statement
                $stmt = $mysqli->prepare("DELETE FROM reservaciones WHERE id = ?");
                $stmt->bind_param("i", $id);

                // Execute delete statement
                if ($stmt->execute()) {
                    echo "<script>alert('Reservation with ID $id deleted successfully.');</script>";
                } else {
                    echo "<p>Error deleting reservation with ID $id: " . $stmt->error . "</p>";
                }

                $stmt->close();
            }

            // Search functionality
            $search_query = isset($_POST['search']) ? $_POST['search'] : '';
            $query = "SELECT * FROM reservaciones WHERE place LIKE '%$search_query%' OR nombre LIKE '%$search_query%'";
            $result = $mysqli->query($query);

            // Display table headers and search form
            echo '<form method="POST" action="">
                    <input type="text" placeholder="Search" name="search" class="search-table">
                    <button type="submit" name="submit" value="search"><img src="Media\searchicon.png" alt="Search" class="logo-img" /></button>
                </form>
                <table border="0" cellspacing="2" cellpadding="2"> 
                <caption><h2>Reservation List:<h2></caption>
                <tr> 
                    <td> ID:</td> 
                    <td> Place:</td> 
                    <td> Day:</td> 
                    <td> Hour:</td> 
                    <td> Full Name:</td>
                    <td> Email:</td> 
                    <td> People: </td> 
                    <td> Actions: </td>
                </tr>';

            // Loop through result set and display data
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $place = $row["place"];
                $days = $row["days"];
                $hours = $row["hours"];
                $Fname = $row["nombre"];
                $Email = $row["Email"];
                $cantidadP = $row["personas"];

                // Add delete button for each row
                echo '<tr> 
                        <td>'.$id.'</td> 
                        <td>'.$place.'</td> 
                        <td>'.$days.'</td> 
                        <td>'.$hours.'</td>
                        <td>'.$Fname.'</td> 
                        <td>'.$Email.'</td> 
                        <td>'.$cantidadP.'</td> 
                        <td><form method="POST" action="">
                            <button type="submit" name="delete" value="'.$id.'">Delete</button>
                        </form></td>
                    </tr>';
            }

            // Free result set and close database connection
            $result->free();
            $mysqli->close();

            echo '</table>';
            ?>
        </table>
        </div>
    </div>
</body>
</html>