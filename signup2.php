



  <?php
      include('db_connect.php');
      session_start();
      if (isset($_POST['ball']))
      {
          $name=$_POST['name'];
          $address=$_POST['address'];
          $pincode=$_POST['pincode'];
          $state=$_POST['state'];
          $city=$_POST['city'];
          $phone=$_POST['phone'];
          $email=$_POST['email'];
          $userid=$_POST['userid'];
          $password=$_POST['userpassword'];

          $checksql = "select * from login_details where email='$email' or userid='$userid' ";
          $query1 = mysqli_query($con,$checksql);
          $count = mysqli_num_rows($query1);
          if($count>0)
            {
              $_SESSION["print"] = "*****Userid or Email already exists.*****";
            }

          else 

           {


           
          

          $sql="insert into login_details ( name,address,pincode,state,city,phoneno,email,userid,password) values ('$name','$address','$pincode','$state','$city','$phone','$email','$userid','$password')";
          $query=mysqli_query($con,$sql);
          header("location:index.php");
           }
       }
       
  ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    <link rel="stylesheet" href="mycss/style.css">
      <style>
       .errormsg
        {
			    color: #D8000C;
          
        }
      </style>
</head>
<body>

    <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <h1 class="text-center text-dark mt-5">ENTER YOUR DETAILS</h1>

            <?php
            if(isset($_SESSION["print"]))
            {
              ?>
           
            <h4><div class="text-center mb-5 text-dark"><div class="errormsg"><?php echo $_SESSION["print"];?></div></div></h4>
            <div class="card my-5">
             <?php }?>
    
              <form class="card-body cardbody-color p-lg-5" method="POST" action="signup2.php" >
    
                <div class="text-center">
                  <img src="img/foodlogo.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                    width="200px" alt="profile">
                </div>
                
                

                <div class="mb-3"> NAME
                  <input type="text" class="form-control" id="name" name="name" 
                    placeholder="User Name" required>
                </div>

                <div class="mb-3"> ADDRESS
                  <input type="text" class="form-control" id="address" name="address" 
                    placeholder="Address" required >
                </div>


                <div class="mb-3"> PIN CODE
                  <input type="text" class="form-control" id="pincode" name="pincode" 
                    placeholder="Area Pin Code" required >
                </div>

                <div class="mb-3"> STATE
                  <input type="text" class="form-control" id="state" name="state" 
                    placeholder="State" required >
                </div>


                <div class="mb-3"> CITY/DISTRICT
                  <input type="text" class="form-control" id="city" name="city" 
                    placeholder="City" required>
                </div>


                <div class="mb-3"> PHONE NO
                  <input type="text" class="form-control" id="phone" name="phone"
                    placeholder="Phone No" required>
                </div>


                <div class="mb-3"> EMAIL
                  <input type="email" class="form-control" id="email" name="email" 
                    placeholder="Email" required>
                </div>


                <div class="mb-3"> USER ID
                  <input type="text" class="form-control" id="username" name="userid"
                    placeholder="Create Your USER ID" required>
                </div>


                <div class="mb-3"> PASSWORD
                  <input type="password" class="form-control" id="password" name="userpassword" placeholder="Create Your PASSWORD" required>
                </div>


                <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100"  name="ball" >REGISTER</button></div>
                <br>
                <div class="text-center"><a href="index.php">Home</a></div>
                </div>
              </form>
            </div>
    
          </div>
        </div>
      </div>
      <br>

      

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
    