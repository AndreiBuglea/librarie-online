<?php 
include "config.php";
?>
<!DOCTYPE html>
<!-- https://www.sliderrevolution.com/resources/css-animated-background/ -->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>EquiLibri :: Homepage</title>
<link rel="icon" type="image/png" href="img/favicon.png">
<link href="plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="plugin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="css/equi.css" rel="stylesheet">
<link rel="stylesheet" href="plugin/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="plugin/owl-carousel/owl.theme.css">
</head>
<body id="page-top">
<!-- <div id="loader" class="loading-screen"> -->
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
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown"> <a class="dropdown-item" href="login.php">Log-in</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="logout.php">Log-out</a> </div>
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
    <li class="nav-item"> <a class="nav-link" href="cart.php" > <i class="fas fa-fw fa-shopping-cart"></i> <span>Cart</span> </a> </li>
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
      <div class="top-category section-padding mb-4">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <h6>Featured: Novels</h6>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-carousel-category">
              <div class="item">
                <div class="category-item"> <a href="#"> <img class="img-fluid" src="img/horror.png" alt="">
                  <h6>Horror</h6>
                  <p>5 Purchases</p>
                  </a> </div>
              </div>
              <div class="item">
                <div class="category-item"> <a href="#"> <img class="img-fluid" src="img/adventure.png" alt="">
                  <h6>Adventure</h6>
                  <p>5 Purchases</p>
                  </a> </div>
              </div>
              <div class="item">
                <div class="category-item"> <a href="#"> <img class="img-fluid" src="img/mystery.png" alt="">
                  <h6>Mystery</h6>
                  <p>5 Purchases</p>
                  </a> </div>
              </div>
              <div class="item">
                <div class="category-item"> <a href="#"> <img class="img-fluid" src="img/thriller.png" alt="">
                  <h6>Thriller</h6>
                  <p>5 Purchases</p>
                  </a> </div>
              </div>
              <div class="item">
                <div class="category-item"> <a href="#"> <img class="img-fluid" src="img/action.png" alt="">
                  <h6>Action</h6>
                  <p>5 Purchases</p>
                  </a> </div>
              </div>
              <div class="item">
                <div class="category-item"> <a href="#"> <img class="img-fluid" src="img/fantasy.png" alt="">
                  <h6>Fantasy</h6>
                  <p>5 Purchases</p>
                  </a> </div>
              </div>
              <div class="item">
                <div class="category-item"> <a href="#"> <img class="img-fluid" src="img/psychology.png" alt="">
                  <h6>Psychological</h6>
                  <p>5 Purchases</p>
                  </a> </div>
              </div>
              <div class="item">
                <div class="category-item"> <a href="#"> <img class="img-fluid" src="img/historical.png" alt="">
                  <h6>Historical</h6>
                  <p>5 Purchases</p>
                  </a> </div>
              </div>
              <div class="item">
                <div class="category-item"> <a href="#"> <img class="img-fluid" src="img/science-fiction.png" alt="">
                  <h6>Science fiction</h6>
                  <p>5 Purchases</p>
                  </a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr>
        
      <!-- banner -->

<div class="bd-example mb-5">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/wip2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/wip2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
      <div class="book-block section-padding">
        <div class="row">
          <div class="col-md-12">
            <div class="main-title">
              <div class="btn-group float-right right-action"> <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Order <i class="fa fa-caret-down" aria-hidden="true"></i> </a>
                <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Most Bought</a> <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Most Viewed </a> </div>
              </div>
              <h6>Books</h6>
            </div>
          </div>
          <?php
					$query="SELECT * from books LIMIT 12";
					$result = mysqli_query($link, $query);
					while ($row = mysqli_fetch_assoc($result)) {
					?>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="book-card">
              <div class="book-card-image"><a href="product.php?id=<?php echo ($row['id']) ?>"><img class="img-fluid" height="393"src="img/<?php echo ($row['image']) ?>" alt=""></a> </div>
              <div class="book-card-body"> 
                <div class="book-title"> <a href="product.php?id=<?php echo ($row['id']) ?>"><?php echo ($row['name']) ?></a> </div>
                <div class="book-page text-success"> <a href="#"><?php echo ($row['genre']) ?></a> </div>
                <div class="book-view"> <?php echo ($row['price']) ?> &nbsp;<i class="fas fa-user-alt"></i><?php echo ($row['author']) ?></div>
				    </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div> 
    </div>
    <!-- Footer -->
    <footer class="sticky-footer">
      <div class="container">
        <div class="d-flex justify-content-center">
          <p>&copy; Copyright 2022 <strong class="text-dark">EquiLibri</strong>. All Rights Reserved<br>
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

  $(window).on('load', function(){
    setTimeout(removeLoader, 2000);
  });
  function removeLoader(){
    $( "#loader" ).fadeOut(500, function() {
      $( "#loader" ).remove();
    });  
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