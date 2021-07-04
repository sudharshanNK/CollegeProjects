<?php
session_start();
$key = $_GET['key'];
$user=$_SESSION['name'];
include('connection.php');
$sql1= "SELECT  * FROM `hotels` WHERE `Hid` = '$key' ";
$res = mysqli_query($con, $sql1);
$row1= mysqli_fetch_array($res);
$hotel=$row1['Hotel_name'];

$_SESSION['key'] = $key;
$userId = $_SESSION['userId'];
$vegLink = '?veg&&key='.$key;
$nonvegLink = '?nonveg&&key='.$key;
$total = 0;

// $row = mysqli_fetch_array($result);
?>
<!doctype html>
<html>
    <head>
        <title></title> 
        <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
<style>
.heading{
          font-size:30px;
          font-weight:bold;
          text-decoration:underline;
          font-family:Times;
        }
</style>

<!-- My java scripts end -->
    </head>
    <body>
<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
    aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="home.php">BACK</a>
      </li>
     

      <li class="nav-item dropdown">
      <form>
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Food Catogory
        </a>
        <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
       
          <a class="dropdown-item" href=<?php echo $vegLink; ?> > Veg </a>
          <a class="dropdown-item" href=<?php echo $nonvegLink; ?>> Non veg </a>
        </div>
        </form>
      </li>
      
    </ul >
    
    <ul navbar-nav ml-auto>
    <h2><?php echo $hotel;?></h2>
    </ul>
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
      <a class="nav-link" data-toggle="modal" data-target="#cart"><i style="font-size:24px" class="fa">&#xf07a;</i>My Cart</a>
          
      </li>
      <li class="nav-item">
      <a class="nav-link"><?php echo $user;?></a>
          
      </li>
      <form action="logout.php" method="POST"></form>
      <li class="nav-item">
      <a class="nav-link" href="logout.php"> Logout </a>
      </form>
      
    </ul>
  </div>
</nav>
           
