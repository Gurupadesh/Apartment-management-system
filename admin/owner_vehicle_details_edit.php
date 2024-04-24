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
			     <h1 class="page-header"> Owner Vehicle Details </h1>
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
$Owner_vehicle_id=$_REQUEST['Owner_vehicle_id'];
$sql="select * from owner_vehicle_details where Owner_vehicle_id='$Owner_vehicle_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" id="formID" action="owner_vehicle_details_edit1.php">
  <table width="782" height="490" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Owner vehicle details </strong></div></td>
	  <input type="hidden" name="owner_vehicle_id" id="owner_vehicle_id" value="<?php echo $row['Owner_vehicle_id'];?>">
    </tr>
    <tr>
      <td width="289">Flat owner id </td>
      <td width="377"><select name="flat_owner_id" id="flat_owner_id"class="validate[required]">
	  <option value="" selected>select</option>
	  <?php
	  $sql2="select * from flat_owner_details";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
	  <option value="<?php echo $row2['Flat_owner_id'];?>"<?php if($row2['Flat_owner_id']==$row['Flat_owner_id']) { ?>selected<?php }?>><?php echo $row2['Flat_owner_name'];?></option>
	  <?php
	  }
	  ?>
            </select></td>
    </tr>
    <tr>
      <td>vehicle number </td>
      <td><input name="vehicle_no" type="text" id="vehicle_no" value="<?php echo $row['Vehicle_no'];?>"class="validate[required]"></td>
    </tr>
    <tr>
      <td>vehicle type </td>
      <td><input name="vehicle_type" type="text" id="vehicle_type" value="<?php echo $row['Vehicle_type'];?>"class="validate[required,custom[onlyLetter]"></td>
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
