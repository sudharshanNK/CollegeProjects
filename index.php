<?php 
    session_start();
    
    session_destroy();
    
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
        /* Make the image fully responsive */
        .container {
            margin: 0px;

            width: 100%;
        }
        

        body{
    background: url(assets/images/bg4.jpeg) no-repeat;
    background-size:cover;
    color: white;
    font-family: Arials;
      
}

#demotext {
color: #A7113C;
background: #FFFFFF;
text-shadow: 2px 0 0px #800040, 3px 2px 0px rgba(77,0,38,0.5), 3px 0 3px #FF002B, 5px 0 3px #800015, 6px 2px 3px rgba(77,0,13,0.5), 6px 0 9px #FF5500, 8px 0 9px #802A00, 9px 2px 9px rgba(77,25,0,0.5), 9px 0 18px #FFD500, 11px 0 18px #806A00, 12px 2px 18px rgba(77,66,0,0.5), 12px 0 30px #D4FF00, 14px 0 30px #6A8000, 15px 2px 30px rgba(64,77,0,0.5), 15px 0 45px #80FF00, 17px 0 45px #408000, 17px 2px 45px rgba(38,77,0,0.5);
color: #A7DD3C;
background: #111111;
}

#demotext1 {
color: black;

text-shadow: 2px 0 0px #100040, 3px 2px 0px rgba(77,0,38,0.5), 3px 0 3px #1F002B, 5px 0 3px #800015, 6px 2px 3px rgba(77,0,13,0.5), 6px 0 9px #FF5500, 8px 0 9px #802A00, 9px 2px 9px rgba(77,25,0,0.5), 9px 0 18px #FFD500, 11px 0 18px #806A00, 12px 2px 18px rgba(77,66,0,0.5), 12px 0 30px #D4FF00, 14px 0 30px #6A8000, 15px 2px 30px rgba(64,77,0,0.5), 15px 0 45px #80FF00, 17px 0 45px #408000, 17px 2px 45px rgba(38,77,0,0.5);
color: #A7DD3C;
text-align:center;

}
   
      

        .container {
            width: 100%;
            margin-right: 980px;
        }
        .bg{
         
    background-size:cover;
    height:300px;
    margin-top:100px;
    width:800px;
    font-family: Arials;
   
    border:35px;

        }

        .pl-5, .px-5 {
    padding-left: 2rem!important;
}
.pb-5, .py-5 {
    padding-bottom: 1rem!important;
}
.pr-5, .px-5 {
    padding-right: 2rem!important;
}
.pt-5, .py-5 {
    padding-top: 1.5rem!important;
}
.md-form {
    position: relative;
    margin-top: 1rem;
    margin-bottom: 1.5rem;
}
.mb-5, .my-5 {
    margin-bottom: 1rem!important;
}

.md-form label {
    position: absolute;
    top: 0;
    left: 0;
    font-weight:bold;
    font-size: 1rem;
    transform-origin: 0 100%;
    transform: translateY(12px);
    color: white;
}
    </style>
</head>
<body>

<div>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

  <!-- Navbar brand -->


  <!-- Collapse button -->
  

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalAdminForm" >Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalLoginForm" >Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#darkModalForm" >Signup</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html" >About Us</a>
      </li>
      <!-- Dropdown -->
    
    </ul>
    <!-- Links -->

    
  </div>
  <!-- Collapsible content -->

</nav>
<center>
<div id="demotext" style="background: rgba(0, 151, 19, 0.3);height:150px;width:500px;margin-top:50px;padding:50px;text-align:center;">
    <h1 >FOOD MANIA</h1>

</div>
</center>

<!--/.Navbar-->
<!-- Admin Login -->
<div class="modal fade" id="modalAdminForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="background-image: url('https://images.pexels.com/photos/461198/pexels-photo-461198.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="loginAdmin.php" method="POST">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" name="Amail" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" name="Apass2" class="form-control validate">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1" name="Alogin" >Login</button>
      </div>
    </div>
    </form>
  </div>
</div>


<!--Admin Login -->
</div>
<!-- Modal Signup -->
<div class="modal fade" id="darkModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog form-dark" role="document">
    <!--Content-->
    <div class="modal-content card card-image" style="background-image: url('https://i.pinimg.com/originals/d3/6d/46/d36d462db827833805497d9ea78a1343.jpg');">
      <div class="text-white rgba-stylish-strong py-5 px-5 z-depth-4">
        <!--Header-->
        <div class="modal-header text-center pb-4">
          <h3 class="modal-title w-100 white-text font-weight-bold" id="myModalLabel"><strong>SIGN</strong> <a
              class="green-text font-weight-bold"><strong> UP</strong></a></h3>
          <button type="button" class="close white-text" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!--Body-->
        <form action="signupPhp.php" method="POST" >
        <div class="modal-body">
          <!--Body-->
          <div class="md-form mb-5">
            <input type="text" id="Form-name" name="name1" class="form-control validate white-text" required>
            <label class="label1" data-error="wrong" data-success="right" for="Form-name">Your Name</label>
          </div>
          
          <div class="md-form mb-5">
            <input type="text" id="Form-phone" name="ph1" class="form-control validate white-text" required>
            <label class="label1" data-error="wrong" data-success="right" for="Form-phone">Your Phone</label>
          </div>
          <div class="md-form mb-5">
            <input type="email" id="Form-email5" name="mail1"  class="form-control validate white-text" required>
            <label class="label1" data-error="wrong" data-success="right" for="Form-email5">Your email</label>
          </div>
         

          <div class="md-form pb-3">
            <input type="password" name="pass1" id="Form-pass5" class="form-control validate white-text" required>
            <label class="label1" data-error="wrong" data-success="right" for="Form-pass5">Your password</label>
            </div>
           
            
          <!--Grid row-->
          <div class="row d-flex align-items-center mb-4">

            <!--Grid column-->
            <div class="text-center mb-3 col-md-12">
              <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1" name="signup" >Sign up</button>
            </div>
            <!--Grid column-->

          </div>
          <!--Grid row-->

          <!--Grid row-->
          <div class="row">

            <!--Grid column-->
            <div class="col-md-12">
              <p class="font-small white-text d-flex justify-content-end">Have an account? <a href="index.php" class="green-text ml-1 font-weight-bold">
                  Log in</a></p>
            </div>
            <!--Grid column-->

          </div>
          </form>
          <!--Grid row-->

        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal -->

<!-- Login -->
<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="background-image: url('assets/images/loginBg.jpg');">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="login.php" method="POST">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="defaultForm-email" name="mail2" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="defaultForm-pass" name="pass2" class="form-control validate" required>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1" name="login" >Login</button>
      </div>
    </div>
    </form>
  </div>
</div>
<center>
<div  id="demotext1"  class="bg " style="background-color:red;">
</br></br></br>
<h2 style="margin-top:40px;text-align:center;">   A beautiful website that gives you a platform where you can order foods from different hotels..</h2>

</div>
</center>
<!-- Login -->
<!-- Carousal image -->

<!-- <div width="100%">
        <div>

            <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="500">

                <!-- Indicators -->
                <!-- <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
              <!--   <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/bg4.jpeg" alt="Los Angeles">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/bg3.jpg" alt="Chicago">
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/bg5.jpg" alt="New York">
                    </div>
                </div>
            </div>

        </div>
    </div> -->
    <!-- couresal image -->
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/js/mdb.min.js"></script>
<script>
</body>
</html>