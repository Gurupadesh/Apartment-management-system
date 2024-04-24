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
                            Event details <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="Event_details_form.php" class="btn btn-warning btn" >ADD NEW</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Event details </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
<form name="form1" method="post" action="">
  <table width="1476" height="116" border="0" align="center">
    <tr>
      <th width="85"><div align="center">Event id </div></th>
      <th width="97"><div align="center">Event Name</div></th>
      <th width="170"><div align="center">Event Description </div></th>
      <th width="146"><div align="center">Event Date</div></th>
      <th width="800"><div align="left">Event Photo </div></th>
      <th width="71"><div align="center">edit</div></th>
      <th width="77"><div align="center">delete</div></th>
    </tr>
	<?php
	include("../db_connect/db_connect.php");
	$sql="select * from event_details";
	$sl_no=1;
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
	<tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['Event_name'];?></td>
      <td>&nbsp;<?php echo $row['Event_description'];?></td>
      <td>&nbsp;<?php echo $row['Event_date'];?></td>
      <td><img src="../images/<?php echo $row['Event_photo'];?>" width="100" height="100"</td>
	  <td><div align="center"><a href="Event_details_edit.php?Event_id=<?php echo $row['Event_id'];?>">edit</a></div></td>
	  <td><div align="center"><a href="Event_details_delete.php?Event_id=<?php echo $row['Event_id'];?>">delete</a></div></td>
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

