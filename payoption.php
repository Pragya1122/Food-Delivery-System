<?php
include('db_connect.php');

?>

<?php
         
     session_start();
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
   
<style>
    h5
    {
        text-decoration: none;
        text-align: center;
    }

    .verify
    {
        color:red;
        text-align:center;
    }
    .login 
    {
        color:solid black;
        text-decoration:none;
        font-weight:30px;
        text-align:center;
        
    }

</style>

</head>
<body>
    <div class="container"><br>
   
        <h5 class="display-5"><strong>Choose your payment option</strong></h5>
       
        

            <br>
  <div class="list-group">
    <?php
     if(isset($_SESSION["id"]))
      {
    ?>
                
                <a href="codconfirm.html" class="list-group-item list-group-item-action">Cash On Delivery (COD)</a><br>
                <a href="payment.html" class="list-group-item list-group-item-action">DEBIT/CREDIT CARD</a><br>
                <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">PAYTM</a>
    <?php 
      }
      else
      {?>
      <br> <h2 class="verify">Please login to continue.</h2><br><br>
      <a class="login" href="login1.php">LOGIN</a>
      <?php
      }?>
                
                
              </div>
    </div>
    
</body>
</html>