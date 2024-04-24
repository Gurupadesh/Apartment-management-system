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
			     <h1 class="page-header">Pending Owner Facility Charges </h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Owner Facility Charges Report </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include('val.php');
include('cal.php');

include("../db_connect/db_connect.php");
	  $sql="select sum(Facility_charges) as Facility_charges from facilities";
	  $res=mysqli_query($conn,$sql);
	  $row=mysqli_fetch_array($res);
	  $Facility_charges=$row['Facility_charges'];
	  
	  
?>
<form name="form1" method="post" id="formID" action="pending_charges2.php">
  <table width="552" border="0" align="center">
    <tr>
      <td width="273" height="39">Month</td>
      <td width="263"><select name="month" id="month" class="validate[required] form-control">
        <option value="">Select Month</option>
		<?php
		for($i=1;$i<=12;$i++)
		{
		?>
		<option><?php echo $i;?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td height="46">Year</td>
      <td><select name="year" id="year" class="validate[required] form-control">
        <option value="">Select Year</option>
		<?php
		$d=date('Y');
		$d1=date('Y')+5;
		for($i=$d;$i<=$d1;$i++)
		{
		?>
		<option><?php echo $i;?></option>
		<?php
		}
		?>
      </select></td>
    </tr>
    <tr>
      <td height="52" colspan="2"><div align="center">
          <input type="submit" class="btn btn-primary" name="Submit" value="SEARCH">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
