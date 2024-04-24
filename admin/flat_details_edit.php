<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
			     <h1 class="page-header">Flat Details </h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<body>
<?php 
include('val.php');
?>
<?php
include('../db_connect/db_connect.php');
$Flat_detail_id=$_REQUEST['Flat_detail_id'];
$sql="select * from flat_details where Flat_detail_id='$Flat_detail_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form action="flat_details_edit1.php" id="formID" method="post" name="form1">
  <table width="683" height="395" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Flat details </div></td>
	  <input type="hidden" name="flat_detail_id" id="flat_detail_id" value="<?php echo $row['Flat_detail_id'];?>">
    </tr>
    <tr>
      <td width="233">Flat number </td>
      <td width="434"><input name="flat_number" type="text" id="flat_number" value="<?php echo $row['Flat_number'];?>"class="validate[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Flat Description </td>
      <td><input name="flat_description" type="text" id="flat_description" value="<?php echo $row['Flat_description'];?>"class="validate[required]"></td>
    </tr>
    
    <tr>
      <td>Flat Type </td>
	  
      <td><input name="flat_type" type="text" id="flat_type" value="<?php echo $row['flat_type'];?>"class="validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        
		 <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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
