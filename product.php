<!DOCTYPE html><html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>EquiLibri :: Products</title>
<link href="img/favicon.png" rel="icon" type="image/png">
<link href="plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="plugin/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="css/equi.css" rel="stylesheet">
<link href="css/product.css" rel="stylesheet">
<link href="plugin/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="plugin/owl-carousel/owl.theme.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
</head>
    <?php
    
include "config.php";
    $id= $_GET['id'];
        setcookie("id", $id, time()+3600) ;
        $sql = "SELECT * FROM books WHERE id = $id";
        $rez = $link->query($sql);
    foreach( $rez as $row) 
     {
            $name = $row ['name'] ;
              $genre = $row['genre'] ;
              $author = $row['author'] ;
              $image = $row['image'] ;
            $id = $row['id'] ;
              $price = $row['price'] ;
	          $description = $row['description'];
     }
?>
   
<body id="page-top">
<nav class="navbar navbar-expand navbar-light static-top equi-nav sticky-top">
  <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle"> <i class="fas fa-bars"></i> </button>
  <a href="index.php" class="navbar-brand mr-1"><img src="img/logo.png" alt="" class="img-fluid"></a> 
  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline mx-auto mr-0 mr-md-5 my-2 my-md-0 equi-navbar-search">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <div class="input-group-append">
        <button type="button" class="btn btn-light"> <i class="fas fa-search"></i> </button>
      </div>
    </div>
  </form>
  <!-- Navbar -->
  <ul class="navbar-nav ml-auto ml-md-0 equi-right-navbar">
    <li class="nav-item mx-1"> <a href="cart.php" class="nav-link"> <i class="fas fa-shopping-cart fa-2x"></i> <span class="badge badge-info">9</span> </a> </li>
    <li class="nav-item dropdown no-arrow mx-1"> <a href="#" class="nav-link dropdown-toggle" id="accountDropdown" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown"> <i class="fas fa-user-circle fa-2x"></i> </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown"> <a href="link interno" class="dropdown-item">Sign in</a>
        <div class="dropdown-divider"></div>
        <a href="link interno" class="dropdown-item">Logout</a> </div>
    </li>
    <li class="nav-item dropdown no-arrow mx-1"> <a href="#" class="nav-link dropdown-toggle" id="settingsDropdown" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown"> <i class="fas fa-cogs fa-2x"></i> </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="settingsDropdown"> <a href="#" class="dropdown-item">Language</a> </div>
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
                <input type="text" class="form-control" placeholder="Search for...">
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
			  <div class="Divmargin">
			  	<img class="book-cover" src="img/<?php echo $image?>" width="290" height="500">
			  
			  	<div class="positioning" style="padding=100px">
              	<div class="Title"><a > <?php echo $name; ?></a></div><br>
			  	<div class="Ext">
                <p>Genre: <?php echo $genre ." "?></p>
			  	<p>ID: <?php echo $id ." "?></p>
			  	<p>Price: <?php echo $price ." €"?></p>
			  	<p>Author: <?php echo $author ." "?></p>
			  	<p>Description: <?php echo $description ." "?></p><br>
              </div>
			  	</div>
			  </div>
			</div>
			
			<div id="distance" class="row d-flex">
        <a class="butonel" id="btn" href="adding.php?id=<?php echo $id ?>"><span class="noselect">Add to Cart</span><div id="circle"></div></a>
			</div>
			</div>
	
          </div> 
      </div>
    <!-- Footer -->
    <footer class="sticky-footer">
      <div class="container">
        <div class="d-flex justify-content-center">
          <p>© Copyright 2022 <strong class="text-dark">EquiLibri</strong>. All Rights Reserved<br>
          </p>
        </div>
      </div>
    </footer>
  </div>
</div>
<a class="scroll-to-top rounded" href="#page-top" style="display: none;"> <i class="fas fa-angle-up"></i> </a> 
<script src="plugin/jquery/jquery.min.js"></script> 
<script src="plugin/bootstrap/js/bootstrap.bundle.min.js"></script> 
<script src="plugin/jquery-easing/jquery.easing.min.js"></script> 
<script src="plugin/owl-carousel/owl.carousel.js"></script> 
<script src="js/custom.js"></script>
</body></html>