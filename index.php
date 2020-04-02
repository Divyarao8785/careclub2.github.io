<html>
<head>
<title>careclub</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 90vh;
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">careclub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
 <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="about.php">about</a>
      </li>
 <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li> 
 <li class="nav-item">
        <a class="nav-link" href="userinfo.php">login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Donate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/background.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>charity is not a duty but a joy</h3>
      
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/images1.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Giving is not just about make a donation</br>it's about making difference</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/images2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Giving is the greatest act of grace</h3>
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-cener" style="text-align:center">About us</h2>
  </div>
<div class="row">
  <div class="col-lg-6 col-md-6 col-12">
    <img src="images/images3.jpg" style="width:700px;height:500px;">
  </div>

 <div class="col-lg-6 col-md-6 col-12">
   <h1> Your contribution will transform lives.<h1>
   <p>13,40,000 children below 5 die in a year, that is 3,671 under 5 child deaths per day.Nearly half of all child deaths under 5 in India are attributed to undernutrition.</p>
   <a href="about.php">know more</a>
  </div>
</div>
 </section>

<section class="my-5">
   <div class="py-5">
     <h2 class="text-cener" style="text-align:center">Gallery</h2>
  </div>
<div class="container-fluid">
  <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
     <img src="images/images10.jpg" class="img-fluid pb-3">
   </div>
<div class="col-lg-4 col-md-4 col-12">
     <img src="images/images5.jpg" class="img-fluid pb-3">
   </div>
<div class="col-lg-4 col-md-4 col-12">
     <img src="images/images6.jpg" class="img-fluid pb-3">
   </div>
<div class="col-lg-4 col-md-4 col-12">
     <img src="images/images7.jpg" class="img-fluid pb-3">
   </div>
<div class="col-lg-4 col-md-4 col-12">
     <img src="images/images8.jpg" class="img-fluid pb-3">
   </div>
<div class="col-lg-4 col-md-4 col-12">
     <img src="images/images9.jpg" class="img-fluid pb-3">
   </div>
<h1 class="text-center" style="text-align:center;">we have to save these smiles<h1>
 </div>
</div>
</section>

<section class="my-5">
  <div class="py-5">
     <h2 class="text-cener" style="text-align:center">contact us</h2> 
   </div>
<div class="w-50 m-auto">
   <form action="userinfo.php" method="post">
     <div class="form-group">
      <label>username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
     </div>
   </form>
<div>
<div class="w-50 m-auto">
   <form action="userinfo.php" method="post">
     <div class="form-group">
      <label>email-id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
     </div>
   </form>
<div>
<div class="w-50 m-auto">
   <form action="userinfo.php" method="post">
     <div class="form-group">
      <label>mobile no.</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
     </div>
<div class="form-group">
  <label>comments</label>
   <textarea class="form-control" name="comment" >
</textarea>
</div>
<button type="submit" class="btn btn-primary">submit</button>
   </form>
<div>
</section> 
   

<footer>
<p class="p-3 bg-dark text-white text-center">@careclub</p>
</footer>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>