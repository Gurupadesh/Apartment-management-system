<?php session_start();?>
<?php

include("db_connect/db_connect.php");
$username=$_REQUEST['username'];
$password=$_REQUEST['password'];

$dat=date('Y-m-d h:m:r');

$sql="select * from login where Username='$username' and Password='$password'";
$res=mysqli_query($conn,$sql);
if($row=mysqli_fetch_array($res))
{
$type=$row['Login_type'];
$_SESSION['uname']=$username;

if($type=="admin")
{
header('location:admin/home.php');
}
else if($type=="owner")
{
header('location:owner/home.php');
}
}
else
{
?>
<script>
alert("Invalid Username Or Password");
history.back();
</script>
<?php
}

?>

