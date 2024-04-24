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
			     <h1 class="page-header">owner facility charges </h1>
              </div>
            </div> 
                 <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            owner facility charges </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<?php 
include('val.php');
?>
<form name="form1" method="post" id="formID" action="owner_facilities_charges_insert.php">
  <table width="552" border="0" align="center">
    <tr>
      <td colspan="2"><div align="center">owner facility charges </div></td>
    </tr>
    <tr>
      <td width="273" height="46">flat owner id </td>
      <td width="263"><select name="Flat_owner_id" id="Flat_owner_id"class="validate form-control[required]">
	  <option value="">select</option>
	  <?php
	  include("../db_connect/db_connect.php");
	  $sql="select * from flat_owner_details";
	  $res=mysqli_query($conn,$sql);
	  while($row=mysqli_fetch_array($res))
	  {
	  ?>
	  <option value="<?php echo $row['Flat_owner_id'];?>"><?php echo $row['Flat_owner_name'];?></option>
	  <?php
	  }
	  ?>
      </select></td>
    </tr>
    <tr>
      <td height="42">charges amount </td>
      <td><input name="charges_amount" type="text" id="charges_amount"class="validate form-control[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td height="39">month</td>
      <td><input name="month" type="text" id="month"class="validate form-control[required,custom[onlyLetter]"></td>
    </tr>
    <tr>
      <td height="46">year</td>
      <td><input name="year" type="text" id="year"class="validate form-control[required,custom[onlyNumber]"></td>
    </tr>
    <tr>
      <td height="47">date</td>
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
      <td height="42">status</td>
      <td><input name="status" type="text" id="status"class="validate form-control[required,custom[onlyLetter]"></td>
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
