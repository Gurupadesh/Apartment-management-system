<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Apartment management</title>
    <link rel="stylesheet" href="login/style.css">
    <style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
    </style>
  </head>
  <body>
    <div class="center">
      <h1 class="style1">Login</h1>
      <form action="logcheck.php" method="post">
        <div class="txt_field">
          <input type="text"  name="username" required> 
          <span></span>
		  <label><span class="style1">Username</span></label>
          </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label><span class="style1">Password</span></label>
        </div>
        <div class="pass"><a href="forgot.php" class="style1">Forgot Password?</a></div>
        <input type="submit" value="Login">
      
        
  </div>
      </form>
    </div>

  </body>
</html>
