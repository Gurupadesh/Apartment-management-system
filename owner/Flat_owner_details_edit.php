<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
			     <h1 class="page-header">Flat Owner Details </h1>
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
include('cal.php');
?>
<?php
include('../db_connect/db_connect.php');
$Flat_owner_id=$_REQUEST['Flat_owner_id'];
$sql="select * from flat_owner_details where Flat_owner_id='$Flat_owner_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>


<form name="form1" id="formID" method="post" action="Flat_owner_details_edit1.php">
  <table width="1063" height="558" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Flat owner details </div></td>
	  <input type="hidden" name="flat_owner_id" id="flat_owner_id" value="<?php echo $row['Flat_owner_id'];?>">
    </tr>
    <tr>
      <td width="245">Flat owner name </td>
      <td width="319"><input name="flat_owner_name" type="text" id="flat_owner_name" value="<?php echo $row['Flat_owner_name'];?>"class="validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Flat id </td>
      <td><input name="flat_id" type="text" id="flat_id" value="<?php echo $row['Flat_id'];?>"class="validate[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Address</td>
      <td><input name="address" type="text" id="address" value="<?php echo $row['Address'];?>"class="validate[required]"></td>
    </tr>
    <tr>
      <td>Contact no </td>
      <td><input name="contact_no" type="text" id="contact_no" value="<?php echo $row['contact_no'];?>"class="validate[required,custom[mobile]"></td>
    </tr>
    <tr>
      <td>Email-id</td>
      <td><input name="email_id" type="text" id="email_id" value="<?php echo $row['email_id'];?>"class="validate[required,custom[email]"></td>
    </tr>
    <tr>
      <td>Aadhar no </td>
      <td><input name="aadhar_no" type="text" id="aadhar_no" value="<?php echo $row['Aadhar_no'];?>"class="validate[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Owner occupation </td>
      <td><input name="owner_occupation" type="text" id="owner_occupation" value="<?php echo $row['owner_occupation'];?>"class="validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td>
	   <?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("dob", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?> 
	  </td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><input name="gender" type="radio" value="male"class="validate[required,custom[onlyLetter]">        
        male
          <input name="gender" type="radio" value="female"class="validate[required,custom[onlyLetter]">
        female</td>
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
   
