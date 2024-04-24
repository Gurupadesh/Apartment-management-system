<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
</head>
<body>

        <!--/. NAV TOP  -->
  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Owner vehicle details 
                           <!-- <small>Best form elements.</small> -->
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Owner vehicle details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
	<?php 	
	include('val.php');
	?>						
<form name="form1" id="formID" method="post" action="owner_vehicle_details_insert.php">
  <table width="422" height="411" border="0" align="center">
    <tr>
      <td width="177">Flat owner id </td>
      <td width="229"><select name="flat_owner_id" id="flat_owner_id"class="validate form-control[required]">
	  <option value="">Flat owner name</option>
	  <?php
	  include("../db_connect/db_connect.php");
	  $sql="select * from flat_owner_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['Flat_owner_id'];?>"><?php echo $row['Flat_owner_name'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td>vehicle number </td>
      <td><input name="vehicle_no" type="text" id="vehicle_no"class="validate form-control[required]"></td>
    </tr>
    <tr>
      <td>vehicle type </td>
      <td><input name="vehicle_type" type="text" id="vehicle_type"class="validate form-control[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
        <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
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
         <!-- /. PAGE WRAPPER  -->
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
