<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
</head>
<body>

        <!--/. NAV TOP  -->
  
        <div id="page-wrapper" >
          <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
			     <h1 class="page-header">Employee details </h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">                            </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<body>
<?php 
include('val.php');
?>

<?php
include('../db_connect/db_connect.php');
$Employee_id=$_REQUEST['Employee_id'];
$sql="select * from employee_details where Employee_id='$Employee_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>


<form name="form1" id="formID" method="post" action="employee_details_edit1.php">
  <table width="517" height="419" border="0" align="center">
  <tr>
      <td colspan="2"><div align="center">Employee details </div></td>
    <input type="hidden" name="emp_id" id="emp_id" value="<?php echo $row['Employee_id'];?>">
	</tr>
    <tr>
      <td width="180"> Employee name </td>
      <td width="175"><input name="employee_name" type="text" id="employee_name" value="<?php echo $row['Employee_name'];?>"class="validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Employee address </td>
      <td><input name="employee_address" type="text" id="employee_address" value="<?php echo $row['Employee_address'];?>"class="validate[required]"></td>
    </tr>
    <tr>
      <td>Employee email id </td>
      <td><input name="employee_emailid" type="text" id="employee_emailid" value="<?php echo $row['Employee_emailid'];?>"class="validate[required,custom[email]"></td>
    </tr>
    <tr>
      <td>Employee type</td>
      <td><input name="employee_type" type="text" id="employee_type" value="<?php echo $row['Employee_type'];?>"class="validate[required]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
		<input type="reset"  class="btn btn-danger" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
</div>
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
			<?php include('footer.php'); ?>
		  </div>
             <!-- /. PAGE INNER  -->
</div>
         <!--\ /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   <?php include('val.php'); ?>
</body>
</html>