<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase")
?>

<?php
if (isset($_POST["signupUsername"])) {
    $username = $_POST["signupUsername"];
    $email = $_POST["signupEmail"];
    $password = $_POST["signupPassword"];
    $cpassword = $_POST["signupConfirm"];
    if ($password === $cpassword) {
        $find = "select username from user";
        $findquery = mysqli_query($conn, $find);
        if (mysqli_num_rows($findquery) > 0) {
            echo "<script>alert('Username lready Exist')</script>";
        } else {
            $insert = "insert into user(username,email,password) values('$username', '$email', '$password')";
            if (mysqli_query($conn, $insert)) {
                echo "<script>alert('Registration Completed Successfully')</script>";
            }
        }
    } else {
        echo "<script>alert('Password Not matched')</script>";
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
                        <span class="h1 fw-bold mb-0">Real Estate BD</span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-5 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                        <form style="width: 23rem;" action="" method="post">

                            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign Up</h3>

                            <div class="form-outline mb-3">
                                <input type="text" name="signupUsername" class="form-control form-control-lg" />
                                <label class="form-label" for="signupUsername">Username</label>
                            </div>
                            <div class="form-outline mb-3">
                                <input type="email" name="signupEmail" class="form-control form-control-lg" />
                                <label class="form-label" for="signupEmail">Email</label>
                            </div>
                            <div class="form-outline mb-3">
                                <input type="password" name="signupPassword" class="form-control form-control-lg" />
                                <label class="form-label" for="signupPassword">Password</label>
                            </div>

                            <div class="form-outline mb-3">
                                <input type="password" name="signupConfirm" class="form-control form-control-lg" />
                                <label class="form-label" for="signupConfirm">Confirm Password</label>
                            </div>
                            <div class="pt-2 mb-3">
                                <button class="btn btn-info btn-lg btn-block" type="submit">Sign Up</button>
                            </div>

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
</body>

</html>