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
      body{
        background: url(assets/images/ghee.jpeg) no-repeat;
    background-size:cover;
    color: white;
    font-family: Arials;
       
}
.main1{
    
    padding:50px;
    width:600px;
  font-size:40px;
  color:black;
  font-weight:bold;
    margin-top:20px;
}
.md-form label {
    position: absolute;
    top: 0;
    left: 0;
    font-size: 24px;
    transform-origin: 0 100%;
    transform: translateY(12px);
    color: whitesmoke;
}
#demotext {
color: black  ;
background: #FFFFFF;
text-shadow: 2px 0 0px #800040, 3px 2px 0px rgba(77,0,38,0.5), 3px 0 3px #FF002B, 5px 0 3px #800015, 6px 2px 3px rgba(77,0,13,0.5), 6px 0 9px #FF5500, 8px 0 9px #802A00, 9px 2px 9px rgba(77,25,0,0.5), 9px 0 18px #FFD500, 11px 0 18px #806A00, 12px 2px 18px rgba(77,66,0,0.5), 12px 0 30px #D4FF00, 14px 0 30px #6A8000, 15px 2px 30px rgba(64,77,0,0.5), 15px 0 45px #80FF00, 17px 0 45px #408000, 17px 2px 45px rgba(38,77,0,0.5);
color: #A7DD3C;
background: #FFFFFF;
}
#demotext1 {
color: #FFFFFF;
/* background: #333333; */
text-shadow: 0 -1px 4px #FFF, 0 -2px 10px #ff0, 0 -10px 20px #ff8000, 0 -18px 40px #F00;
color: #FFFFFF;
/* background: #333333; */
}
</style>
</head>
<body>
    <div id="demotext" style="background: rgba(1, 351, 112, 0.3);height:100px;padding:50px;text-align:center;">
    <h1 >FOOD MANIA</h1>

</div>
<center>
<div id="demotext1" style="margin-top:20px;height:100px;padding:50px;text-align:center;"><h3>ORDER DETAILS</h3></div>
<!-- <div class="main1" > -->
<div id="cart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Your cart</h5>
                </div>
                <div class="modal-body">
                    <table class="table" >
                        <thead class="black white-text">
                            <tr style="color:white;text-shadow: 2px 0 0px #800040, 3px 2px 0px rgba(11,0,08,0.5), 3px 0 3px #FF002B, 5px 0 3px #800015, 6px 2px 3px rgba(77,0,13,0.5), 6px 0 9px #FF5500, 8px 0 9px #802A00, 9px 2px 9px rgba(77,25,0,0.5), 9px 0 18px #FFD500, 11px 0 18px #806A00, 12px 2px 18px rgba(77,66,0,0.5), 12px 0 30px #D4FF00, 14px 0 30px #6A8000, 15px 2px 30px rgba(64,77,0,0.5), 15px 0 45px #80FF00, 17px 0 45px #408000, 17px 2px 45px rgba(38,77,0,0.5);text-decoration:underline;margin-top:20px;font-weight:bold;text-size:25px;">
                                <th scope="col">Order Id</th>
                                <th scope="col">Hotel Name</th>
                                <th scope="col">Food Name</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Customer Name</th>
                                
                               
                                
                                <th scope="col"></th>
                            </tr>
                        </thead>

                        <?php
                        include "connection.php";
                        $sql ="SELECT * FROM `orders1` WHERE 1  ORDER BY  `cus_name` ASC";
                        $result = mysqli_query($con, $sql);
                        
                        echo "<tbody>";
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                               
                                $order_id = $row['Order_Id'];
                                $hotel_name = $row['hotel_name'];
                                $food_name = $row['food_name'];
                                $price = $row['amount'];
                                $cus_name=$row['cus_name'];
                                $date=$row['Date'];
                               
                                echo "
                                <tr class='item-row' style='background-color:#f8b195;'>
                                    <td><b style='color:black;'>" . $order_id . "</b></td>
                                    <td><b style='color:black;'>" . $hotel_name . "</b></td>
                                    <td><b style='color:black;'>" . $food_name. "</b></td>
                                    <td><b style='color:black;'>" . $price . "</b></td>
                                    <td><b style='color:black;'>" . $cus_name . "</b></td>
                                   
                                    
                                  
                                </tr>
                            ";
                            }
                         
                        echo "<form action='' method='POST' ><center><button type='submit' name='clear'  class='btn btn-danger complete' >Clear History</center></form>";
                        
                            
                        }
                       
                        else{
                            echo"
                                <tfoot>
                                <tr>
                                <th>
                                <b style='font-size:20px;text-align:center;'>No orders Yet</b>                                                                                      
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


</center>
<?php
if(isset($_POST['clear'])){
    include "connection.php";
    $del="DELETE FROM `orders1` WHERE 1";
    if(mysqli_query($con, $del)){
        header('location:details.php');
    }


}
?>

</body>

</html>