<?php include"db.php";?>
<?php

function showALLData(){
    global $connection,$mysqli;
  $query ="SELECT* FROM user";
  $result= mysqli_query($connection,$query);

  if(!$result){
      die('Query FAILED'. mysqli_error($mysqli));
  }

  while($row = mysqli_fetch_assoc($result)){
    $id=$row['id'];
  echo  "<option value='id'>$id</option> ";
}
}
?>








