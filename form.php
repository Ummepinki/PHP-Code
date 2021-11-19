<?php
             if(isset($_POST['submit'])){
                 $username=$_POST['username'];
                 $password=$_POST['password'];
                 echo $username;
                 echo $password;

             }
            ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF--8">
        <title>Document</title>
</head>
        <body>
            <form action="form.php" method="post">
                <input type="text" name="username" placeholder="username">
                <input type="text" name="password" placeholder="password">
                <input type="submit" name="submit">
             </form>

          
      </body>
      </html>


