<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
?>

<?php
session_unset();
session_destroy();
header("location:http://localhost/project/firstPage.php");
?>