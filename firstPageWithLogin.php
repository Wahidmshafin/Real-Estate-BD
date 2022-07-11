<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
session_start();
$username = $_SESSION['username'];
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


</head>

<body>

    <!-- Header Section -->

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
                            <a class="nav-link active" href="SubmitProperty.html">Sell</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="#contact">Contact</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="http://localhost/project/logout.php">Logout</a>
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
                <h1 class="display-1" style="font-weight:900;">Hi <?php echo strtoupper($username) ?>, </h1>
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
        <div class=" container">

            <div class="row">
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house1.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house1.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house1.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house2.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">336 North Shahjahanpur.<br></a>
                                <a href="#" class="card-link">Dhaka, Dhaka</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house2.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house2.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <div class="more-btn">
            <div class="btn btn-primary btn-lg">Find More</div>
        </div>

    </section>

    <!-- Rent Part -->

    <section id="rent">
        <div class="rent-heading">
            <h1 class="display-1 text-center top-padding pb-4"><strong>Rent</strong></h1>
        </div>
        <div class=" container">

            <div class="row">
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house1.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house1.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house1.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house2.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house2.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card shadow-sm m-4">
                        <img src="image/house2.jpg" alt="" width="100%" height="225">
                        <div class="card-body text-center">
                            <p class="card-text">Office Space</p>
                            <h4 class="card-title">$954,000</h4>
                            <p>5,452 Sq Ft.&nbsp; •&nbsp; 3 Spaces</p>
                            <p><a href="#" class="card-link">123 Extra Ct.<br></a>
                                <a href="#" class="card-link">San Francisco, CA 39222</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <div class="more-btn">
            <div class="btn btn-primary btn-lg">Find More</div>
        </div>
    </section>

    <!-- Submit Property part -->

    <section id="submit-property">
        <div class="property-center py-5">
            <h1 class="display-4 text-center" style="font-weight: 700;">Submit Property</h1>
            <div class="more-btn">
                <div class="btn btn-primary btn-lg" onclick="location.href='SubmitProperty.html'"> Submit</div>
            </div>
        </div>
    </section>

    <!-- Contact Us part -->

</body>

</html>