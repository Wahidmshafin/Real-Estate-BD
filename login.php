<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
session_start();
if (isset($_SESSION["loginusername"])) {
    header("Location:firstPage.html");
}
if (isset($_POST["loginusername"])) {
    $username = $_POST["loginusername"];
    $password = $_POST["loginPassword"];
    if ($username === "admin") {
        //echo "<script>alert('Email or password not correct');</script>";
        $find = "select username, password from user where username='$username' and password='$password'";
        $findquery = mysqli_query($conn, $find);
        if (mysqli_num_rows($findquery) > 0) {
            $row = mysqli_fetch_assoc($findquery);

            $_SESSION["username"] = $row['username'];
            $_SESSION["time"] = time();
            header("Location:http://localhost/project/adminPage.php");
        } else {
            echo "<script>alert('Email or password not correct');
        window.location='http://localhost/project/loginPage.html'</script>";
        }
    } else {
        $find = "select username, password from user where username='$username' and password='$password'";
        $findquery = mysqli_query($conn, $find);
        if (mysqli_num_rows($findquery) > 0) {
            $row = mysqli_fetch_assoc($findquery);

            $_SESSION["username"] = $row['username'];
            $_SESSION["time"] = time();
            header("Location:http://localhost/project/firstPageWithLogin.php");
        } else {
            echo "<script>alert('Email or password not correct');
        window.location='http://localhost/project/loginPage.html'</script>";
        }
    }
}
