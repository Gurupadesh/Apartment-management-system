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
			     <h1 class="page-header">  Vehicle Slot Details </h1>
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
$Vehicle_slot_id=$_REQUEST['Vehicle_slot_id'];
$sql="select * from vehicle_slot_details where Vehicle_slot_id='$Vehicle_slot_id'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($res);
?>
<form name="form1" method="post" id="formID" action="vehicle_slot_details_edit1.php">
  <table width="578" height="247" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center"><strong>Vehicle slot details </strong></div></td>
	  <input type="hidden" name="vehicle_slot_id" id="vehicle_slot_id" value="<?php echo $row['Vehicle_slot_id'];?>">
    </tr>
    <tr>
      <td width="180">Vehicle no</td>
      <td width="196"><div align="left">
        <select name="owner_vehicle_id" id="owner_vehicle_id"class="validate[required]">
	      <option value="" selected>select</option>
	      <?php
	  $sql2="select * from owner_vehicle_details";
	  $res2=mysqli_query($conn,$sql2);
	  while($row2=mysqli_fetch_array($res2))
	  {
	  ?>
	      <option value="<?php echo $row2['Owner_vehicle_id'];?>"<?php if($row2['Owner_vehicle_id']==$row['Owner_vehicle_id']) {?>selected<?php }?>><?php echo $row2['Vehicle_no'];?></option>
	      <?php
	  }
	  ?>
        </select>
      </div></td>
    </tr>
    <tr>
      <td>Slot number</td>
      <td><div align="left">
        <input name="slot_no" type="text" id="slot_no" value="<?php echo $row['Slot_no'];?>"class="validate[required,custom[onlyNumber]">
      </div></td>
    </tr>
    <tr>
      <td colspan="2">
        <div align="center">
          
		   <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
        <input type="reset" name="Reset" value="Reset" class="btn btn-danger">
          </div></td></tr>
  </table>
  <div align="center"></div>
</form>
</body>
</html>
