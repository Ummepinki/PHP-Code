<?php
        if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $connection = mysqli_connect('localhost','root','','login');

            if($connection){
                echo "we are connected";
            }else{
                die("Database connection failed");
            }

            //echo $username;
           // echo $password;

        }

        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF--8">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
        <body>
            <div class="container">

            <div class="col-xs-6">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" name="username" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="password"> password</label>
                        <input type="password" name="password" class="form-control"><br>

                     </div>

                     <input  class="btn btn-primary" type="submit" name="submit" value="Submit">

            </form>
       </div>
     
</html>


            