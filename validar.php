<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('reservationdb.php');

    $USERNAME = $_POST['username'] ?? "";
    $PASSWORD = $_POST['password'] ?? "";

    $query = "SELECT * FROM usuarios WHERE username=? AND password=?";
    $stmt = $conex->prepare($query);
    $stmt->bind_param("ss", $USERNAME, $PASSWORD);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $USERNAME;
        header("location: ReservationTable.php");
        exit();
    } else {
        echo "<h1 style='color:white; margin:450px; margin-left:500px;' class='bad'>Authentication error</h1>";
        include("login.php");
    }

    $result->close();
    $conex->close();
}
?>