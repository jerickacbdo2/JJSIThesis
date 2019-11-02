<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <title>Jasper Jean </title>
    <!-- <script src="../../../css/bootstrap.min.css"></script>
    <script src="../../../css/datatables/dataTables.bootstrap.css"></script> -->
    <script src="C:\xampp\htdocs\JJSIThesis\Website\css\bootstrap\css\bootstrap-grid.min.css"></script>
    <script src="C:\xampp\htdocs\JJSIThesis\Website\css\bootstrap\css\bootstrap.min.css"></script>
    <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\JJSIThesis\Website\css\maincss\style.css">
    <script src="../../../js/bootstrap.js"></script>
</head>

<body>
    
    <table class="table">
        <thead >
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>UserStatus</th>
                <th>Date Registered</th>
                <th style="width: 50px !important;">Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../../../database/connection.php";
            $squery = mysqli_query($con, "Select * from tblaccount");
            while ($row = mysqli_fetch_array($squery)) {
                echo '
                <tr>
                    <td> ' . $row['AccountID'] . '</td>
                    <td>' . $row['Username'] . '</td>
                    <td>' . $row['Password'] . '</td>
                    <td>' . $row['UserStatus'] . '</td>
                    <td>' . $row['DateRegistered'] . '</td>
                </tr>
                ';

                // include "editModal.php";
            }
            ?>
        </tbody>
    </table>
</body>

</html>