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
			     <h1 class="page-header">Facilities</h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                      <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<body>
<?php 
include('val.php');
?>
<?php
include('../db_connect/db_connect.php');
$Facility_id=$_REQUEST['Facility_id'];
$sql="select * from facilities where Facility_id='$Facility_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form action="facilities_edit1.php" method="post" id="formID" name="form1">
  <table width="586" height="472" border="0" align="center">
  <tr>
        <td colspan="2"><div align="center">Facilities</div></td>
	  <input type="hidden" name="facility_id" id="facility_id" value="<?php echo $row['Facility_id'];?>">
   </tr>
    <tr>
      <td width="219">Facility name</td>
      <td width="351"><input name="facility_name" type="text" id="facility_name" value="<?php echo $row['Facility_name'];?>"class="validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Facility description </td>
      <td><input name="facility_desc" type="text" id="facility_desc" value="<?php echo $row['Facility_description'];?>"class="validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Facility charges </td>
      <td><input name="facility_charges" type="text" id="facility_charges" value="<?php echo $row['Facility_charges'];?>"class="validate[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Facility photo </td>
      <td><input name="facility_photo" type="file" id="facility_photo" class="validate[required]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
		<input type="reset"  class="btn btn-danger" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
     
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
