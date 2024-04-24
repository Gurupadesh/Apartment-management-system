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
                            Change Password <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
              <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Change Password  </div>
                        <div class="panel-body">
                            <div class="table-responsive">
							<?php 	
	                      include('val.php');
	                      ?>	
						<form name="form2" id="formID" method="post" action="changepin.php" >
						

						<table width="325" height="242" border="0">
                          <tr>
                            <td>Old Password </td>
                            <td><input type="password" name="old_pwd" class="validate form-control[required]"></td>
                          </tr>
                          <tr>
                            <td>New password </td>
                            <td><input type="password" name="new_pwd" class="validate form-control[required]"></td>
                          </tr>
                          <tr>
                            <td>Confirm password </td>
                            <td><input type="password" name="conf_pwd" class="validate form-control[required]"></td>
                          </tr>
                          <tr>
                            <td colspan="2"><input type="submit" name="Submit" class="btn btn-success" value="Change" /></td>
                          </tr>
                        </table>
						<p>
						  <label>    </label>
                        </p>
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
  
</body>
</html>
      
	<?php include('val.php'); ?>
</body>
</html>