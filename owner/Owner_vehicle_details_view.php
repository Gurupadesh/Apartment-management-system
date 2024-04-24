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
                             Owner Vehicle Details 
                             <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
</div> 
                 <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Owner Vehicle Details
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
    <tr>
      <th ><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Sl No</span></th>
      <th width="248">Flat owner name</th>
      <th width="202"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Vehicle no</span></th>
      <th width="253"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Vehicle type</span></th>
      <th width="104"><span class="style2">Slot No</span></th>
	  <th width="104"><span class="style2">Allot&nbsp;Status</span></th>
	 </tr>
	</thead>
	<tbody>
    <?php
	include("../db_connect/db_connect.php");
	$sl_no=1;
	$uname=$_SESSION['uname'];
	$sql="select * from owner_vehicle_details ov,flat_owner_details fd,vehicle_slot_details vd where ov.Flat_owner_id=fd.Flat_owner_id and ov.Owner_vehicle_id=vd.Owner_vehicle_id and fd.email_id='$uname'";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
	<tr>
       <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['Flat_owner_name'];?></td>
      <td>&nbsp;<?php echo $row['Vehicle_no'];?></td>
      <td>&nbsp;<?php echo $row['Vehicle_type'];?></td>
	  <td>&nbsp;<?php echo $row['Slot_no'];?></td>
	   <td>&nbsp;<?php echo $row['allot_status'];?></td>
    </tr>
	<?php
	}
	?>
	</tbody>
  </table>

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
      