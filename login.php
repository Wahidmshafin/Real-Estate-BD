<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
session_start();
if (isset($_SESSION["loginusername"])) {
    header("Location:firstPage.html");
}

$username = $_POST["loginusername"];
$password = $_POST["loginPassword"];

$find = "select username, password from user where username='$username' and password='$password'";
$findquery = mysqli_query($conn, $find);
if (mysqli_num_rows($findquery) > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['time'] = time();
    header("Location:firstPage.html");
} else {
    echo "<script>alert('Email or password not correct')</script>";
}
