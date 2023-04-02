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
     <!-- Navigation Bar -->
     <div class="topnav">
            <a class="active" href="BookeaTuMesa.php">Book</a>
            <a href="login.php">Log In</a>
         </div>
<table>
    <!-- tabla de reservaciones  -->
    <?php 
$username = "username"; 
$password = "password"; 
$database = "reservacion"; 
$mysqli = new mysqli("localhost","root","","reservacion"); 
$query = "SELECT * FROM reservaciones";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <caption><h2>Reservation List:<h2></caption>
      <tr> 
          <td> ID:</font> </td> 
          <td> Place:</td> 
          <td> Day:</td> 
          <td> Hour:</td> 
          <td> Full Name:</td>
          <td> Phone Number:</td> 
          <td> People: </td> 
          
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
			$place = $row["place"];
			$days = $row["days"];
			$hours = $row["hours"];
			$Fname = $row["nombre"];
			$Pnumber = $row["numero"];
			$cantidadP = $row["personas"]; 

        echo '<tr> 
                  <td>'.$id.'</td> 
                  <td>'.$place.'</td> 
                  <td>'.$days.'</td> 
                  <td>'.$hours.'</td>
                  <td>'.$Fname.'</td> 
                  <td>'.$Pnumber.'</td> 
                  <td>'.$cantidadP.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
</table>
</body>
</html>