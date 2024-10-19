<?php
include('db_connect.php');
$id=$_GET['sn'];
$sql="delete from contact_us where serial_number='$id'";
$query=mysqli_query($con,$sql);
if($query)
{
    header("location:admincontact.php");
}
else
{
  echo"error";
}

?>