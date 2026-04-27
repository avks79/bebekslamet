<?php
session_start();
include "config.php";

$email = $_POST['email'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);

    $_SESSION['username'] = $data['username'];
    $_SESSION['email'] = $data['email'];

    header("Location: index.html"); // ke halaman utama
} else {
    echo "Login gagal!";
}
?>