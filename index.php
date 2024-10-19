<?php
include('db_connect.php');

?>

<?php
         
     session_start();
     
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
    <style>
      .card-img-top 
      {
       width: 100%;
       height: 11vw;
       object-fit: cover;
      }  

      .abcd
      {
        margin-left: 20px;
        text-decoration:none;
        color:solid black;
      }
      .d-flex .btn a
      {
        text-decoration: none;
        color:black;
      }
     
    </style>
</head>

<body>


  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="img/foodlogo1.jpg" alt="..." height="36"><b>       OrderEat</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="aboutus.html">ABOUT</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              SIGNUP/LOGIN
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="signup2.php">Signup</a>
              </li>
              <li><a class="dropdown-item" href="login1.php">Login</a></li>
              <li>
              <li><a class="dropdown-item" href="logout.php">logout</a></li>
              <li>
              
                
                
              <hr class="dropdown-divider">
              <li><a class="dropdown-item" href="adminlogin.php">Admin</a>
              
            </ul>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="popover" data-bs-title="Popover title"
              data-bs-content="And here's some amazing content. It's very engaging. Right?"><a class="nav-link"
                href="menu.html">MENU</a>
          </li></button>
           
<?php
  if(isset($_SESSION["id"]))
  {
?>
          <li class="nav-item"><div class="abcd">
            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="popover" data-bs-title="Popover title"
              data-bs-content="And here's some amazing content. It's very engaging. Right?"><a class="nav-link"
                href="profile.php">My Profile</a>
          </li></div></button>

<?php }?>




        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><a href="menu.html">Search</a></button>
        </form>
        
      </div>
    </div>
  </nav>
 
  


  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slideimg1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block text-white">
          <h5>WELCOME</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slideimg2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Eat the best</h5>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slideimg3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>We are here to serve you best</h5>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <div class="container">
    <div class="row p-3">
      <div class="col-md-3 col-sm-12 p-3">
        <div class="card" style="width: 18rem;">
          <img src="img/cardimg1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Biriyani</h5>
            <p class="card-text">Grab the best biriyani in the town now at offer price.</p>
            <a href="menu.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>



      <div class="col-md-3 col-sm-12 p-3">
        <div class="card" style="width: 18rem;">
          <img src="img/cardimg2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Rolls</h5>
            <p class="card-text">Order tasty chicken rolls and enjoy at your home.</p>
            <a href="menu.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>



      <div class="col-md-3 col-sm-12 p-3">
        <div class="card" style="width: 18rem;">
          <img src="img/cardimg3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Chinese</h5>
            <p class="card-text">Enjoy the best chinese items from your home with family.</p>
            <a href="menu.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>


      <div class="col-md-3 col-sm-12 p-3">
        <div class="card" style="width: 18rem;">
          <img src="img/cardimg4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Deserts</h5>
            <p class="card-text">End your meal with a great taste.  order delicious deserts now...</p>
            <a href="menu.html" class="btn btn-primary">Order Now</a>
          </div>
        </div>
      </div>
    </div>


  </div>








  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-12">
        <footer class="page-footer font-small blue bg-warning bg-opacity-75">

          <div class="footer-copyright text-center py-2">
            <img src="img/foodlogo.jpg" alt="..." height="45">
            © 2022 Copyright:
            OrderEat.inc</a>
          </div>
        </footer>
      </div>
    </div>
  </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
</body>

</html>