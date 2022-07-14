<?php
session_start();
$username = $_SESSION["username"];
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
if (isset($_POST["psubmit"])) {
    $title = $_POST["ptitle"];
    $option = $_POST["poption"];
    $type = $_POST["ptype"];
    $area = $_POST["area"];
    $price = $_POST["price"];
    $city = $_POST["city"];
    $description = $_POST["description"];
    $address = $_POST["address"];
    $bathroom = $_POST["bathroom"];
    $bedroom = $_POST["bedroom"];
    $garge = $_POST["garge"];
    $url = $_FILES['image']['name'];

    $insert = "insert into property(title, option, area, type, price, city, description, address, bathroom, bedroom, garge, username, picture) VALUES('$title','$option','$area','$type','$price','$city','$description','$address','$bathroom','$bedroom','$garge','$username', '$url')";

    if (mysqli_query($conn, $insert)) {
        echo "<script>alert('Property Submitted Successfully');
                window.location='http://localhost/project/firstPageWithLogin.php'</script>";
    } else {
        echo "didn't work";
    }
}
