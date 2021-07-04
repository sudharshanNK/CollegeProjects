<?php

include "connection.php";
session_start();

  $mail=$_POST['Amail'];
  $pass=$_POST['Apass2'];
  
  $sql = "SELECT * FROM `admin` WHERE email = '$mail' AND password = '$pass' ";
  $res = mysqli_query($con, $sql);
$result = mysqli_fetch_array($res);
  
if( $result['email'] == $mail && $result['password'] == $pass ){
  $name=$result['AdminN'];
    //  echo "<script>alert('booooooooo');</script>";
     $_SESSION['Aname'] = $name;
    header('location:admin.php');
} else{
    echo "ERROR: Could not able to execute. " . mysqli_error($con);
    echo " alert('Enter valid credintials');</script>";
    header('location:wrong.php');
}

?>