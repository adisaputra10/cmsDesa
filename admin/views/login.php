<?php
echo '
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Simple HTML & CSS Login Form</title>
    
    
    
    
        <link rel="stylesheet" href="'.root.'asset/csslog/style.css">

    
    
    
  </head>

  <body>

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700,600" rel="stylesheet" type="text/css">

<form method="post" action="">
<div class="box">
<h1>Dashboard</h1>

<input type="text" name="user" placeholder="User" onFocus="field_focus(this, "email");" onblur="field_blur(this, "email");" class="email" />
  
<input type="password" name="password" placeholder="Password" onFocus="field_focus(this, "email");" onblur="field_blur(this, "email");" class="email" />
  
<input class="btn" type="submit" name="submit" value="Login"> <!-- End Btn -->

<a href="'.root.'register"><div id="btn2">Sign Up</div></a> <!-- End Btn2 -->

  
</div> <!-- End Box -->
  
</form>

<p>Forgot your password? <u style="color:#f1c40f;">Click Here!</u></p>
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
    
        <script src="'.root.'asset/jslog/index.js"></script>

    
    
    
  </body>
</html>

';
?>
