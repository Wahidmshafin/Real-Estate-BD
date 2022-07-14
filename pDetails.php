<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
$id = $_POST["id"];
$q = "select * from property where property_id=$id";
$query = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($query);

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

    <link href="https://fonts.googleapis.com/css?family=Roboto:500" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header id="main-header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="title">
                    <a class="navbar-brand" href="#">Real Estate BD</a>
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
                            <a class="nav-link active" href="loginPage.html">Sell</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#contact">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost/project/loginPage.html">Login</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <img src="image/<?php echo $row["picture"]; ?>" alt="" width="100%" height="500px">
    <div class="container pt-5 pb-5 mb-5">

        <div class="text-center pb-5 mb-5">
            <h1>Property Name: <strong><?php echo strtoupper($row["title"]); ?></strong></h5>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="row justify-content-between">
                    <div class="col-md-5 col-lg-4">
                        <div class="property-price d-flex justify-content-center pb-5">
                            <div class="card-title-c align-self-center">
                                <h5 class="title-c">Price: <?php echo $row["price"]; ?>TK</h5>
                            </div>
                        </div>
                        <div class="property-summary">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d section-t4">
                                        <h2 class="title-d">Quick Summary</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="summary-list">
                                <ul class="list">
                                    <li class="d-flex justify-content-between"> <strong>Property Type:</strong> <span><?php echo $row["type"]; ?></span></li>
                                    <li class="d-flex justify-content-between"> <strong>Status:</strong> <span><?php echo $row["option"]; ?></span></li>
                                    <li class="d-flex justify-content-between"> <strong>Area:</strong> <span><?php echo $row["area"]; ?> Sq Ft</span></li>
                                    <li class="d-flex justify-content-between"> <strong>Rooms:</strong> <span><?php echo $row["bedroom"]; ?></span></li>
                                    <li class="d-flex justify-content-between"> <strong>Baths:</strong> <span><?php echo $row["bathroom"]; ?></span></li>
                                    <li class="d-flex justify-content-between"> <strong>Garage:</strong> <span><?php echo $row["garge"]; ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 section-md-t3">
                        <div class="row pb-5">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h2 class="title-d">Property ID: <?php echo $row["property_id"]; ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h2 class="title-d">Property Description</h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-description pb-5">
                            <p class="description fs-5"> <?php echo $row["description"]; ?> </p>
                        </div>
                        <div class="row section-t3">
                            <div class="col-sm-12">
                                <div class="title-box-d">
                                    <h2 class="title-d">Location</h3>
                                </div>
                            </div>
                        </div>
                        <div class="color-text-a">
                            <h4><?php echo $row["address"] . ", " . $row["city"]; ?></h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>