<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
$q = "select * from user";
$query = mysqli_query($conn, $q);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <script src="https://kit.fontawesome.com/4a53b0080a.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            color: #404E67;
            background: #F5F7FA;
            font-family: 'Open Sans', sans-serif;
        }

        .table-wrapper {
            width: 700px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
        }

        .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
        }

        .table-title .add-new {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
        }

        .table-title .add-new i {
            margin-right: 4px;
        }

        table.table {
            table-layout: fixed;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table th:last-child {
            width: 100px;
        }

        table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 5px;
            min-width: 24px;
        }

        table.table td a.add {
            color: #27C46B;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #E34724;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table td a.add i {
            font-size: 24px;
            margin-right: -1px;
            position: relative;
            top: 3px;
        }

        table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
        }

        table.table .form-control.error {
            border-color: #f50000;
        }

        table.table td .add {
            display: none;
        }
    </style>


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
                <a href="firstPage.php">
                    <h1>Go Back?</h1>
                </a>
            </div>
            <div class="col-md-9 well admin-content" id="users">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2>Users <b>Details</b></h2>
                                </div>
                                <div class="col-sm-4">
                                    <button type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i> Add New</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>admin</td>
                                    <td>admin@gmail.com</td>
                                    <td>
                                        <a class="add" title="Add" data-toggle="tooltip"><i class="fa-solid fa-plus"></i></a>
                                        <a class="delete" title="Delete" data-toggle="tooltip"><i class="fa-solid fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-9 well admin-content" id="sell">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2>Property <b>Details</b></h2>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Property ID</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Area</th>
                                    <th>Price</th>
                                    <th>Adress</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-9 well admin-content" id="rent">
                <div class="table-responsive">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h2>Property <b>Details</b></h2>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Property ID</th>
                                    <th>Title</th>
                                    <th>Type</th>
                                    <th>Area</th>
                                    <th>Price</th>
                                    <th>Adress</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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

        //              User Part
        $(document).ready(function() {
            $('#users [data-toggle="tooltip"]').tooltip();
            var actions = $("#users table td:last-child").html();
            // Append table with add row form on add new button click
            $("#users .add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("#users table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="name" id="name"></td>' +
                    '<td><input type="text" class="form-control" name="department" id="department"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("#users table").append(row);
                $("#users table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('#users [data-toggle="tooltip"]').tooltip();
            });

            $(document).on("click", "#users .add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    let arr = [];
                    input.each(function(i) {
                        arr.push($(this).val());
                        $(this).parent("td").html($(this).val());
                        console.log($(this).val);
                    });
                    $.ajax({
                        url: "adminAdd.php",
                        method: "post",
                        data: {
                            arr: JSON.stringify(arr)
                        },
                        success: function(res) {}
                    })

                    $(this).parents("tr").find(".add").toggle();
                    $("#users .add-new").removeAttr("disabled");
                }
            });

            $(document).on("click", "#users .delete", function() {
                $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "user",
                        "pk": "username"
                    },
                    function() {
                        console.log("USERS");
                    }
                );
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
            });
        });

        $(document).ready(function() {
            var actions = $("#users table td:last-child").html();
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
                if ($row['username'] === 'admin') {
                    continue;
                } ?>
                var row = '<tr>' +
                    '<td><?php echo $row['username']; ?></td> <td> <?php echo $row['email']; ?> </td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("#users table").append(row);
            <?php } ?>
        })


        // Selling Part
        $(document).ready(function() {
            $('#sell [data-toggle="tooltip"]').tooltip();
            var actions = $("#users table td:last-child").html();
            // Append table with add row form on add new button click
            $("#sell .add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("#sell table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="id" id="id"></td>' +
                    '<td><input type="text" class="form-control" name="title" id="title"></td>' +
                    '<td><input type="text" class="form-control" name="type" id="type"></td>' +
                    '<td><input type="text" class="form-control" name="area" id="area"></td>' +
                    '<td><input type="text" class="form-control" name="price" id="price"></td>' +
                    '<td><input type="text" class="form-control" name="address" id="address"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("#sell table").append(row);
                $("#sell table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('#sell [data-toggle="tooltip"]').tooltip();
            });

            $(document).on("click", "#sell .add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    input.each(function(i) {
                        $(this).parent("td").html($(this).val());
                    });

                    $(this).parents("tr").find(".add").toggle();
                    $("#sell .add-new").removeAttr("disabled");
                }
            });

            $(document).on("click", "#sell .delete", function() {

                $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "property",
                        "pk": "property_id"
                    },
                    function() {
                        console.log("helo");
                    }
                );
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
            });
        });

        $(document).ready(function() {
            var actions = $("#users table td:last-child").html();
            <?php
            $q = "select * from property where option='Sell'";
            $query = mysqli_query($conn, $q);
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                var row = '<tr>' +
                    '<td><?php echo $row['property_id']; ?></td> <td> <?php echo $row['title']; ?> </td> <td> <?php echo strtolower($row['type']); ?> </td> <td> <?php echo $row['area']; ?> </td> <td> <?php echo $row['price']; ?> </td> <td> <?php echo $row['address']; ?> </td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("#sell table").append(row);
            <?php } ?>
        })



        // Renting Part
        $(document).ready(function() {
            $('#rent [data-toggle="tooltip"]').tooltip();
            var actions = $("#users table td:last-child").html();
            // Append table with add row form on add new button click
            $("#rent .add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("#rent table tbody tr:last-child").index();
                var row = '<tr>' +
                    '<td><input type="text" class="form-control" name="id" id="id"></td>' +
                    '<td><input type="text" class="form-control" name="title" id="title"></td>' +
                    '<td><input type="text" class="form-control" name="type" id="type"></td>' +
                    '<td><input type="text" class="form-control" name="area" id="area"></td>' +
                    '<td><input type="text" class="form-control" name="price" id="price"></td>' +
                    '<td><input type="text" class="form-control" name="address" id="address"></td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("#rent table").append(row);
                $("#rent table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                $('#rent [data-toggle="tooltip"]').tooltip();
            });

            $(document).on("click", "#rent .add", function() {
                var empty = false;
                var input = $(this).parents("tr").find('input[type="text"]');
                input.each(function() {
                    if (!$(this).val()) {
                        $(this).addClass("error");
                        empty = true;
                    } else {
                        $(this).removeClass("error");
                    }
                });
                $(this).parents("tr").find(".error").first().focus();
                if (!empty) {
                    input.each(function(i) {
                        $(this).parent("td").html($(this).val());
                    });

                    $(this).parents("tr").find(".add").toggle();
                    $("#rent .add-new").removeAttr("disabled");
                }
            });

            $(document).on("click", "#rent .delete", function() {
                $.post('admindelete.php', {
                        "k": $(this).parents("tr").find(":first-child").text(),
                        "type": "property",
                        "pk": "property_id"
                    },
                    function() {
                        console.log("helo");
                    }
                );
                $(this).parents("tr").remove();
                $(".add-new").removeAttr("disabled");
            });
        });

        $(document).ready(function() {
            var actions = $("#users table td:last-child").html();
            <?php
            $q = "select * from property where option='Rent'";
            $query = mysqli_query($conn, $q);
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                var row = '<tr>' +
                    '<td><?php echo $row['property_id']; ?></td> <td> <?php echo $row['title']; ?> </td> <td> <?php echo strtolower($row['type']); ?> </td> <td> <?php echo $row['area']; ?> </td> <td> <?php echo $row['price']; ?> </td> <td> <?php echo $row['address']; ?> </td>' +
                    '<td>' + actions + '</td>' +
                    '</tr>';
                $("#rent table").append(row);
            <?php } ?>
        })
    </script>
</body>



</html>