<?php


        
    if (isset($_GET['veg'])) {
      displayVeg();
  } else if (isset($_GET['nonveg'])) {
      displayNonVeg();
  } else if (isset($_POST['search'])) {
      displaySearch();
  } else {
      displayAll();
  }

  function displayAll()
  { 
      
      $key = $_SESSION['key'];
      $userId = $_SESSION['userId'];
      include('connection.php');
     
      
      $sql = "SELECT * FROM foods WHERE hotel_id = '$key' ";
      $result = mysqli_query($con, $sql);
      echo "
          <div class='container'>
              <div class='card-deck'>
                  <div class='row'>
      ";
      if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_array($result)) {
           $food_id = $row['Food_id'];
           $food_name = $row['food_name'];
           $food_image = $row['imgName'];
           $price = $row['amount'];
           $cat_id = $row['catogory_id'];
              echo "
                  <div class='col-md-3'>
                  <div class='card mb-4'>
                      <div class='view overlay'>
                          <img class='card-img-top cover img-thumbnail img-fluid' style='height:180px;' src='assets/images/$food_image' alt='Card image cap'>
                          <a href='#!'>
                              <div class='mask rgba-white-slight'></div>
                          </a>
                      </div>
                      <div class='card-body'>
                          <h5 style='color:black;font-weight:bold;text-align:left;'>$food_name</h5>
                          <div class='row'><div class='col'><p class='card-text'><b>$price</b></p></div></div>
                          <button type='submit' class='btn btn-light-blue btn-md addToCart' data-uid= $userId data-price=$price data-hid=$key data-cid=$cat_id data-fname=$food_name data-fimage=$food_image data-key=$food_id>Add to cart <i class='fa fa-cart-arrow-down'></i></button>
                      </div>
                  </div>
                  </div>";
          }
      }
      echo "</div>
          </div>
              </div>
 ";
  }
 
  function displayNonVeg()
  {
    $key = $_SESSION['key'];
    include('connection.php');
    $userId = $_SESSION['userId'];
    
    $sql = "SELECT * FROM foods WHERE  hotel_id = '$key'  and catogory_id = '102' ";
      $result = mysqli_query($con, $sql);
      echo "
      <div class='container'>
          <div class='card-deck'>
              <div class='row' style='width:100%;'>
  ";
  if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_array($result)) {
       $food_id = $row['Food_id'];
       $food_name = $row['food_name'];
       $food_image = $row['imgName'];
       $price = $row['amount'];
       $cat_id = $row['catogory_id'];
              echo "
              <div class='col-md-3'>
              <div class='card mb-4'>
                  <div class='view overlay'>
                      <img class='card-img-top cover img-thumbnail img-fluid' style='height:180px;' src='assets/images/$food_image' alt='Card image cap'>
                      <a href='#!'>
                          <div class='mask rgba-white-slight'></div>
                      </a>
                  </div>
                  <div class='card-body'>
                      <h5 style='color:black;font-weight:bold;text-align:left;'>$food_name</h5>
                      <div class='row'><div class='col'><p class='card-text'></p></div><div class='col'><p class='card-text'>&#8377;<b>$price</b></p></div></div>
                      <button type='submit' class='btn btn-light-blue btn-md addToCart' data-key=$food_id  data-uid= $userId data-price=$price data-hid=$key data-cid=$cat_id data-fname=$food_name data-fimage=$food_image>Add to cart <i class='fa fa-cart-arrow-down'></i></button>
                  </div>
              </div>
              </div>";
          }
      }
      echo "</div>
      </div>
          </div>
  ";
  }
 
 function displayVeg()
         {
             $key = $_SESSION['key'];
             $total=0;
             $userId = $_SESSION['userId'];
             include('connection.php');
             $sql1 = "SELECT  `Hotel_name` FROM `hotels` WHERE `Hid` = '$key' ";
             $hotel = mysqli_query($con, $sql1);
             $sql = "SELECT * FROM foods WHERE hotel_id = '$key' and  catogory_id = '100' Union SELECT * FROM foods WHERE hotel_id = '$key' and catogory_id = '103' UNION SELECT * FROM foods WHERE hotel_id = '$key'  and catogory_id = '104'  ";
             $result = mysqli_query($con, $sql);
             echo "
         <div class='container'>
             <div class='card-deck'>
                 <div class='row' style='width:100%;'>";
             if (mysqli_num_rows($result) > 0) {
                 while ($row = mysqli_fetch_array($result)) {
                     $food_id = $row['Food_id'];
                     $food_name = $row['food_name'];
                     $food_image = $row['imgName'];
                     $price = $row['amount'];
                     $total+=$price;
                     $cat_id = $row['catogory_id'];
                     echo "
                 <div class='col-md-3'>
                 <div class='card mb-4'>
                     <div class='view overlay'>
                         <img class='card-img-top cover img-thumbnail img-fluid' style='height:180px;' src='assets/images/$food_image' alt='Card image cap'>
                         <a href='#!'>
                             <div class='mask rgba-white-slight'></div>
                         </a>
                     </div>
                     <div class='card-body'>
                         <h5 style='color:black;font-weight:bold;text-align:left;'>$food_name</h5>
                         <div class='row'><div class='col'><p class='card-text'>$price</del></p></div><div class='col'><p class='card-text'>&#8377;<b>$price</b></p></div></div>
                         <button type='submit' class='btn btn-light-blue btn-md addTocart' data-uid= $userId data-price=$price data-hid=$key data-cid=$cat_id data-fname=$food_name data-fimage=$food_image data-key=$food_id>Add to cart <i class='fa fa-cart-arrow-down'></i></button>
                     </div>
                 </div>
                 </div>";
                 }
             }
             echo "</div>
         </div>
             </div>
     ";
     }
     //echo "<center><form><input type='submit' value='Order' class='btn btn-light-blue btn-md order' data-uid= $userId data-total=$total /></form></center>";
     
?>

