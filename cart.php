<?php 
session_start();
include "config.php";
?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>EquiLibri :: Cart</title>
<link rel="icon" type="image/png" href="img/favicon.png">
<link href="plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="plugin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="css/equi.css" rel="stylesheet">
<link href="css/product.css" rel="stylesheet">
<link rel="stylesheet" href="plugin/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="plugin/owl-carousel/owl.theme.css">
</head>
<body id="page-top">
<nav class="navbar navbar-expand navbar-light static-top equi-nav">
  <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle"> <i class="fas fa-bars"></i> </button>
  <a class="navbar-brand mr-1" href="index.php"><img class="img-fluid" alt="" src="img/logo.png"></a> 
  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline mx-auto mr-0 mr-md-5 my-2 my-md-0 equi-navbar-search">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <div class="input-group-append">
        <button class="btn btn-light" type="button"> <i class="fas fa-search"></i> </button>
      </div>
    </div>
  </form>
  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0 equi-right-navbar">
    <li class="nav-item mx-1"> <a class="nav-link" href="cart.php"> <i class="fas fa-shopping-cart fa-2x"></i> <span class="badge badge-info">9</span> </a> </li>
    <li class="nav-item dropdown no-arrow mx-1"> <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-user-circle fa-2x"></i> </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown"> <a class="dropdown-item" href="login.php">Sign in</a> <a class="dropdown-item" href="">Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="logout.php">Logout</a> </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1"> <a class="nav-link dropdown-toggle" href="#" id="settingsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-cogs fa-2x"></i> </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="settingsDropdown"> <a class="dropdown-item" href="#">Language</a> </div>
    </li>
  </ul>
</nav>
<div id="wrapper"> 
  <!-- Sidebar -->
  <ul class="sidebar navbar-nav">
    <li class="nav-item active"> <a class="nav-link" href="index.php"> <i class="fas fa-fw fa-home"></i> <span>Home</span> </a> </li>
    <li class="nav-item"> <a class="nav-link" href="cart.php"> <i class="fas fa-fw fa-shopping-cart"></i> <span>Cart</span> </a> </li>
    <li class="nav-item"> <a class="nav-link" href=""> <i class="fas fa-fw fa-user-alt"></i> <span>Authors</span> </a> </li>
    <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-list-alt"></i> <span>Genres</span> </a>
      <div class="dropdown-menu"> <a class="dropdown-item" href="categories.html">Novels</a> <a class="dropdown-item" href="categories.html">School Books</a> <a class="dropdown-item" href="categories.html">Manuals</a> <a class="dropdown-item" href="categories.html">Biographies</a><a class="dropdown-item" href="categories.html">Cooking Books</a><a class="dropdown-item" href="categories.html">For Children</a><a class="dropdown-item" href="categories.html">Art Books</a><a class="dropdown-item" href="categories.html">Manga</a></div> 
    </li>
  </ul>
  <div id="content-wrapper">
    <div class="container-fluid pb-0">
      <div class="top-mobile-search">
        <div class="row">
          <div class="col-md-12">
            <form class="mobile-search">
              <div class="input-group">
                <input type="text" placeholder="Search for..." class="form-control">
                <div class="input-group-append">
                  <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <hr>
      <div class="book-block section-padding">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <div class="btn-group float-right right-action"> <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Order <i class="fa fa-caret-down" aria-hidden="true"></i> </a>
                <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Most Bought</a> <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Most Viewed </a> </div>
              </div>
              <h6 class="Title"> Your Cart:</h6> 
          <?php
            if(!empty($_SESSION['cart'])){
            $in = implode(',',$_SESSION['cart']);
					$query="SELECT * from books WHERE id IN($in)";
					$result = mysqli_query($link, $query);
					while ($row = mysqli_fetch_assoc($result)) {
            $cartTotal = isset($cartTotal) ? $cartTotal : 0;
					$cartTotal = $cartTotal + ($row["price"]);	
					?>
            </div>
          </div>
   <div class="col-md-12">
     <div class="Divmargin">
			  	<img class="book-cover" src="img/<?php echo $row["image"]?>" width="220" height="400">
       <div class="positioning" style="padding=50px">
         <div class="Ext"><a > <?php echo $row["name"]?></a></div><br>
           <div class="Ext">
               <p>Genre:  <?php echo $row["genre"]?> </p>
               <p>Author: <?php echo $row["author"]?></p>
			  	  <p>ID: <?php echo $row["id"]?> </p>
			  	<p>Price: <?php echo $row["price"]?></p>
            </div>
        </div>
     </div>
   </div>  


   <?php }
        $_SESSION['total'] = $cartTotal;
        ?>
        <div>€<?php echo $cartTotal; ?></div>
    <div><a href="empty.php">Buy</a></div>
    <br>
    <div><a href="empty.php">Empty Cart</a> </div>
      <?php  }else{ ?>
        <h6 class="Title">There are no articles in the cart</h6> 
        </div>
      </div>
    <?php  } ?>
        <br>

    <!-- Footer -->
    <footer class="sticky-footer">
      <div class="container">
        <div class="d-flex justify-content-center">
          <p>&copy; Copyright 2021 <strong class="text-dark">Equilibri</strong>. All Rights Reserved<br>
          </p>
		
        </div>
      </div>
    </footer>
  </div>
</div>

<a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a> 
<script src="plugin/jquery/jquery.min.js"></script> 
<script src="plugin/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="plugin/jquery-easing/jquery.easing.min.js"></script> 
<script src="plugin/owl-carousel/owl.carousel.js"></script> 
<script src="js/custom.js"></script>
    <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
    
</body>
</html>