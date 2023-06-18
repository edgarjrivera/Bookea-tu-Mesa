<?php
// registra la informacion añadida por el usuario
include("reservationdb.php");

if (isset($_POST['book'])) {

if (strlen($_POST['place']) >= 1 && strlen($_POST['days']) >= 1 && strlen($_POST['hours']) >= 1 && strlen($_POST['Fname']) >= 1 && strlen($_POST['Email']) >= 1 && strlen($_POST['cantidadP']) >= 1) {
        $place = ($_POST['place']);
        $days =  ($_POST['days']);
        $hours =  ($_POST['hours']);
        $Fname =  ($_POST['Fname']);
        $Email =  ($_POST['Email']);
        $cantidadP =  ($_POST['cantidadP']);
        $query = "INSERT INTO reservaciones (place,days,hours,nombre,Email,personas) VALUES ('$place','$days','$hours','$Fname','$Email','$cantidadP')";
        $result = mysqli_query($conex,$query);
        if ($result) {
            ?>
            <script>
                alert('Tu reservacion ha sido inscrita correctamente!');
                window.location.href='index.php';
            </script>
            <?php
        } else {
            ?>
            <script>
                alert('Ups ha ocurrido un error!');
                window.location.href='index.php';
            </script>
            <?php 
        }
    } else {
        ?>
        <script>
            alert('Por favor complete los campos!');
            window.location.href='index.php';
        </script>
        <?php
    }
    }


// 	WORK IN PROGRESS 
// Send email confirmation
// $to = $Email;
// $subject = "Reservation Confirmation";
// $message = "Thank you for your reservation! We have received your request and will get back to you shortly.";
// $headers = "From: noreply@example.com";

// if(mail($to, $subject, $message, $headers)) {
//     echo "Email sent successfully!";
// } else {
//     echo "Email could not be sent.";
// }
?>