<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Your cart</h5>
                </div>
                <div class="modal-body">
                    <form id="updateForm" action="order.php" method="post"></form>
                    <table class="table">
                        <thead class="black white-text">
                            <tr>
                                <th scope="col">Food image</th>
                                <th scope="col">food name</th>
                                <th scope="col">price</th>
                               
                                
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <?php
                        include "connection.php";
                        $sql ="SELECT * FROM `carts` WHERE `cus_id`='$userId' ORDER BY food_name ASC";
                        $result = mysqli_query($con, $sql);
                        
                        echo "<tbody>";
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $hotel_id = $row['hotel_id'];
                                $food_name = $row['food_name'];
                                $food_image = $row['food_image'];
                                $price = $row['amount'];
                                $food_id=$row['food_id'];
                                $userId=$row['cus_id'];
                                $cat_id=$row['catogory_id'];
                                $key=$row['hotel_id'];

                               
                                $total=$total+ $price;
                                echo "
                                <tr class='item-row'>
                                    <td><img src='assets/images/$food_image' style='width:60px;height:60px;' ></td>
                                    <td><b style='color:black;'>" . $food_name . "</b></td>
                                    <td><b style='color:black;'>" . $price. "</b></td>
                                    
                                    <td><button type='submit' class='btn btn-danger delete' data-uid= $userId data-price=$price data-hid=$key data-cid=$cat_id data-fname=$food_name data-fimage=assets/images/$food_image data-key=$food_id name='$food_id'><i class='fa fa-trash'></i></a></td>
                                </tr>
                            ";
                            }
                            
                        echo " <tr><th></th><th></th>
                        <th colspan='3'>TOTAL</th><th>$total</th></tr>";
                        echo "<center><button type='submit'   class='btn btn-danger complete' data-uid= $userId data-price=$price data-hid=$key data-cid=$cat_id data-fname=$food_name data-fimage=assets/$food_image data-key=$food_id name='$food_id'>Place_Order</center>";
                        }
                       
                        else{
                            echo"
                                <tfoot>
                                <tr>
                                <th>
                                <b style='font-size:20px;text-align:center;'>cart is empty</b>                                                                                      
                                </th>
                                </tr>
                                </tfoot>
                               ";
                                
                        }
                       echo  "</table>";
                        echo "</tbody>";
                        
                        ?>
                      
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>  

<!--Navbar -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>

<script>
    
    $(document).ready(function(){
        $('.addToCart').click(function(){
            let fkey = $(this).data('key');
            let uid = $(this).data('uid');
            let price = $(this).data('price');
            let cid = $(this).data('cid');
            let fimage = $(this).data('fimage');
            let fname = $(this).data('fname');
            let hid= $(this).data('hid');

            let data = {
                "foodId": fkey,
                "userId": uid,
                "price": price,
                "catId": cid,
                "fimage": fimage,
                "fname":fname,
                "hid": hid
            }
            $.ajax({
                type:'POST',
                url:'addToCart.php',
                data:data,
                success: function(res){
                    alert("Added to the cart successfully");
                    window.location.href = "food.php?key="+data["hid"];
                },
                error: function(res){

                }
            });
           
        });
    });

    // deleting ajax
    $(document).ready(function(){
        $('.delete').click(function(){
            let fkey = $(this).data('key');
            let uid = $(this).data('uid');
            let price = $(this).data('price');
            let cid = $(this).data('cid');
            let fimage = $(this).data('fimage');
            let fname = $(this).data('fname');
            let hid= $(this).data('hid');

            let data = {
                "foodId": fkey,
                "userId": uid,
                "price": price,
                "catId": cid,
                "fimage": fimage,
                "fname":fname,
                "hid": hid
            }
            $.ajax({
                type:'POST',
                url:'order.php',
                data:data,
                success: function(res){
                    console.log(res);
                    alert("Deleted successfully");
                    window.location.href = "food.php?key="+data["hid"];
                },
                error: function(res){
                        alert("Cant delete the item..try after some time..")
                }
            });
           
        });
    });
     // final ajax
     $(document).ready(function(){
        $('.complete').click(function(){
            let fkey = $(this).data('key');
            let uid = $(this).data('uid');
            let price = $(this).data('price');
            let cid = $(this).data('cid');
            let fimage = $(this).data('fimage');
            let fname = $(this).data('fname');
            let hid= $(this).data('hid');

            let data = {
                "foodId": fkey,
                "userId": uid,
                "price": price,
                "catId": cid,
                "fimage": fimage,
                "fname":fname,
                "hid": hid
            }
            $.ajax({
                type:'POST',
                url:'remove.php',
                data:data,
                success: function(res){
                    console.log(res);
                    alert("Ordered Placed Successfully...");
                    
                window.location.href = "food.php?key="+data["hid"];
                },
                error: function(res){
                        alert("Cant order the item..try again after some time..")
                }
            });
           
        });
    });
</script>

    </body>
</html>
