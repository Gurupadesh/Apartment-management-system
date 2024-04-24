<?php
include("../db_connect/db_connect.php");
$emp_id=$_POST['emp_id'];
$employee_name=$_POST['employee_name'];
$employee_address=$_POST['employee_address'];
$employee_emailid=$_POST['employee_emailid'];
$employee_type=$_POST['employee_type'];
$sql="update employee_details set Employee_name='$employee_name',Employee_address='$employee_address',Employee_emailid='$employee_emailid',Employee_type='$employee_type' where Employee_id='$emp_id' ";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully Updated....");
document.location="employee_details_view.php";
</script>