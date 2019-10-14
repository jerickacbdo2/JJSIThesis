<!doctype html>
<html>
<?php
	session_start();
?>
    <head>
        <meta charset ="utf-8">
        <title>Jasper Jean </title>
        <link rel="stylesheet" href= "../../css/style.css">
    </head>
    <body>  
        <div class="box">
            <h2>LogIn</h2>
            <form method="post" action="login.php">
                <div class="InputBox">
                    <input type="text" name="user" required="">
                    <label>Username</label>
                </div>
                <div class="InputBox">
                    <input type="password" name="pass" required="">
                    <label> Password</label>
                </div>
                    <a href="pages/signup.php">Sign Up</a>               
                    <!-- <button type="submit" name="login" class="btn">Login</button> -->
                    <input type="submit" name="login" value="Login">
            </form>
        <!--database-->
        <?php
            include "../../database/connection.php";
            if(isset($_POST['login']))
            { 
                $username = $_POST['user'];
                $password = $_POST['pass'];

                //connection thru database
                $admin = mysqli_query($con, "SELECT * from data where username = '$username' and password = '$password' ");
                $numrow = mysqli_num_rows($admin);

                if($numrow > 0)
                {
                    echo 'Login Success!!! Welcome' .$numrow['user'];
                    header ('Location: Pages/crud.php');
                }
                else
                {
                    echo 'invalid account';
                }   
            }
        ?>    
    </body>
</html>