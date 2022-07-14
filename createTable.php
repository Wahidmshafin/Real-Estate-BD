<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
$drop = "drop table property";
$create = "create table property(
        property_id int not null primary key auto_increment,
        title varchar(30) not null,
        option varchar(10) not null,
        type varchar(10),
        area int,
        price int,
        city varchar(15),
        description varchar(50),
        address varchar(50),
        bathroom int,
        bedroom int,
        garge int,
        username varchar(20),
        picture varchar(30),
        FOREIGN KEY (username) REFERENCES user(username) ON DELETE CASCADE
    )";

$done = mysqli_query($conn, $create);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>