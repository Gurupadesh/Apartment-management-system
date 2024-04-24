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
			     <h1 class="page-header">Facilities</h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Facilities</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include('val.php');
?>
<form action="facilities_insert.php" id="formID"  enctype="multipart/form-data" method="post" name="form1">
  <table width="389" border="0" align="center">
    <tr>
      <td width="180" height="65">facility name </td>
      <td width="193"><input name="facility_name" type="text" id="facility_name"class="validate form-control[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td height="69">facility description </td>
      <td><input name="facility_desc" type="text" id="facility_desc"class="validate form-control[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td height="60">facility charges </td>
      <td><input name="facility_charges" type="text" id="facility_charges"class="validate form-control[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td height="67">facility photo </td>
      <td><input name="facility_photo" type="file" id="facility_photo"class="validate form-control[required]"></td>
    </tr>
    <tr>
      <td height="44" colspan="2"><div align="center">
        <input type="submit" class="btn btn-primary"name="Submit" value="Submit">
        <input type="reset" class="btn btn-danger" name="Reset" value="Reset">
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
