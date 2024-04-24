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
			     <h1 class="page-header">Owner Facility Charges </h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Owner Facility Charges </div>
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
<form name="form1" method="post" id="formID" action="owner_facilities_charges_insert.php">
  <table width="552" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">Owner Facility Charges </div></td>
    </tr>
    <tr>
      <td width="273" height="46">Flat Owner / FLant Number </td>
      <td width="263"><select name="Flat_owner_id" id="Flat_owner_id"class="validate[required] form-control">
	  <option value="">Select Flat Owner</option>
	  <?php
	  
	  $sql="select * from flat_owner_details od,flat_details fd where od.Flat_id=fd.Flat_detail_id ";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['Flat_owner_id'];?>"><?php echo $row['Flat_owner_name'];?> / <?php echo $row['Flat_number'];?> </option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td height="42">Charges Amount </td>
      <td><input name="charges_amount" value="<?php echo $Facility_charges; ?>" type="text" id="charges_amount"class="form-control validate[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td height="39">Month</td>
      <td><select name="month" id="month" class="validate[required] form-control">
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
      <td height="47">Date</td>
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



	  $myCalendar = new tc_calendar("date", true, false);
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
      <td height="52" colspan="2"><div align="center">
          <input type="submit" class="btn btn-primary" name="Submit" value="Submit">
          <input type="reset"   class="btn btn-danger"name="Reset" value="Reset">
      </div></td>
    </tr>
  </table>
</form>
</body>
</html>
