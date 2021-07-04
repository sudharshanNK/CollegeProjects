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
        background: url(assets/images/bg4.jpg) no-repeat;
    background-size:cover;
    color: white;
    font-family: Arials;
       
}
.main1{
    height:400px;
    padding:50px;
    width:600px;
  
    margin-top:60px;
}
#demotext {
color: #A7DD3C;
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
<div id="demotext1" style="margin-top:50px;height:100px;padding:50px;text-align:center;"><h3>ENTER HOTEL DETAILS</h3></div>
<div class="main1" style="color:black;text-shadow: 2px 0 0px #800040, 3px 2px 0px rgba(77,0,38,0.5), 3px 0 3px #FF002B, 5px 0 3px #800015, 6px 2px 3px rgba(77,0,13,0.5), 6px 0 9px #FF5500, 8px 0 9px #802A00, 9px 2px 9px rgba(77,25,0,0.5), 9px 0 18px #FFD500, 11px 0 18px #806A00, 12px 2px 18px rgba(77,66,0,0.5), 12px 0 30px #D4FF00, 14px 0 30px #6A8000, 15px 2px 30px rgba(64,77,0,0.5), 15px 0 45px #80FF00, 17px 0 45px #408000, 17px 2px 45px rgba(38,77,0,0.5);text-decoration:underline;margin-top:50px;">
<form action="" method="POST">
<div class="md-form mb-5">
<label class="label1" data-error="wrong" data-success="right" for="Form-name">Hotel Name</label></br>
            <input type="text" id="Form-name" name="hname" class="form-control validate white-text" required>
            
          </div>
          
          
          <div class="md-form mb-5">
          <label class="label1" data-error="wrong" data-success="right" for="Form-email5">Image Link</label></br>
            <input type="text" id="Form-email5" name="himage"  class="form-control validate white-text" required>
           
          </div>
         

          <div class="md-form pb-3">
          <label class="label1" data-error="wrong" data-success="right" for="Form-pass5">Description</label></br>
            <input type="text" name="hdescription" id="Form-pass5" class="form-control validate white-text" required>
            
            </div>
           
           
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1" name="add" >ADD</button>
            </div>
            
            <!--Grid column-->

          </div>
</form>
</div>
<?php
include "connection.php";
if(isset($_POST['add']))
{
  $hname=$_POST['hname'];

  $himage=$_POST['himage'];
  $hdisc=$_POST['hdescription'];
 
  $sql = "INSERT INTO `hotels` ( `Hotel_name`, `descs`, `hImage`) VALUES ('$hname','$hdisc','$himage')";
if(mysqli_query($con, $sql)){
    echo "<script>alert('inserted');</script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
}
?>
</center>
</body>
</html>