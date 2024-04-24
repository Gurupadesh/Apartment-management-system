<?php
include("../db_connect/db_connect.php");
$expenditure_title=$_POST['expenditure_title'];
$expenditure_desc=$_POST['expenditure_desc'];
$expenditure_amount=$_POST['expenditure_amount'];
$expenditure_date=$_POST['expenditure_date'];
$sql="insert into expenditure values(null,'$expenditure_title','$expenditure_desc','$expenditure_amount','$expenditure_date')";
mysqli_query($conn,$sql);
?>
<script>
alert("successfully submitted....");
document.location="Expenditure_view.php";
</script>
