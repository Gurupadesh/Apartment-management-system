<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('metadata.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<style type="text/css">
<!--
.style2 {font-size: medium}
.style4 {font-size: smaller; }
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
                            Flat Owner Details <!-- <small>Responsive tables</small> -->
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
               <a href="Flat_owner_detais_form.php" class="btn btn-warning btn" >ADD NEW</a>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Flat Owner Details
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="834" height="350" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                  <thead>
                                    <tr>
                                      <th width="30"><div align="left" class="style4 style2">
                                          <div align="left"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Sl No</span></div>
                                      </div></th>
                                      <th width="99"><div align="left" class="style4 style2">
                                          <div align="left"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Flat owner name</span></div>
                                      </div></th>
                                      <th width="61"><span class="style4 style2">Flat No</span></th>
                                      <th width="78"><div align="left" class="style4 style2"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Address</span></div></th>
                                      <th width="77"><div align="left" class="style4 style2"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">contact No</span></div></th>
                                      <th width="88"><div align="left" class="style4 style2"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Email_id</span></div></th>
                                      <th width="73"><div align="left" class="style4 style2"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Aadhar no</span></div></th>
                                      <th width="114"><div align="left" class="style4 style2"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">occupation</span></div></th>
                                      <th width="44"><div align="left" class="style4 style2"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">DOB</span></div></th>
                                      <th width="70"><div align="left" class="style4 style2"><span style="color: rgb(0, 0, 0); font-family: sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: nowrap; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(253, 253, 254); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Gender</span></div></th>
                                      <th width="46" class="style2"><div align="left" class="style4 style2">Edit</div></th>
                                      <th width="56" class="style2"><div align="left" class="style4 style2">Delete</div></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
	include("../db_connect/db_connect.php");
	$sl_no=1;
	 $sql="select * from flat_owner_details fo, flat_details fd where fd.Flat_detail_id=fo.Flat_id";
	$res=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($res))
	{
	?>
                                    <tr>
                                      <td height="68">&nbsp;<?php echo $sl_no++;?></td>
                                      <td>&nbsp;<?php echo $row['Flat_owner_name'];?></td>
                                      <td>&nbsp;<?php echo $row['Flat_number'];?></td>
                                      <td>&nbsp;<?php echo $row['Address'];?></td>
                                      <td>&nbsp;<?php echo $row['contact_no'];?></td>
                                      <td>&nbsp;<?php echo $row['email_id'];?></td>
                                      <td>&nbsp;<?php echo $row['Aadhar_no'];?></td>
                                      <td>&nbsp;<?php echo $row['owner_occupation'];?></td>
                                      <td>&nbsp;<?php echo $row['DOB'];?></td>
                                      <td width="70">&nbsp;<?php echo $row['Gender'];?></td>
                                      <td width="46"><a href="Flat_owner_details_edit.php?Flat_owner_id=<?php echo $row['Flat_owner_id'];?>"><img src="img/EDIT.png" width="30" height="30"></a></td>
                                      <td width="56"><a href="Flat_owner_details_delete.php?Flat_owner_id=<?php echo $row['Flat_owner_id'];?>"><img src="img/delete.png" width="30" height="30"></a></td>
                                    </tr>
                                    <?php
	}
	?>
                                  </tbody>
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
