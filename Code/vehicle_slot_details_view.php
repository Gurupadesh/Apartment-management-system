<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<style type="text/css">
<!--
.style2 {font-size: medium}
-->
</style>
</head>
<body>

        <!--/. NAV TOP  -->

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                              Vehicle Slot Details 
                             <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
</div> 
                 <!-- /. ROW  -->
               <a href="vehicle_slot_details_form.php" class="btn btn-warning btn" >ADD NEW</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Vehicle Slot Details
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
<body>
<form name="form1" method="post" action="">
  <table width="834" height="162" border="0" align="center">
    <tr>
      <th width="159">Vehicle slot Id</th>
      <th width="234">Vehicle no</th>
      <th width="115">Slot No</th>
      <th width="74">Edit</th>
      <th width="124">Delete</th>
    </tr>
    <?php
	include("../db_connect/db_connect.php");
	$sl_no=1;
	$sql="select * from vehicle_slot_details vs,owner_vehicle_details ov where vs.Owner_vehicle_id=ov.Owner_vehicle_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
	<tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['Vehicle_no'];?></td>
      <td>&nbsp;<?php echo $row['Slot_no'];?></td>
      <td><a href="vehicle_slot_details_edit.php?Vehicle_slot_id=<?php echo $row['Vehicle_slot_id'];?>">Edit</a></td>
      <td><a href="vehicle_slot_details_delete.php?Vehicle_slot_id=<?php echo $row['Vehicle_slot_id'];?>">Delete</a></td>
	</tr>
	<?php
	}
	?>
  </table>
</form>
</div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                <?php include('footer.php');?>
			    </div>
				
            </div>
                <!-- /. ROW  -->
            
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
             
			       </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
</body>
</html>
      