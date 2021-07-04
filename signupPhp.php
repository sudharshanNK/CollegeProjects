<?php
include "connection.php";

  $na=$_POST['name1'];
  $ph=$_POST['ph1'];
  $mail=$_POST['mail1'];
  $pass=$_POST['pass1'];

  $sql = "INSERT INTO `user`( `Fname`, `phone`, `email`, `Password`) VALUES ('$na','$ph','$mail','$pass')";
if(mysqli_query($con, $sql)){
    echo "<script>alert('inserted');</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

?>