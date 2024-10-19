<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <style>
      .notify{
        color: red;
        font-style: oblique;
        
      }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
    
</head>
<body>
  <form method="post">
    <div class="container mt-5" >
        <div class="row d-flex justify-content-center">
            <div class="col-md-6"><div align="center"><h2>ADMIN LOGIN</h2></div>
                <div class="card px-5 py-5" id="form1">
                    <div class="form-data" v-if="!submitted">
                        <div class="forms-inputs mb-4"> <span>Admin User-Id:</span><br> <input autocomplete="off" type="text" name="adminid" required>
                            
                        </div><hr>
                        <div class="forms-inputs mb-4"> <span>Admin Password:</span><br> <input autocomplete="off" type="password" name="adminpassword" required>
                         <br><div class="notify">Password must be within 25 character!</div>
                        </div><br>
                        <div class="mb-3"> <button v-on:click.stop.prevent="submit" class="btn btn-dark w-100" name="login">Login</button> </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div></form>
</body>
</html>



<?php
		
	include('db_connect.php');
  if(isset($_POST['login']))
  {
    $aid=$_POST['adminid'];
    $apw=$_POST['adminpassword'];
    $sql="select*from admin where loginid='$aid' && loginpassword='$apw'";
    $query=mysqli_query($con,$sql);
    $check=mysqli_num_rows($query);

    if($check==1)
    {
      header("location:adminlist.html");
    }
    else
    {
      header("location:failcon.html");
    }
  }
	
?>