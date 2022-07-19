<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
?>

<?php
if (isset($_POST["signupUsername"])) {
    $username = $_POST["signupUsername"];
    $email = $_POST["signupEmail"];
    $password = $_POST["signupPassword"];
    $cpassword = $_POST["signupConfirm"];
    if ($password === $cpassword) {
        $find = "select username from user where username='$username'";
        $findquery = mysqli_query($conn, $find);
        if (mysqli_num_rows($findquery) > 0) {
            echo "<script>alert('Username Already Exist');
            window.location='http://localhost/project/signupPage.html'</script>";
        } else {
            $insert = "insert into user(username,email,password) values('$username', '$email', '$password')";
            if (mysqli_query($conn, $insert)) {
                echo "<script>alert('Registration Completed Successfully');
                window.location='http://localhost/project/login.php'</script>";
            }
        }
    } else {
        echo "<script>alert('Password Not matched');
        window.location='http://localhost/project/signupPage.html</script>";
    }
}
?>

