<?php
include "connection.php";
if(isset($_POST['save'])){
  $food_id=$_POST['fid'];
  $food_name=$_POST['fName'];
  $hid=$_POST['hid'];
  $cid=$_POST['cid'];
  $amount=$_POST['price'];
  $image=$_POST['iname'];
 
  $hotel="SELECT *  FROM `hotels` WHERE `Hid`='$hid' ";
  $findH=mysqli_query($con,$hotel);
  $result = mysqli_fetch_array($findH);
  if( $result['Hid'] == $hid ){
    
    $check="SELECT * FROM `foods` WHERE  `Food_id`='$food_id'";
    $ans=mysqli_query($con,$check);
    $res = mysqli_fetch_array($ans);
    if( $res ) 
    {
             echo "<script>alert('Food Id exist..Enter some other valid Id...');</script>";   
         }else{ 
          
              $sql = "INSERT INTO `foods` (`Food_id`, `food_name`, `hotel_id`, `catogory_id`, `amount`, `imgName`) 
               VALUES ('$food_id','$food_name','$hid','$cid','$amount','$image  ')";
               if(mysqli_query($con, $sql))
                         {
                           echo "<script>alert('inserted');</script>"; 
                           header('location:admin.php');

                             } 
                             else{
                            echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                                  }
                          }
                          
                     }else{
                          echo "<script>alert('Enter valid Hotel');</script>"; 
                   }
  }



?>
 
<!-- // 
// 
  
//    

//      
//        
//        
//      
//       
//             

// ?> -->