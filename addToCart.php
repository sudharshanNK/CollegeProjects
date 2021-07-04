<?php

include "connection.php";
$foodId = $_POST['foodId'];
$userId = $_POST['userId'];
$price = $_POST['price'];
$catId = $_POST['catId'];
$fimage = $_POST['fimage'];
$fname = $_POST['fname'];
$hid = $_POST['hid'];



$sql="INSERT INTO `carts` ( `hotel_id`, `catogory_id`, `cus_id`, `food_id`, `food_name`, `amount`, `food_image`) 
    VALUES ('$hid', '$catId' ,'$userId','$foodId', '$fname', '$price', '$fimage') ";
  if(mysqli_query($con, $sql)){
    
    echo "<script>alert('inserted');</script>";
} else{
    
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
    
?>