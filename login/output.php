<?php
include_once 'db.php';
$string_cat = rand(0, 15);
session_id("TEAM7" . "{$string_cat}");
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script language="javascript" type="text/javascript">
        window.history.forward();
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.13.1/datatables.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



</head>

<body style="margin: 50px;">
    <form action="logout.php" method="POST">
        <style>
            button {
                background-color: black;
                width: 100px;
                font-size: 20px;
                padding: 10px;
                border-radius: 1px;
                border: 2px white;
                color: white;
                cursor: pointer;
                position: relative;
            }
        </style>
        <tr>
            <td><button type="submit" name="logout">Logout</button></td>
        </tr>
    </form>
    <h1> List of Alumni </h1>
    <br>

    <table class="table" id="example" style="border: 1px solid black;">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Program</th>
                <th>Graduation Year</th>
                <th>Contact number</th>
                <th>E-mail</th>
                <th>Focus Area</th>
                <th>Organization Name</th>
                <th>Job Title</th>
                <th>Areas of Interest</th>
                <th>Available day</th>
                <th>Available time</th>
            </tr>
        </thead>
        <tbody>

            <?php
                $sql = "SELECT * FROM alumni;";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>" . $row["FirstName"] . "</td>
                        <td>" . $row["LastName"] . "</td>
                        <td>" . $row["Program"] . "</td>
                        <td>" . $row["gradyear"] . "</td>
                        <td>" . $row["phone"] . "</td>
                        <td>" . $row["Email"] . "</td>
                        <td>" . $row["FocusArea"] . "</td>                                            
                        <td>" . $row["orgname"] . "</td>
                        <td>" . $row["title"] . "</td>
                        <td>" . $row["interest"] . "</td>
                        <td>" . $row["availableday"] . "</td>
                        <td>" . $row["timeofday"] . "</td>
                        </tr>";
                }
                session_destroy();
                ?>

        </tbody>

        <tfoot>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th>Focus Area</th>
                <th></th>
                <th></th>
                <th>Areas of Interest</th>
                <th>Available day</th>
                <th>Available time</th>
            </tr>
        </tfoot>

    </table>



    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#example').DataTable({
                initComplete: function () {
                    this.api()
                        .columns([6, 9, 10, 11])
                        .every(function () {
                            var column = this;
                            var select = $('<select><option value=""></option></select>')
                                .appendTo($(column.footer()).empty())
                                .on('change', function () {
                                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                                    column.search(val ? '^' + val + '$' : '', true, false).draw();
                                });



                            column
                                .data()
                                .unique()
                                .sort()
                                .each(function (d, j) {
                                    select.append('<option value="' + d + '">' + d + '</option>');
                                });
                        });
                },
            });
        });


    </script>

</body>

</html>