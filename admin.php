

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
 
   <style>

    .table{
        border:3px;
        
    }
    .table tr th{
        color:solid black;
        text-align:center;
        font-size:15px;
        padding:4px 3px;
        text-decoration:;


    }
    .table tr td{
        color:solid black;
        text-align:center;
        font-size:13px;
    }
    .heading{
        text-align:center;
        color:red;
    }
    .btn a{
        text-decoration:none;
        color:white;
    }
   

       

   </style>


</head>
<body>
<div class="container-fluid">
    <div class="heading"><h1>USER DETAILS</h1></div>

        
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">SERIAL NO.</th>
                    <th scope="col">NAME</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">PIN CODE</th>
                    <th scope="col">STATE</th>
                    <th scope="col">CITY</th>
                    <th scope="col">PHONE NO.</th>
                    <th scope="col">EMAIL ID</th>
                    <th scope="col">USER ID</th>
                    <th scope="col">USER PASSWORD</th>
                    <th colspan="3" scope="col">ADMIN ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                 include('db_connect.php');
                 $sql="select * from login_details";
                 $query=mysqli_query($con,$sql);
                  
                 while($data=mysqli_fetch_array($query))
                  {
                 ?>
                <tr>
                    <td><b><?php echo $data['serial_no'];?></b></td>
                    <td><?php echo $data['name'];?></td>
                    <td><?php echo $data['address'];?></td>
                    <td><?php echo $data['pincode'];?></td>
                    <td><?php echo $data['state'];?></td>
                    <td><?php echo $data['city'];?></td>
                    <td><?php echo $data['phoneno'];?></td>
                    <td><?php echo $data['email'];?></td>
                    <td><?php echo $data['userid'];?></td>
                    <td><?php echo $data['password'];?></td>
                    <td><button class="btn btn-warning"><a href="update.php?rn=<?php echo $data['serial_no']?>">Edit</a></button></td>
                    <td><button class="btn btn-danger"><a href='delete.php?rn=<?php echo $data['serial_no']?>'>Delete</button></a></td>
                    <td><button onclick="window.print()" class="btn btn-secondary">Print</button></td>

                </tr><?php
                      }
                     ?>
                     
            </tbody>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
                       integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
                           crossorigin="anonymous"></script>
        </table>
   
</div>
</body>
</html>

