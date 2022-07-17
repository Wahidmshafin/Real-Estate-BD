<?php
$conn = mysqli_connect("localhost", "root", "", "mydatabase");
$drop = "drop table property";
$create = "create table property(
        property_id int not null primary key auto_increment,
        title varchar(30) not null,
        option varchar(10) not null,
        type varchar(10),
        area int,
        price int,
        city varchar(15),
        description varchar(50),
        address varchar(50),
        bathroom int,
        bedroom int,
        garge int,
        username varchar(20),
        picture varchar(30),
        FOREIGN KEY (username) REFERENCES user(username) ON DELETE CASCADE
    )";

$done = mysqli_query($conn, $create);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        $(document).ready(function() {
            $('#rent [data-toggle="tooltip"]').tooltip();
            var actions = $("#users table td:last-child").html();
            // Append table with add row form on add new button click
            $("#rent .add-new").click(function() {
                $(this).attr("disabled", "disabled");
                var index = $("#users table tbody tr:last-child").index();
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

            $(document).on("click", ".delete", function() {
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
                $("#rent table").append(row);
            <?php } ?>
        })
    </script>
</body>

</html>