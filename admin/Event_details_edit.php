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
			     <h1 class="page-header">Event details </h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div align="left">Event details </div>
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
$Event_id=$_REQUEST['Event_id'];
$sql="select * from event_details where Event_id='$Event_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form action="Event_details_edit1.php" id="formID" method="post" name="form1">
<tr>
      <td colspan="2"><div align="center">Event details </div></td>
	  <input type="hidden" name="event_id" id="event_id" value="<?php echo $row['Event_id'];?>">
    </tr>
  <div align="center">
      <table width="697" height="286" border="0" align="center">
            <tr>
              <td width="326">Event name </td>
              <td width="361">
                        <div align="left">
                          <input name="event_name" type="text" id="event_name" value="<?php echo $row['Event_name'];?>"class="validate[required,custom[onlyLetter]">                    
                        </div></td>
            </tr>
            <tr>
              <td>Event description </td>
              <td>
                          <div align="left">
                            <input name="event_desc" type="text" id="event_desc" value="<?php echo $row['Event_description'];?>"class="validate[required]">
                        </div></td>
            </tr>
            <tr>
              <td>Event date </td>
              <td>
                    <div align="left">
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



	  $myCalendar =new tc_calendar("event_date", true, false);
	  $myCalendar->setIcon("calendar/images/iconCalendar.gif");
	  $myCalendar->setDate(date('d', strtotime($date_default))
            , date('m', strtotime($date_default))
            , date('Y', strtotime($date_default)));
	  $myCalendar->setPath("calendar/");
	  $myCalendar->setYearInterval(1800, date('Y'));
	  $myCalendar->setAlignment('left', 'bottom');
	  $myCalendar->writeScript();	  
	  ?> 
                    </div></td>
            </tr>
            <tr>
              <td colspan="2">
                          <div align="center">
                            
							 <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
                             <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
                            </div></td>
            </tr>
      </table>
    </div>
</form>
 
   <div align="center">
     <!-- /.col-lg-6 (nested) -->
                  </div>
                              </div>
                                
                              <div align="center">
                                <!-- /.row (nested) -->
                                  </div>
                          </div>
                            
                          <div align="center">
                            <!-- /.panel-body -->
                              </div>
                      </div>
                        
                      <div align="center">
                        <!-- /.panel -->
                          </div>
                  </div>
                    <div align="left">
                      <!-- /.col-lg-12 -->
                    </div>
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
