<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
$arr = json_decode($_POST['arr']);
$q = "insert into user(username,email,password) values('$arr[0]','$arr[1]','abcd');";
$quer = mysqli_query($conn, $q);
