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
                            Employee details <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="employee_details_form.php" class="btn btn-warning btn" >ADD NEW</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             employee  Details
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
<form name="form1" method="post" action="">
  <table width="803" height="267" border="0">
    <tr>
      <th width="112">Employee ID</th>
      <th width="122">Employee Name </th>
      <th width="128">Employee Address </th>
      <th width="76">E-mailID</th>
      <th width="119">Employee Type</th>
      <th width="89">Edit</th>
      <th width="127"> delete</th>
      
    </tr>
	<?php
	include("../db_connect/db_connect.php");
	$sl_no=1;
	$sql="select * from employee_details";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
	<tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['Employee_name'];?></td>
      <td>&nbsp;<?php echo $row['Employee_address'];?></td>
      <td>&nbsp;<?php echo $row['Employee_emailid'];?></td>
      <td>&nbsp;<?php echo $row['Employee_type'];?></td>
      <td><a href="employee_details_edit.php?Employee_id=<?php echo $row['Employee_id'];?>">Edit</a></td>
      <td><a href="employee_details_delete.php?Employee_id=<?php echo $row['Employee_id'];?>"> Delete</a></td>
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
