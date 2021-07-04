<?php

include "connection.php";
$foodId = $_POST['foodId'];
$userId = $_POST['userId'];
$price = $_POST['price'];
$catId = $_POST['catId'];
$fimage = $_POST['fimage'];
$fname = $_POST['fname'];
$hid = $_POST['hid'];

$sql = "DELETE FROM `carts` WHERE `food_id`='$foodId' AND `cus_id`=$userId";
$res = mysqli_query($con, $sql);
// $result = mysqli_fetch_array($res);

  

?>