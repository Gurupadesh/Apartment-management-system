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
			     <h1 class="page-header"> Owner Facilities Charges </h1>
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
$Owner_facilities_charges_id=$_REQUEST['Owner_facilities_charges_id'];
$sql="select * from owner_facilities_charges where Owner_facilities_charges_id='$Owner_facilities_charges_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" id="formID" action="owner_facilites_charges_edit1.php">
<input type="hidden" name="owner_facilities_charges_id" id="owner_facilities_charges_id" value="<?php echo $row['Owner_facilities_charges_id'];?>">

  <table width="969" height="540" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Owner facility charges </div></td>
    </tr>
    <tr>
      <td width="273">Flat owner id </td>
      <td width="263"><select name="Flat_owner_id" id="Flat_owner_id"class="validate[required]">
        <option value="" selected>select</option>
        <?php

	  $sql2="select * from flat_owner_details";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
        <option value="<?php echo $row2['Flat_owner_id'];?>"<?php if($row2['Flat_owner_id']==$row['Flat_owner_id']) { ?>selected <?php }?>><?php echo $row2['Flat_owner_name'];?></option>
        <?php
	  }
	  ?>
            </select></td>
    </tr>
    <tr>
      <td>Charges amount </td>
      <td><input name="charges_amount" type="text" id="charges_amount" value="<?php echo $row['Charges_amount'];?>"class="validate[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td height="73">Month</td>
      <td><input name="month" type="text" id="month" value="<?php echo $row['Month'];?>"class="validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td height="68">Year</td>
      <td><input name="year" type="text" id="year" value="<?php echo $row['Year'];?>"class="validate[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Date</td>
      <td>  <?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?> </td>
    </tr>
    <tr>
      <td height="59">Status</td>
      <td><input name="status" type="text" id="status" value="<?php echo $row['Status'];?>"class="validate[required,custom[onlyLetter]"></td>
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
