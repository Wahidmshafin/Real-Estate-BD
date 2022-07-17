<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
$del = $_POST['k'];
$type = $_POST['type'];
$pk = $_POST['pk'];
$q = "delete from $type where $pk ='$del'";
$quer = mysqli_query($conn, $q);
