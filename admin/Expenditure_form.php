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
                        <div class="panel-heading">
                            Expenditure</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include('val.php');
include('cal.php');
?>
<form name="form1" method="post" id="formID" action="Expenditure_insert.php">
  <table width="491" border="0" align="center">
    <tr>
      <td width="230" height="53">Expenditure title </td>
      <td width="245"><input name="expenditure_title" type="text" id="expenditure_title"class="form-control validate[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td height="56">Expenditure description </td>
      <td><textarea name="expenditure_desc" class="form-control validate[required,custom[onlyLetter]" id="expenditure_desc"></textarea></td>
    </tr>
    <tr>
      <td height="56">Expenditure amount </td>
      <td><input name="expenditure_amount" type="text" id="expenditure_amount"class="form-control validate[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td height="45">Expenditure date </td>
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
      <td height="54" colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
        <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
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
