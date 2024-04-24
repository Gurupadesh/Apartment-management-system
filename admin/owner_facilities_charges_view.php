<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<style type="text/css">
<!--
.style5 {font-size: medium}
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
                             Owner Facilities Charges 
                             <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
</div> 
                 <!-- /. ROW  -->
               <a href="owner_facilites_charges_form.php" class="btn btn-warning btn" >ADD NEW</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Owner Facilities Charges </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<div align="right" >
							<a href="pending_charge1.php" class="btn btn-primary">Pending Month Charges</a>
							&nbsp;&nbsp;&nbsp;<a href="paid_charge1.php" class="btn btn-info">Paid Month Charges</a>
							</div>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
    <tr>
      <th width="209"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Sl No</span></th>
      <th width="195"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Flat owner name</span></th>
      <th width="241"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Charges amount</span></th>
      <th width="126"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Month</span></th>
      <th width="94"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Year</span></th>
      <th width="142"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"> Date</span></th>
      <th width="115"><span class="style1 style5">Status</span></th>
      <th width="126"><span class="style1 style5">Edit</span></th>
      <th width="128"><span class="style5"><strong>Delete</strong></span></th>
    </tr>
	</thead>
	<tbody>
	<?php
	include("../db_connect/db_connect.php");
	$tot=0;
	$sql="select * from owner_facilities_charges fc,flat_owner_details fd where fc.Flat_owner_id=fd.Flat_owner_id";
	$sl_no=1;
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	$tot=$tot+$row['Charges_amount'];
	?>
	<tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['Flat_owner_name'];?></td>
      <td>&nbsp;<?php echo $row['Charges_amount'];?></td>
      <td>&nbsp;<?php echo $row['Month'];?></td>
      <td>&nbsp;<?php echo $row['Year'];?></td>
	  <td>&nbsp;<?php echo $row['M_Date'];?></td>
	  <td>&nbsp;<div 
	  <?php if($row['Status']=='Pending'){ ?> class="btn btn-info" <?php } ?>
	  	  <?php if($row['Status']=='Paid'){ ?> class="btn btn-success" <?php } ?>

	  ><?php echo $row['Status'];?></div></td>
      <td><a href="owner_facilites_charges_edit.php?Owner_facilities_charges_id=<?php echo $row['Owner_facilities_charges_id'];?>"><img src="img/EDIT.png" width="30" height="30"</a></td>
      <td><a href="owner_facilities_charges_delete.php?Owner_facilities_charges_id=<?php echo $row['Owner_facilities_charges_id'];?>"><img src="img/delete.png"width="30" height="30"</a></td>
    </tr>
	<?php
	}
	?>
	</tbody>
	<tr>
	<td></td>
	<td><strong>Total Amount</strong> </td>
	<td><strong><?php echo $tot;?></strong></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	</tr>
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
