<?php include "db.php" ;
           
    ?>
    <?php include "function.php";     

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
            <form action="login_update.php" method="post">
                    <div class="form-group">
                        <label for="username">username</label>
                        <input type="text" name="username" class="form-control">
                    </div>  
                    <div class="form-group">
                        <label for="password"> password</label>
                        <input type="password" name="password" class="form-control"><br>
                     </div>
                     <div class="form-group">
                         <select name="" id="">
                             <?php
                           showALLData();
                           ?>
                      </select>
                     </div>


                     <input  class="btn btn-primary" type="submit" name="submit" value="UPDATE">

            </form>
              

        
        </div>  
        </div>
       

       
 </body>
 </html>