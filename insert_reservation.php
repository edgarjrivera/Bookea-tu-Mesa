<?php
include("database_connection.php");

if (isset($_POST['book'])) {
    // Verificar si se han enviado todos los campos
    if (isset($_POST['RestaurantName'], $_POST['Date'], $_POST['Hours'], $_POST['Fname'], $_POST['Email'], $_POST['NumOfPeople'])) {
        // Obtener y sanitizar los datos del formulario
        $RestName = mysqli_real_escape_string($conex, $_POST['RestaurantName']);
        $Date = mysqli_real_escape_string($conex, $_POST['Date']);
        $Hours = mysqli_real_escape_string($conex, $_POST['Hours']);
        $Fname = mysqli_real_escape_string($conex, $_POST['Fname']);
        $Email = mysqli_real_escape_string($conex, $_POST['Email']);
        $NumOfPeople = mysqli_real_escape_string($conex, $_POST['NumOfPeople']);

        // Validar los datos
        if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('La dirección de correo electrónico no es válida.'); window.location.href='index.php';</script>";
            exit; // Detener la ejecución del script
        }

        // Generar GUID para ReservationId
        $ReservationId = uniqid();

        // Insertar los datos en la base de datos
        $query = "INSERT INTO reservaciones (ReservationId, RestaurantName, Date, Hours, FullName, Email, NumberOfPeople) 
                  VALUES ('$ReservationId', '$RestName', '$Date', '$Hours', '$Fname', '$Email', '$NumOfPeople')";
        $result = mysqli_query($conex, $query);

        if ($result) {
            echo "<script>alert('Tu reservación ha sido inscrita correctamente.'); window.location.href='index.php';</script>";
        } else {
            // Manejar errores de base de datos
            echo "<script>alert('Hubo un error al procesar tu reservación. Por favor, inténtalo de nuevo más tarde.'); window.location.href='index.php';</script>";
        }
    } else {
        // Mostrar mensaje si faltan campos
        echo "<script>alert('Por favor completa todos los campos del formulario.'); window.location.href='index.php';</script>";
    }
}
?>