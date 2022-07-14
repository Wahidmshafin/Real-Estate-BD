<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://kit.fontawesome.com/4a53b0080a.js" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills nav-stacked admin-menu">
                    <li class="active"><a href="#" data-target-id="home"><i class="fa fa-home fa-fw"></i>Home</a></li>
                    <li><a href="" data-target-id="users"><i class="fa fa-user fa-fw"></i>Users</a></li>
                    <li><a href="" data-target-id="sell"><i class="fa fa-house-chimney fa-fw"></i>For Sell</a></li>
                    <li><a href="" data-target-id="rent"><i class="fa-solid fa-building fa-fw"></i>For Rent</a></li>
                </ul>
            </div>
            <div class="col-md-9 well admin-content" id="home">
                <p>
                    Hello! This is a forked snippet.<br>
                    It is for users, which use one-page layouts.
                </p>
                <p>
                    Here's the original one from BhaumikPatel: <a href="http://bootsnipp.com/snippets/featured/vertical-admin-menu" target="_BLANK">Vertical Admin Menu</a>
                    <br><br>
                    <strong>Thank you Bhaumik!</strong>
                </p>
            </div>
            <div class="col-md-9 well admin-content" id="users">
                Users
            </div>
            <div class="col-md-9 well admin-content" id="sell">
                Sell
            </div>
            <div class="col-md-9 well admin-content" id="rent">
                Rent
            </div>

        </div>
    </div>
    <script>
        $(document).ready(function() {
            var navItems = $('.admin-menu li > a');
            var navListItems = $('.admin-menu li');
            var allWells = $('.admin-content');
            var allWellsExceptFirst = $('.admin-content:not(:first)');

            allWellsExceptFirst.hide();
            navItems.click(function(e) {
                e.preventDefault();
                navListItems.removeClass('active');
                $(this).closest('li').addClass('active');

                allWells.hide();
                var target = $(this).attr('data-target-id');
                $('#' + target).show();
            });
        });
    </script>
</body>

</html>