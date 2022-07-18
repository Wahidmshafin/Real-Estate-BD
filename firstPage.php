<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate BD</title>

    <!-- CSS only -->

    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Font Awsome -->
    <script src="https://kit.fontawesome.com/4a53b0080a.js" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>

    <!-- Header Section -->

    <header id="main-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="title">
                    <a class="navbar-brand" href="firstPageWithLogin.php">Real Estate BD</a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#togglePart" aria-controls="togglePart" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="togglePart">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#starting">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#buy">Buy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#rent">Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="login.php">Sell</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#footer">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost/project/login.php">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Starting Section -->

    <section id="starting">

        <div class="starting-container">

            <img src="image/background.jpg" class="starting-image starting-image-size">
            <div class="starting-heading ml-5 big-padding">
                <h1 class="display-1" style="font-weight:900;">Find Your Perfect Home</h1>
            </div>

            <div class="starting-para">
                <p>Searching for the perfect place to live on?<br>
                    Well, look no further, as RealEstateBD is here for you. With over 1.5 lac+ listings, 2 lacs+ users,
                    150 developers over 4 thousand+ new Projects, our web portal guarantee that everything you wish for
                    the perfect living is just a few clicks away!</p>
            </div>

        </div>
    </section>


    <!-- Buying part -->

    <section id="buy">

        <h1 class="display-1 text-center top-padding pb-4"><strong>Buy</strong></h1>
        <div class="container">

            <div class="row">

            </div>

        </div>
        </div>

    </section>

    <!-- Rent Part -->

    <section id="rent">
        <div class="rent-heading">
            <h1 class="display-1 text-center top-padding pb-4"><strong>Rent</strong></h1>
        </div>
        <div class="container">

            <div class="row">


            </div>
    </section>

    <!-- Submit Property part -->

    <section id="submit-property" class="pad">
        <div class="property-center py-5 mt-5" style="margin-bottom: 200px;">
            <img src="image/beachHouse.jpg" class="starting-image" alt="" style="transform: skewY(4deg);" height="500px" width="100%">
            <div class="text-center pt-5 mt-5">

                <h1 class="fw-100 pb-4">Rent or Sell?</h1>

                <h3 class="display-6">Looking to Rent or Sell Your Property?</h3>
                <h3 class="display-6">Real Estate BD provides an awesome solution!</h3>
            </div>
            <div class="more-btn pt-3">
                <div class="btn btn-primary btn-lg" onclick="location.href='login.php'"> Submit</div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-5 ">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.facebook.com/profile.php?id=100005486505136"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://github.com/Wahidmshafin"><i class="fa-brands fa-github"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/wahid-mahmood-shafin-30a8801b9/"><i class="fa-brands fa-linkedin"></i></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="wahidmshafin@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
                <hr>
            </div>
            <div class="row">
                <div class="col-12 mt-5 text-center text-white">
                    <p><u><a href="firstPageWithLogin.php">Real Estate Bd</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
                    <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
                </div>
                <hr>
            </div>
        </div>
    </section>

    <!-- Contact Us part -->
    <script>
        <?php $q = "select * from property where option='Sell'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
        ?>

            var x = '<div class="col-4"><div class="card shadow-sm m-4"><img src="image/<?php echo $row["picture"]; ?>" height="225" width="100%" alt="Big House"><div class="card-body text-center"><p class="card-text">Property ID:<?php echo $row["property_id"]; ?></p><h4 class="card-title"><?php echo $row["price"]; ?> TK</h4><p class="text-center three"><?php echo $row["type"]; ?> • <?php echo $row["area"]; ?> Sq Ft • <?php echo $row["bedroom"]; ?> rooms</p><p><i class="fa-solid fa-location-crosshairs" style="color: blue;"></i><a class="card-link address" href="#">  <?php echo $row["address"]; ?></a></p><p><a href="#" class="card-link city"><?php echo $row["city"]; ?></a></p></div><form action="http://localhost/project/pDetails.php" method="POST"><button class="btn btn-info w-100" type="submit" name="id" value=<?php echo $row["property_id"]; ?>>Details</button></form></div></div>';
            $("#buy .row").append(x);
        <?php } ?>


        <?php $q = "select * from property where option='Rent'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
        ?>

            var x = '<div class="col-4"><div class="card shadow-sm m-4"><img src="image/<?php echo $row["picture"]; ?>" height="225" width="100%" alt="Big House"><div class="card-body text-center"><p class="card-text">Property ID:<?php echo $row["property_id"]; ?></p><h4 class="card-title"><?php echo $row["price"]; ?> TK</h4><p class="text-center three"><?php echo $row["type"]; ?> • <?php echo $row["area"]; ?> Sq Ft • <?php echo $row["bedroom"]; ?> rooms</p><p><i class="fa-solid fa-location-crosshairs" style="color: blue;"></i><a class="card-link address" href="#">  <?php echo $row["address"]; ?></a></p><p><a href="#" class="card-link city"><?php echo $row["city"]; ?></a></p></div><form action="http://localhost/project/pDetails.php" method="POST"><button class="btn btn-info w-100" type="submit" name="id" value=<?php echo $row["property_id"]; ?>>Details</button></form></div></div>';
            $("#rent .row").append(x);
        <?php } ?>
    </script>

</body>

</html>