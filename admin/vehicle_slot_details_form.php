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
                           Vehicle slot details 
                           <!-- <small>Best form elements.</small> -->
                        </h1>
               </div>
              </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Vehicle slot details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include('val.php');
$Owner_vehicle_id=$_REQUEST['Owner_vehicle_id'];
?>
<form name="form1" id="formID" method="post" action="vehicle_slot_details_insert.php">
  <p>&nbsp;</p>
  <table width="392" border="0" align="center">
    <tr>
      <td width="180" height="45">Vehicle No</td>
      <td width="196"><select name="owner_vehicle_id" id="owner_vehicle_id" class="form-control validate[required]">

	  <?php
	  include("../db_connect/db_connect.php");
	  $sql="select * from owner_vehicle_details where Owner_vehicle_id='$Owner_vehicle_id'";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['Owner_vehicle_id'];?>"><?php echo $row['Vehicle_no'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td height="42">Slot Number</td>
      <td><select name="slot_no" id="slot_no" class="form-control validate[required]">
        <option value="">Select Slot No</option>
        <?php
		for($i=1;$i<=20;$i++)
		{
		?>
        <option><?php echo $i;?></option>
        <?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td height="52" colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
        <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
  <div align="center"></div>
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

