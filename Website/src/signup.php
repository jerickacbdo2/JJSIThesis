<!doctype html>
<html>
    <head>
        <meta charset ="utf-8">
        <title>Jasper Jean </title>
        <script src="../css/bootstrap,min.css"></script>
        <link rel="stylesheet" type="text/css" href= "../css/style.css">
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
         
        <section class="main-container">
            <div class="numrow justifiy-content-center">
                <h2>Sign Up</h2>
            <form action="register" method="POST">
                <div class="signup-form">
                    <input type="text" name="name" class="form-control" required="">
                    <label>Name </label>
                </div>   
                <div class="signup-form">
                    <input type="text" name="user" class="form-control" required="">
                    <label>Username</label>
                </div>  
                <div class="signup-form">
                    <input type="password" name="pass" class="form-control" required="">
                    <label> Password</label>
                </div>
                <div class="signup-form">    
                    <button type="submit" name="register" class="btn">Register</button>                
                </div>         
            </form>

            </div>
        </section>
        <?php 
            include "../database/connection.php"; 
            if (isset($_POST['register']))
            {
                $name =$_POST['name'];
                $username=$_POST['user'];
                $password=$_POST['pass'];

                $register = mysqli_query ($con, "INSERT INTO data (name,username,password) values ('$name', '$username', '$password')");                           
                // $numrow = mysqli_num_rows($register);

                if ($register === TRUE)
                {
                    echo "Registered Success!!!";
                }
                else    
                {
                    echo "invalid account";
                }   
            }
        ?>
    </body>
