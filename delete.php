<?php
include('db_connect.php');
$id=$_GET['rn'];
$sql="delete from login_details where serial_no='$id'";
$query=mysqli_query($con,$sql);
header("location:admin.php");
if($query)
  {
    echo "Deletion of data successfull.";
  }
else
{
  echo"error";
}

?>



