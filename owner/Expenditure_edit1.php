<?php
include("../db_connect/db_connect.php");
$expenditure_id=$_POST['expenditure_id'];
$expenditure_title=$_POST['expenditure_title'];
$expenditure_desc=$_POST['expenditure_desc'];
$expenditure_amount=$_POST['expenditure_amount'];
$expenditure_date=$_POST['expenditure_date'];
$sql="update expenditure set Expenditure_title='$expenditure_title',Expenditure_description='$expenditure_desc',Expenditure_amount='$expenditure_amount',Expenditure_date='$expenditure_date' where Expenditure_id='$expenditure_id'";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully updated....");
document.location="Expenditure_view.php";
</script>
