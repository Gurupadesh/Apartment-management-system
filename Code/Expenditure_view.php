<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<style type="text/css">
<!--
.style4 {font-size: medium}
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
                            Expenditure<!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="Expenditure_form.php" class="btn btn-warning btn" >ADD NEW</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Expenditure</div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
<form name="form1" method="post" action="">
  <table width="1619" height="161" border="0" align="center">
    <tr>
      <th width="213"><div align="left">Expenditure Id</div></th>
      <th width="220"><div align="left">Expenditure Title</div></th>
      <th width="353"><div align="left">Expenditure Description</div></th>
      <th width="285"><div align="left">Expenditure Amount</div></th>
      <th width="339"><div align="left">Expenditure Date</div></th>
      <th width="69"><div align="left" class="style4">edit</div></th>
      <th width="110"><div align="left" class="style4">delete</div></th>
    </tr>
    <?php
	include("../db_connect/db_connect.php");
	$sl_no=1;
	$sql="select * from expenditure";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
    <tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['Expenditure_title'];?></td>
      <td>&nbsp;<?php echo $row['Expenditure_description'];?></td>
      <td>&nbsp;<?php echo $row['Expenditure_amount'];?></td>
      <td>&nbsp;<?php echo $row['Expenditure_date'];?></td>
	  <td><a href="Expenditure_edit.php?Expenditure_id=<?php echo $row['Expenditure_id'];?>">Edit</a></td>
	  <td><a href="Expenditure_delete.php?Expenditure_id=<?php echo $row['Expenditure_id'];?>">delete</a></td>
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
