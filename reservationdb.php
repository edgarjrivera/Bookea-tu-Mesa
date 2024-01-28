<?php
$conex = mysqli_connect("localhost", "root", "", "reservacion");

// Verificar la conexión
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>