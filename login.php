<?php



include "connection.php";
session_start();

  $mail=$_POST['mail2'];
  $pass=$_POST['pass2'];
  echo $mail.$pass;
  $sql = "SELECT * FROM `user` WHERE email = '$mail' AND Password = '$pass' ";
  $res = mysqli_query($con, $sql);
$result = mysqli_fetch_array($res);
  
if( $result['email'] == $mail && $result['Password'] == $pass ){
  $name=$result['Fname'];
    //  echo "<script>alert('booooooooo');</script>";
     $_SESSION['name'] = $name;
     $_SESSION['userId'] = $result['id'];
    header('location:homeMain.php');
} else{
    echo "ERROR: Could not able to execute. " . mysqli_error($con);
    echo " alert('Enter valid credintials');</script>";
    header('location:wrong.php');
}

?>