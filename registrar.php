<?php
// registra la informacion añadida por el usuario
include("reservationdb.php");

if (isset($_POST['book'])) {

if (strlen($_POST['place']) >= 1 && strlen($_POST['days']) >= 1 && strlen($_POST['hours']) >= 1 && strlen($_POST['Fname']) >= 1 && strlen($_POST['Pnumber']) >= 1 && strlen($_POST['cantidadP']) >= 1) {
		$place = ($_POST['place']);
		$days =  ($_POST['days']);
		$hours =  ($_POST['hours']);
		$Fname =  ($_POST['Fname']);
		$Pnumber =  ($_POST['Pnumber']);
		$cantidadP =  ($_POST['cantidadP']);
		$query = "INSERT INTO reservaciones (place,days,hours,nombre,numero,personas) VALUES ('$place','$days','$hours','$Fname','$Pnumber','$cantidadP')";
		$result = mysqli_query($conex,$query);
		if ($result) {
			?>
			<h4 class="ok">Tu reservacion ha sido inscrita correctamente!</h4>
			<?php
		} else {
			?>
			<h4 class="bad"> Ups ha ocurrido un error!</h4>
			<?php 
		}
			} else {
			?>
			<h4 class="bad"> Por favor complete los campos!</h4>
			<?php
		}
	}

?>
