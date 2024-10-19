<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <link rel="stylesheet" href="mycss/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Login</h2>
            <div class="text-center mb-5 text-dark">fooder</div>
            <div class="card my-5">
    
              <form class="card-body cardbody-color p-lg-5" method="POST">
    
                <div class="text-center">
                  <img src="img/foodlogo.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
    
                <div class="mb-3">
                  <input type="text" class="form-control" id="Username" aria-describedby="emailHelp"
                    placeholder="User id" name="userid" required>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" id="password" placeholder="password" name="password"required>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" name="login">Login</button></div>
                <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
                  Registered? <a href="signup2.php" class="text-dark fw-bold"> Create an
                    Account</a><br>
                    <div class="text-center"><a href="index.php">Home</a></div>
                </div>
              </form>
            </div>
    
          </div>
        </div>
      </div>
      <br><br><br><br>
    

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
</body>
</html>

<?php
		
	include('db_connect.php');
  session_start();
  if(isset($_POST['login'])) 
  {
    $nam=$_POST['name'];
    $uid=$_POST['userid']; 
    $pw=$_POST['password'];
    $sql="select * from login_details where userid='$uid' && password='$pw'";
    $query=mysqli_query($con,$sql);
    $check=mysqli_num_rows($query);

    if($check==1)
    {
      $_SESSION["id"] = "$uid";
      header("location:index.php");
    }
    else
    {
      header("location:failcon.html");
    }
  }
	
?>