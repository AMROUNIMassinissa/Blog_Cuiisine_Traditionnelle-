<?php
require_once 'bdd.php';

$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM tanawilt WHERE email='$email'";
$result = mysqli_query($mysqli, $query) or die(mysqli_connect_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if ($num_row >= 1) {
    $psw = $row['password'];
    if (password_verify($password, $psw)) {

        $_SESSION['login'] = $row['id'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        echo 'true';
    } else {
        echo 'false';
    }
} else {

    echo 'false';
}
