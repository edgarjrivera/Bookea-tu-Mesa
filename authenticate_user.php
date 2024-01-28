<?php
include('database_connection.php');
$USERNAME =$_POST['Username'] ?? "";
$PASSWORD =$_POST['Password'] ?? "";
session_start();
$_SESSION['Username']=$USERNAME;

// coneccion a base de dato
include("database_connection.php");

// busca en la base de datos si el username y el password son correctos
$query="SELECT * FROM usuarios where Username='$USERNAME' and Password='$PASSWORD'";
$result=mysqli_query($conex,$query);

$rows=mysqli_num_rows($result);

if($rows){

    header("location:ReservationTable.php");
    
}else{
    ?>
    <?php
    include("login.php");
  ?>
  <h1 style="color:white; margin:450px; margin-left:500px;" class="bad">Autentification error</h1>
  <?php
}
mysqli_free_result($result);
mysqli_close($conex);