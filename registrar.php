<?php
include("reservationdb.php");

if (isset($_POST['book'])) {
    if (isset($_POST['place'], $_POST['days'], $_POST['hours'], $_POST['Fname'], $_POST['Email'], $_POST['cantidadP'])) {
        $place = $_POST['place'];
        $days = $_POST['days'];
        $hours = $_POST['hours'];
        $Fname = $_POST['Fname'];
        $Email = $_POST['Email'];
        $cantidadP = $_POST['cantidadP'];

        $query = "INSERT INTO reservaciones (place, days, hours, nombre, Email, personas) VALUES ('$place', '$days', '$hours', '$Fname', '$Email', '$cantidadP')";
        $result = mysqli_query($conex, $query);

        if ($result) {
            echo "<script>alert('Tu reservacion ha sido inscrita correctamente!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Ups ha ocurrido un error!'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>alert('Por favor complete los campos!'); window.location.href='index.php';</script>";
    }
}
?>