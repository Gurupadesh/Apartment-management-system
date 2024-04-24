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
			     <h1 class="page-header">Employee details </h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Employee details </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 	
	include('val.php');
	?>	
<form name="form1" id="formID"method="post" action="employee_details_insert.php">
  <table width="611" height="419" border="0" align="center">
    <tr>
      <td width="280">Employee name </td>
      <td width="315"><input name="employee_name" type="text" id="employee_name"class="validate form-control[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td>Employee address </td>
      <td><input name="employee_address" type="text" id="employee_address"class="validate form-control[required]"></td>
    </tr>
    <tr>
      <td>Employee email id </td>
      <td><input name="employee_emailid" type="text" id="employee_emailid" class="validate form-control[required,custom[email]"></td>
    </tr>
    <tr>
      <td>Employee type</td>
      <td><input name="employee_type" type="text" id="employee_type"class="validate form-control[required]"></td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
          <input type="reset"  class="btn btn-danger" name="Reset" value="Reset">
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