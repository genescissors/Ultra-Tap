<?php include "base.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
	
	<title></title>
</head>
<body>

		<div id="main">
			<?php  
if(!empty($_POST['username']) && !empty($_POST['password']))  
{  
    $username = mysql_real_escape_string($_POST['username']);  
    $password = md5(mysql_real_escape_string($_POST['password']));  
    $email = mysql_real_escape_string($_POST['email']);  
      
     $checkusername = mysql_query("SELECT * FROM users WHERE Username = '".$username."'");  
       
     if(mysql_num_rows($checkusername) == 1)  
     {  
        echo "<h1>Error</h1>";  
        echo "<p>Sorry, that username is taken. Please go back and try again.</p>";  
     }  
     else  
     {  
        $registerquery = mysql_query("INSERT INTO users (Username, Password, EmailAddress) VALUES('".$username."', '".$password."', '".$email."')");  
        if($registerquery)  
        {  
            echo "<h1>Success</h1>";  
            echo "<p>Your account was successfully created. Please <a href=\"login.php\">click here to login</a>.</p>";  
        }  
        else  
        {  
            echo "<h1>Error</h1>";  
            echo "<p>Sorry, your registration failed. Please go back and try again.</p>";      
        }         
     }  
}  
else  
{  
    ?>  
      
   <!-- <h1>Register</h1>  
      
   <p>Please enter your details below to register.</p>  
      
    <form method="post" action="register.php" name="registerform" id="registerform">  
    <fieldset>  
        <label for="username">Username:</label><input type="text" name="username" id="username" /><br />  
        <label for="password">Password:</label><input type="password" name="password" id="password" /><br />  
        <label for="email">Email Address:</label><input type="text" name="email" id="email" /><br />  
        <input type="submit" name="register" id="register" value="Register" />  
    </fieldset>  
    </form> -->  


    <div class="modal" id="myModal"  tabindex="-1" role="dialog" aria-hidden="True">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">X</button> -->
        <h1>Register</h1>
        <h3>Please enter your details below to register.</h3>
      </div>

      <div class="modal-body">
        <form method="post" action="register.php" name="registerform" id="registerform">
            <fieldset>
          <p><input type="text" class="span3" name="username" id="username" placeholder="Username"></p>
          <p><input type="password" class="span3" name="password" id="password" placeholder="Password"></p>
          <p><input type="email" class="span3" name="email" id="email" placeholder="E-Mail"></p>
          <p><button type="submit" class="btn btn-primary" name="register" id="register">Register</button> </p>
          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <a href="register.php" class="btn btn-primary"></a> -->
      </div>
    </div>
      
    <?php  
}  
?> 

		</div>
</body>
</html>