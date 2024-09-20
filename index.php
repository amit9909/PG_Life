<!DOCTYPE html>
<html lang="en">
<head>
   <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&Display= swap" rel="stylesheet">
</head>
<body>

<?php include 'menu.php';?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\1719924130946.jpg" alt="Amit 1" width="100" height="100">
    </div>
    <div class="carousel-item">
      <img src="images\1719924367411.jpg" alt="kumar" width="100" height="100">
    </div>
    <div class="carousel-item">
      <img src="images\1721484553870.jpg" alt="verma" width="100" height="100">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">

<div class="py-5">
    <h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid"> 
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/1719924130946.jpg" class="img-fluid aboutimg" > 
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2> I am amit's math </h2>
            <p class ="py-4"> <b>Welcome to Amit's Math, your go-to channel for simplifying
                 complex math concepts! Whether you're tackling algebra,
                  calculus, or geometry, we break it down step-by-step 
                  in easy-to-follow tutorials. Join us to sharpen your
                   skills, boost your confidence, and master math with 
                   clear explanations and practical tips.
                    Let’s make learning math fun and accessible for 
                    everyone!</b></p> 
                    <a href ="about.php" class="btn btn-success">Check More...</a>
        </div>
    </div>
</div>
</section>
<section>

<div class="py-5">
    <h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
<div class="row">

    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="images\1721484737867.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Mathematics</h4>
    <p class="card-text">Some example text.</p>
    <a href="services.php" class="btn btn-primary">See Profile</a>
  </div>
</div>


    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="images\1677418524860.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Machine Learning</h4>
    <p class="card-text">Some example text.</p>
    <a href="services.php" class="btn btn-primary">See Profile</a>
  </div>
</div>


    </div>
    <div class="col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="images\1677613125519.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Data Structure & Algorithm</h4>
    <p class="card-text">Some example text.</p>
    <a href="services.php" class="btn btn-primary">See Profile</a>
  </div>
</div>
 </div>
</div>
</section>

<section class="my-5">
<div class="py-5">
    <h2 class="text-center">Gallery</h2>
</div>
<div class="container-fluid">
<div class="row">
    <div class="col-lg-4 col-md-4 col-12">
        <img src ="images\1677613190523.jpg" class=img-fluid pb-4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src ="images\1677613190523.jpg" class=img-fluid pb-4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src ="images\1677613190523.jpg" class=img-fluid pb-4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src ="images\1677613190523.jpg" class=img-fluid pb-4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src ="images\1677613190523.jpg" class=img-fluid pb-4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src ="images\1677613190523.jpg" class=img-fluid pb-4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src ="images\1677613190523.jpg" class=img-fluid pb-4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src ="images\1677613190523.jpg" class=img-fluid pb-4>
    </div>
    <div class="col-lg-4 col-md-4 col-12">
        <img src ="images\1677613190523.jpg" class=img-fluid pb-4>
    </div>
</div>
</div>
</section>

<section class="my-5">
<div class="py-5">
    <h2 class="text-center">Gallery</h2>
</div>
<div class="w-50 m-auto">
<form action="userinfo.php" method="post">
    <div class="form-group">
        <label>UserName</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
        <label>Mobile number</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
    </div>
    <div class="form-group">
        <label>Comments</label>
        <textarea class="form-control" name="comments">

        </textarea>
        
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</section>

<footer>
    <p class="p-3 bg-dark text-white text-center">@amitsmathResearchCenter</p>
</footer>




  <script src="https://cdn.jsdelivr.net/npm/jquery@4.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>