<?php
include("../db_connect/db_connect.php");
$employee_name=$_POST['employee_name'];
$employee_address=$_POST['employee_address'];
$employee_emailid=$_POST['employee_emailid'];
$employee_type=$_POST['employee_type'];
$sql="insert into employee_details values(null,'$employee_name','$employee_address','$employee_emailid','$employee_type')";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully submitted....");
document.location="employee_details_view.php";
</script>
