<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
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

    <section id="submit-property">
        <div class="property-center py-5">
            <h1 class="display-4 text-center" style="font-weight: 700;">Submit Property</h1>
            <div class="more-btn">
                <div class="btn btn-primary btn-lg" onclick="location.href='loginPage.html'"> Submit</div>
            </div>
        </div>
    </section>

    <!-- Contact Us part -->
    <script>
        <?php $q = "select property_id from property where option='Sell'";
        $query = mysqli_query($conn, $q);
        ?>

        for (let i = 0; i < <?php echo mysqli_num_rows($query); ?>; i++) {
            $("#buy .row").append("<div></div>");
        }
        $("#buy .row div").addClass("col-4");
        $("#buy .col-4").append("<div></div>");
        $("#buy .col-4 div").addClass("card shadow-sm m-4");
        $("#buy .card").append("<img>").append("<div></div>");
        $("#buy img").attr("src", "image/").attr("height", "225").attr("width", "100%").attr("alt", "Big House");
        $("#buy .card div").addClass("card-body text-center");
        $("#buy .card-body").append(
            $("<p/>").addClass("card-text")
        ).append(
            $("<h4/>").addClass("card-title").text(4000)).append(
            $("<p/>").addClass("text-center three")
        ).append(
            $("<p/>").append(
                $("<i/>").addClass("fa-solid fa-location-crosshairs").css({
                    'color': 'blue'
                })
            ).append(
                $("<a/>").addClass("card-link address").attr("href", "#")
            )
        ).append(
            $("<p/>").append(
                $("<a>").attr("href", "#").addClass("card-link city").text("Dhaka")
            )
        );

        <?php
        $arr = array();
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($arr, $row["property_id"]);
        }
        ?>

        var arr = <?php echo json_encode($arr); ?>;
        $("#buy .card-text").each(function(i) {
            $(this).text("Property ID:" + arr[i]);
        });

        <?php
        $price = array();
        $q = "select price from property where option='Sell'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($price, $row["price"]);
        }
        ?>

        let price = <?php echo json_encode($price); ?>;
        $("#buy .card-title").each(function(i) {
            $(this).text(price[i] + " TK");
        });

        <?php
        $picture = array();
        $q = "select picture from property where option='Sell'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($picture, $row["picture"]);
        }
        ?>

        let picture = <?php echo json_encode($picture); ?>;
        $("#buy img").each(function(i) {
            $(this).attr("src", "image/" + picture[i]);
        });

        <?php
        $type = array();
        $q = "select type from property where option='Sell'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($type, $row["type"]);
        }

        $area = array();
        $q = "select area from property where option='Sell'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($area, $row["area"]);
        }

        $bedroom = array();
        $q = "select bedroom from property where option='Sell'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($bedroom, $row["bedroom"]);
        }
        ?>

        let type = <?php echo json_encode($type); ?>;

        let area = <?php echo json_encode($area); ?>;

        let bedroom = <?php echo json_encode($bedroom); ?>;
        $("#buy .three").each(function(i) {
            $(this).text(type[i] + " • " + area[i] + " Sq Ft • " + bedroom[i] + " beds");
        });

        <?php
        $address = array();
        $q = "select address from property where option='Sell'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($address, $row["address"]);
        }
        ?>

        let address = <?php echo json_encode($address); ?>;
        $("#buy .address").each(function(i) {
            $(this).text("  " + address[i]);
        })

        <?php
        $city = array();
        $q = "select city from property where option='Sell'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($city, $row["city"]);
        }

        ?>

        let city = <?php echo json_encode($city); ?>;
        $("#buy city").each(function(i) {
            $(this).text(city[i]);
        })




        <?php $q = "select property_id from property where option='Rent'";
        $query = mysqli_query($conn, $q);
        ?>

        for (let i = 0; i < <?php echo mysqli_num_rows($query); ?>; i++) {
            $("#rent .row").append("<div></div>");
        }
        $("#rent .row div").addClass("col-4");
        $("#rent .col-4").append("<div></div>");
        $("#rent .col-4 div").addClass("card shadow-sm m-4");
        $("#rent .card").append("<img>").append("<div></div>");
        $("#rent img").attr("src", "image/").attr("height", "225").attr("width", "100%").attr("alt", "Big House");
        $("#rent .card div").addClass("card-body text-center");
        $("#rent .card-body").append(
            $("<p/>").addClass("card-text")
        ).append(
            $("<h4/>").addClass("card-title").text(4000)).append(
            $("<p/>").addClass("text-center three")
        ).append(
            $("<p/>").append(
                $("<i/>").addClass("fa-solid fa-location-crosshairs").css({
                    'color': 'blue'
                })
            ).append(
                $("<a/>").addClass("card-link address").attr("href", "#")
            )
        ).append(
            $("<p/>").append(
                $("<a>").attr("href", "#").addClass("card-link city").text("Dhaka")
            )
        );

        <?php
        $arr = array();
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($arr, $row["property_id"]);
        }
        ?>

        arr = <?php echo json_encode($arr); ?>;
        $("#rent .card-text").each(function(i) {
            $(this).text("Property ID:" + arr[i]);
        });

        <?php
        $price = array();
        $q = "select price from property where option='Rent'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($price, $row["price"]);
        }
        ?>

        price = <?php echo json_encode($price); ?>;
        $("#rent .card-title").each(function(i) {
            $(this).text(price[i] + " TK");
        });

        <?php
        $picture = array();
        $q = "select picture from property where option='Rent'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($picture, $row["picture"]);
        }
        ?>

        picture = <?php echo json_encode($picture); ?>;
        $("#rent img").each(function(i) {
            $(this).attr("src", "image/" + picture[i]);
        });

        <?php
        $type = array();
        $q = "select type from property where option='Rent'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($type, $row["type"]);
        }

        $area = array();
        $q = "select area from property where option='Rent'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($area, $row["area"]);
        }

        $bedroom = array();
        $q = "select bedroom from property where option='Rent'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($bedroom, $row["bedroom"]);
        }
        ?>

        type = <?php echo json_encode($type); ?>;

        area = <?php echo json_encode($area); ?>;

        bedroom = <?php echo json_encode($bedroom); ?>;
        $("#rent .three").each(function(i) {
            $(this).text(type[i] + " • " + area[i] + " Sq Ft • " + bedroom[i] + " beds");
        });

        <?php
        $address = array();
        $q = "select address from property where option='Rent'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($address, $row["address"]);
        }
        ?>

        address = <?php echo json_encode($address); ?>;
        $("#rent .address").each(function(i) {
            $(this).text("  " + address[i]);
        })

        <?php
        $city = array();
        $q = "select city from property where option='Rent'";
        $query = mysqli_query($conn, $q);
        while ($row = mysqli_fetch_assoc($query)) {
            array_push($city, $row["city"]);
        }

        ?>

        city = <?php echo json_encode($city); ?>;
        $("#rent city").each(function(i) {
            $(this).text(city[i]);
        })
    </script>

</body>

</html>