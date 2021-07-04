<?php
include "connection.php";
 $sql ="SELECT * FROM `carts` ORDER BY food_name ASC";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<script>alert('Inside while' );</script>"; 
        $hotel_id = $row['hotel_id'];
        $food_name = $row['food_name'];
        $food_image = $row['food_image'];
        $price = $row['amount'];
        $food_id=$row['food_id'];
        $userId=$row['cus_id'];
        $cat_id=$row['catogory_id'];
        $key=$row['hotel_id'];
    $sql1="SELECT * FROM `hotels` WHERE `Hid`='$hotel_id' ";
    if($temp1=mysqli_query($con, $sql1)){
        $ans1=mysqli_fetch_array($temp1);
    $hName=$ans1['Hotel_name'];
    echo "<script>alert('$hName' );</script>"; 
    }
    

$sq="SELECT * FROM `user` WHERE `id`='$userId'";
if($temp2=mysqli_query($con, $sq)){
$ans2=mysqli_fetch_array($temp2);
$cusName=$ans2['Fname'];
echo "<script>alert('$cusName' );</script>"; 
}

$qu="INSERT INTO `orders1` (`Hotel_Id`, `hotel_name`, `food_name`, `amount`, `cus_id`, `cus_name`) 
VALUES ('$hotel_id','$hName','$food_name','$price','$userId','$cusName')";
 if(mysqli_query($con,$qu)){
    echo "<script>alert('Inside query' );</script>";
 }
     else{ 
 echo "<script>alert('Error' );</script>"; 
 }
}
}

$del="DELETE FROM carts WHERE `cus_id`='$userId' ";	
mysqli_query($con, $del);



?>