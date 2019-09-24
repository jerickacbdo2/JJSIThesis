<!DOCTYPE HTML>
<html>

   <head>
        <meta charset ="utf-8">
        <title>Jasper Jean </title>
        <script src="../css/bootstrap.min.css"></script>
        <link rel="stylesheet" type="text/css" href= "../css/style.css">
        <script src="../js/bootstrap.js"></script>
    </head>
<style>
    body{
        font-size: 19px;
        background: none;
    }
    table{
        width:50%;
        margin: 30px auto;
        border-collapse: collapse;
        text-align: left;
    }
    tr{
        border-button:1px solid #cbcbcb;
    }
    th, td{
        border; none;
        height: 30px;
        padding: 2px;
    }
    tr:hover{
        background: #f5f5f5;
    }

</style>
<body>
    <table>    
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Password</th>
                <th colspan="2">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
               $admin = mysqli_query($db, "SELECT * FROM data");
             while ($numrow = mysqli_fetch_array($register)); { 
            echo<td> $numrow['id'];</td>
            echo<td> $numrow['name'];</td>
            echo<td> $numrow['username'];</td>
            echo<td> $numrow['password'];</td>
            <td>
                <a href="a">Edit</a>
            </td>
            <td>
                <!-- <a href="a">Delete</a> -->
                if (isset($_POST['delete']))
            {
                $name =$_POST['name'];
                $username=$_POST['user'];
                $password=$_POST['pass'];

                $register = mysqli_query ($con, "delete from data where name = '$name'");
                // $numrow = mysqli_num_rows($register);

                if($register === TRUE)
                {
                    echo "Deleted Success!!!";
                }
                else    
                {
                    echo "inamo";
                }
                ?>
            </td>
            }
        </tbody>
    </table>
    <?php
        // initialize variables
        $name="";
        $username="";
        $password="";
        $id=0;

        //conection to database
        include "../database/connection.php"; 
        $admin = mysqli_query($db, "SELECT * FROM data");
    ?>
    </body>

</html>