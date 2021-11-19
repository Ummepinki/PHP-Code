<?php    
            $connection = mysqli_connect('localhost','root','','login');

            if($connection){
                echo "we are connected";
            }else{
                die("Database connection failed");
            }

           
           $query ="SELECT* FROM user";
           $result= mysqli_query($connection,$query);

           if(!$result){
               die('Query FAILED'. $mysqli_error());
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

            <div class="col-sm-6">
        
                <?php
                while($row=mysqli_fetch_assoc($result)){

                 ?>
                 
                 <pre>
                     <?php
                     print_r($row);
                     ?>

                   
                </pre>  
                <?php

                }

          ?>
        </div>  
        </div>
 </body>
 </html>