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
<div class="card-deck">

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="assets/images/suji.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title heading">SujithPalace</h4>
      <!--Text-->
      <p class="card-text">A beautiful narure</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md visit" data-key="1" >Visit</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="assets/images/deva.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title heading" >Deva Hotels</h4>
      <!--Text-->
      <p class="card-text">A Pure vegeterian hotel with delicious food</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md visit" data-key="2">Visit</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://static.eazydiner.com/resized/1080X400/pages%2F595%2Fimage20180822064926.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title heading">Maharaja Hotels</h4>
      <!--Text-->
      <p class="card-text">Click here to get hygiene and tasty foods.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md visit" data-key="3">Visit</button>

    </div>

  </div>
  <!-- Card -->

</div>
<!-- Card deck -->
<!-- Card deck -->
<div class="card-deck">

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://content4.jdmagicbox.com/comp/def_content/pure_veg_restaurants/default-pure-veg-restaurants-3.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title heading">Kshama's </h4>
      <!--Text-->
      <p class="card-text">You can enjoy a variety of tasty  veg dishes here within affordable cost</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md visit" data-key="4">Visit</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="assets/images/mysore1.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title heading" >Mysore Specials</h4>
      <!--Text-->
      <p class="card-text">You can enjoy a variety of tasty Veg dishes here.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md visit" data-key="5">Visit</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4">

    <!--Card image-->
    <div class="view overlay">
      <img class="card-img-top" src="https://get.wallhere.com/photo/food-tomatoes-white-background-meat-fish-Onions-fried-chicken-lettuce-cuisine-dish-produce-hors-d-oeuvre-fried-food-chicken-legs-garnish-chicken-meat-tandoori-chicken-614579.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title heading">Chicken center</h4>
      <!--Text-->
      <p class="card-text">You can enjoy a variety of tasty non veg dishes here. Normal budget with good ambience. polite staff and nice biriyani's</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-light-blue btn-md visit" data-key="6">Visit</button>

    </div>

  </div>
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
