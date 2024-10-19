

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
            <h2 class="text-center text-dark mt-5">UPDATE USER DETAILS</h2>
            <div class="text-center mb-5 text-dark">admin</div>
            <div class="card my-5">
    
              <form class="card-body cardbody-color p-lg-5" method="POST" >
    
               
                <?php
                include('db_connect.php');
                $id=$_GET['rn'];
                $sql="select*from login_details where serial_no='$id'";
                $check=mysqli_query($con,$sql);
                $array=mysqli_fetch_array($check);
                
                
                ?>
                 
                
                
                

                <div class="mb-3"> NAME
                  <input type="text" class="form-control" name="editname" 
                    value="<?php echo $array['name']?>" required>
                </div>

                <div class="mb-3"> ADDRESS
                  <input type="text" class="form-control"name="editaddress" 
                  value="<?php echo $array['address']?>" required>
                </div>


                <div class="mb-3"> PIN CODE
                  <input type="text" class="form-control" name="editpincode" 
                  value="<?php echo $array['pincode']?>" required>
                </div>

                <div class="mb-3"> STATE
                  <input type="text" class="form-control" name="editstate" 
                  value="<?php echo $array['state']?>" required>
                </div>


                <div class="mb-3"> CITY/DISTRICT
                  <input type="text" class="form-control" name="editcity" 
                  value="<?php echo $array['city']?>" required>
                </div>


                <div class="mb-3"> PHONE NO
                  <input type="text" class="form-control" name="editphone"
                  value="<?php echo $array['phoneno']?>" required>
                </div>


                <div class="mb-3"> EMAIL
                  <input type="text" class="form-control" name="editemail" 
                  value="<?php echo $array['email']?>" required>
                </div>


                <div class="mb-3"> USER ID
                  <input type="text" class="form-control" name="edituserid"
                  value="<?php echo $array['userid']?>" required>
                </div>


                <div class="mb-3"> PASSWORD
                  <input type="text" class="form-control" name="edituserpassword" value="<?php echo $array['password']?>" required>
                </div>

                


                <div class="text-center"><button type="submit" class="btn btn-primary" name="update">Update</button></div>
                <br>
                <div class="text-center"><a href="#">Admin Control Panel</a></div>
                </div>
              </form>
            </div>
    
          </div>
        </div>
      </div>


        <?php
          if(isset($_POST['update']))
          {
             $name=$_POST['editname'];
             $address=$_POST['editaddress'];
             $pincode=$_POST['editpincode'];
             $state=$_POST['editstate'];
             $city=$_POST['editcity'];
             $phone=$_POST['editphone'];
             $email=$_POST['editemail'];
             $userid=$_POST['edituserid'];
             $password=$_POST['edituserpassword'];

             $update="update login_details set name='$name',address='$address',pincode='$pincode',state='$state',city='$city',phoneno='$phone',email='$email',userid='$userid',password='$password' where serial_no='$id'";

             $query1=mysqli_query($con,$update);

             if($query1)
              {
                 header("location:admin.php");
              }
             else
              {
                 echo "error";
              }

          }     

        ?>
      

     

</body>
</html>