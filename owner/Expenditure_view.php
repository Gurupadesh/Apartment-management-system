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
							                     <?php include('cal.php'); ?>
						  <form name="form1" method="post" role="form" action="Expenditure_view_next.php" id="formID">

                                           <table class="table table-striped table-bordered table-hover">
         <tr>
           <td><label>Select From Date</label></td>
           <td><?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date1", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
           <td>&nbsp;</td>
           <td><label>Select To Date</label></td>
           <td><?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date2", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?></td>
         </tr>
         <tr>
           <td colspan="4"><label><button type="submit" class="btn btn-primary">Search</button></label></td>
           <td>&nbsp;</td>
         </tr>
       </table>
</form>

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
   <tr>
      <th><div align="left">Sl No</div></th>
      <th width="220"><div align="left">Expenditure Title</div></th>
      <th width="353"><div align="left">Expenditure Description</div></th>
      <th width="285"><div align="left">Expenditure Amount</div></th>
      <th width="339"><div align="left">Expenditure Date</div></th>

      <th width="110"><div align="left" class="style4">Delete</div></th>
    </tr>
	</thead>
	<tbody>
    <?php
	include("../db_connect/db_connect.php");
	$sl_no=1;
	$tot=0;
	$sql="select * from expenditure";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	$tot=$tot+$row['Expenditure_amount'];
	?>
    <tr>
      <td>&nbsp;<?php echo $sl_no++;?></td>
      <td>&nbsp;<?php echo $row['Expenditure_title'];?></td>
      <td>&nbsp;<?php echo $row['Expenditure_description'];?></td>
      <td>&nbsp;<?php echo $row['Expenditure_amount'];?></td>
      <td>&nbsp;<?php echo $row['Expenditure_date'];?></td>
	  
	  <td><a href="Expenditure_delete.php?Expenditure_id=<?php echo $row['Expenditure_id'];?>" class="btn btn-primary">Delete</a></td>
    </tr>
    
    <?php
	}
	?>
	</tbody>
	<tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><strong>Total Expenditure Amount </strong></td>
      <td><strong><?php echo $tot;?></strong>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
