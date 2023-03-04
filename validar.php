<?php
include('reservationdb.php');
$USERNAME =$_POST['username'] ?? "";
$PASSWORD =$_POST['password'] ?? "";
session_start();
$_SESSION['username']=$USERNAME;


$conex=mysqli_connect("localhost","root","","reservacion");

$consulta="SELECT * FROM usuarios where username='$USERNAME' and password='$PASSWORD'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:BookingList.php");

}else{
    ?>
    <?php
    include("login.php");

  ?>
  <h1 style="color:white; margin:450px; margin-left:500px;" class="bad">Autentification error</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);