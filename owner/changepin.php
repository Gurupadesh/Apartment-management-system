<?php

session_start();
?>
<?php
	
	
	 $a=$_POST['new_pwd'];
	$b=$_POST['conf_pwd'];
	
		include("../db_connect/db_connect.php");
		$sql = "select * from  login where Username ='".$_SESSION['uname']."' and Password='".$_POST['old_pwd']."'";
		$res=mysqli_query($conn,$sql);
	if($a==$b)
	{
		if(mysqli_num_rows($res)>0)
		{
			$sql1 = "update login set Password = '".$_POST['new_pwd']."' where Username ='".$_SESSION['uname']."'";
			$res1 = mysqli_query($conn,$sql1);
			?>
				<script>
					alert('Successfully updated your password');
					document.location="change pwd.php";
				</script>
			<?php
		} else
		{
			?>
				<script>
					alert('Failed to update your password');
					document.location="change pwd.php";
				</script>
			<?php
		}
	}else
		{
			?>
				<script>
					alert('New Password and Retype Password do not match');
					document.location="change pwd.php";
				</script>
			<?php
		}
		
?>
