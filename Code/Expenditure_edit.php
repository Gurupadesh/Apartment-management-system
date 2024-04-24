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
			     <h1 class="page-header">Expenditure</h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

<body>
<?php 
include('val.php');
?>
<?php 
include('../db_connect/db_connect.php');
$Expenditure_id=$_REQUEST['Expenditure_id'];
$sql="select * from expenditure where Expenditure_id=$Expenditure_id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" id="formID" action="Expenditure_edit1.php">
<table width="923" height="511" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Expenditure</div></td>
	  <input type="hidden" name="expenditure_id" id="expenditure_id" value="<?php echo $row['Expenditure_id'];?>">
    </tr>
    <tr>
      <td width="230">Expenditure title </td>
      <td width="373"><input name="expenditure_title" type="text" id="expenditure_title" value="<?php echo $row['Expenditure_title'];?>"class="validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Expenditure description </td>
      <td><input name="expenditure_desc" type="text" id="expenditure_desc" value="<?php echo $row['Expenditure_description'];?>"class="validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Expenditure amount </td>
      <td><input name="expenditure_amount" type="text" id="expenditure_amount" value="<?php echo $row['Expenditure_amount'];?>"class="validate[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td>Expenditure date </td>
      <td> <?php					
      $date_default = "";
     
      if(isset($row['date']))
      {
        $date_default =$row['date'];
      }
      else
      {
         $date_default =date('Y-m-d');
      }



	  $myCalendar = new tc_calendar("expenditure_date", true, false);
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
      <td colspan="2"><div align="center">
        <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
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
