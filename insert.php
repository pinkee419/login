<?php
    
  $name = $_POST['name'];
  $email=  $_POST['email'];

  $conn = mysqli_connect('localhost','root','','inserdb');

  $query = "INSERT INTO `userdata`( `name`, `email`) VALUES ('$name', '$email')";

  $run =mysqli_query($conn,$query);
  if($run == TRUE){
      echo "data inserted successfully ";

  }
  else{
    echo "error";
  }
?>