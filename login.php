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
            setcookie("username", $row['username'], time() + 86400);
            setcookie("password", $row['password'], time() + 86400);
            header("Location:http://localhost/project/firstPageWithLogin.php");
        } else {
            echo "<script>alert('Email or password not correct');
        window.location='http://localhost/project/loginPage.html'</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- CSS only -->

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="vh-100">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 text-black pt-5">

                    <div class="px-5 ms-xl-4">
                        <span class="h1 fw-bold">Real Estate BD</span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-5 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 23rem;" action="http://localhost/project/login.php" method="post">

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

                            <div class="form-outline mb-4">
                                <input type="text" name="loginusername" class="form-control form-control-lg" value=<?php echo $_COOKIE['username']; ?> />
                                <label class="form-label" for="loginusername">Username</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" name="loginPassword" class="form-control form-control-lg" value=<?php echo $_COOKIE['password']; ?> />
                                <label class="form-label" for="loginPassword">Password</label>
                            </div>

                            <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
                            </div>

                            <p>Don't have an account? <a href="http://localhost/project/signupPage.html" class="link-info">Register here</a></p>

                        </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="image/house1.jpg" alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
            </div>
        </div>
    </section>
</body>

</html