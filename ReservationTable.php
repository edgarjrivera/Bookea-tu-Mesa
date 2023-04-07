<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Booking List</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
    <div class="container">
        <!-- Navigation Bar -->
        <div class="topnav">
            <a class="active" href="BookeaTuMesa.php">Book</a>
            <a href="login.php">Log In</a>
        </div>

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

            // Check for connection errors
            if ($mysqli->connect_errno) {
                die("Failed to connect to MySQL: " . $mysqli->connect_error);
            }

            // Check if delete button was clicked
            if (isset($_POST['delete'])) {
                $id = $_POST['delete'];

                // Delete record from database
                $delete_query = "DELETE FROM reservaciones WHERE id = $id";
                if ($mysqli->query($delete_query)) {
                    echo "<script>alert('Reservation with ID $id deleted successfully.');</script>";
                } else {
                    echo "<p>Error deleting reservation with ID $id: " . $mysqli->error . "</p>";
                }
            }

             // Search functionality
            if (isset($_POST['search'])) {
            $search_query = $_POST['search'];

            // Query reservations table
            $query = "SELECT * FROM reservaciones WHERE place LIKE '%$search_query%' OR nombre LIKE '%$search_query%'";
            $result = $mysqli->query($query);
        } else {
            // Query reservations table
            $query = "SELECT * FROM reservaciones";
            $result = $mysqli->query($query);
            }
            // Display table headers and search form
            echo '<form method="POST" action="">
                      <input type="text" placeholder="Search" name="search">
                      <button type="submit" name="submit" value="search" ><img src="searchicon.png" alt="Search" class="logo-img" /></button>
                  </form>
                  <table border="0" cellspacing="2" cellpadding="2"> 
                  <caption><h2>Reservation List:<h2></caption>
                  <tr> 
                      <td> ID:</td> 
                      <td> Place:</td> 
                      <td> Day:</td> 
                      <td> Hour:</td> 
                      <td> Full Name:</td>
                      <td> Phone Number:</td> 
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
                $Pnumber = $row["numero"];
                $cantidadP = $row["personas"]; 

            // Add delete button for each row
            echo '<tr> 
                    <td>'.$id.'</td> 
                    <td>'.$place.'</td> 
                    <td>'.$days.'</td> 
                    <td>'.$hours.'</td>
                    <td>'.$Fname.'</td> 
                    <td>'.$Pnumber.'</td> 
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