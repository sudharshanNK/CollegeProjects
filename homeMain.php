<?php
  session_start();
  if(empty($_SESSION['name'])){
    header('location:index.php');
  }
  $name=$_SESSION['name'];
  $userId = $_SESSION['userId'];
  echo '<script language="javascript">';
// echo "alert('message successfully sent'.$name)";
// echo "saman = ".$userId;
$_SESSION['userId'] = $userId;

echo '</script>';
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
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -100px;
    margin-left: -100px;
}
.heading{
          font-size:30px;
          font-weight:bold;
          text-decoration:underline;
          font-family:Times;
        }
        .card-img-top {
    width: 100%;
    height: 300px;
    border-top-left-radius: calc(.25rem - 1px);
    border-top-right-radius: calc(.25rem - 1px);
}
</style>
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
        <a class="nav-link" href="logout.php">BACK</a>
      </li>
      
     
    </ul>
    <ul class="navbar-nav ml-auto">
    
    
      <li class="nav-item">
      <a class="nav-link"><?php echo $name;?></a>
          
      </li>
      <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
      </li>
        <div class="dropdown-menu dropdown-menu-right dropdown-default"
          aria-labelledby="navbarDropdownMenuLink-333">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>

<!-- Card deck -->

<?php

      $userId = $_SESSION['userId'];
      include('connection.php');
     
      
      $sql = "SELECT * FROM hotels WHERE 1 ";
      $result = mysqli_query($con, $sql);
      echo "
              <div class='container'>
         
              <div class='card-deck'>
              <div class='row'>
                 
      ";
      if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_array($result)) {

      
           $hotel_id = $row['Hid'];
           $hotel_name = $row['Hotel_name'];
           $hotel_image = $row['hImage'];
           $dis = $row['descs'];
              echo "
              <div class='col-md-4'>
              <div class='card mb-4' style='height:500px;'>
              
                  <div class='view overlay'>
                      <img class='card-img-top ' src='$hotel_image' alt='Card image cap'>
                      <a href='#!'>
                          <div class='mask rgba-white-slight'></div>
                      </a>
                  </div>
                  <div class='card-body'>
                  <h4 class='card-title heading'>$hotel_name</h4>
                     <p class='card-text'><b>$dis</b></p>
                      <button type='button' class='btn btn-light-blue btn-md visit' data-key='$hotel_id'>Visit</button>
                  </div>
              </div>
              </div>
            ";
            }
          }
          echo "</div></div></div>
              
     ";
 
?>  
  
  <!-- Card -->

  

</div>
<!-- Card deck -->

<!--Footer -->

<!--/.Navbar -->
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
    $('.visit').click(function(e){
      e.preventDefault();

      var key = $(this).data('key');
      // console.log("key = " + key);
      
      window.location.href = 'food.php?key=' + key;
    });
  });
</script>
    </body>
</html>
