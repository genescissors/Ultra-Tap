<?php include "base.php"; ?>
<!DOCTYPE>
<html>
<head>
	<title>Ultra Tap - Tap Gadgets Specialists</title>
	<link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
	
</head>
<body>

<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <!--<a class="brand" href="#"></a>-->
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li class="divider-vertical"></li>
              <?php  
if(!empty($_SESSION['LoggedIn']) && !empty($_SESSION['Username']))  
{  
     ?>  
   
     <li><a href="" class="disabled">Hi! <?=$_SESSION['Username']?></a></li>  
      <li><a href="logout.php">Sign Out</a></li>
     <?php  
}  
elseif(!empty($_POST['username']) && !empty($_POST['password']))  
{  
    $username = mysql_real_escape_string($_POST['username']);  
    $password = md5(mysql_real_escape_string($_POST['password']));  
      
    $checklogin = mysql_query("SELECT * FROM users WHERE Username = '".$username."' AND Password = '".$password."'");  
      
    if(mysql_num_rows($checklogin) == 1)  
    {  
        $row = mysql_fetch_array($checklogin);  
        $email = $row['EmailAddress'];  
          
        $_SESSION['Username'] = $username;  
        $_SESSION['EmailAddress'] = $email;  
        $_SESSION['LoggedIn'] = 1;  
        
          
        echo "<h1>Success</h1>";  
        echo "<p>We are now redirecting you to the member area.</p>";  
     //   echo "<meta http-equiv='refresh' content='=0;index.php' />"; 
        echo "<meta content='0;samsung-s4.php' http-equiv='refresh'>"; 
    }  
    else  
    {  
        echo "<h1>Error</h1>";  
        echo "<p>Sorry, your account could not be found. Please <a href=\"login.php\">click here to try again</a>.</p>";  
    }  
}  
else  
{  
    ?>  
      
     <li><a href="login.php">Sign In</a></li>
      <li><a href="register.php">Sign Up</a></li>
   <!-- <p>Thanks for visiting! Please either login below, or <a href="register.php">click here to register</a>.</p> --> 
      
   <!--  <form method="post" action="login.php" name="loginform" id="loginform">  
    <fieldset>  
        <li><a class="disabled">Username:</a></li>
        <li><a class="disabled"><input type="text" name="username" id="username" /></a></li>  
        <li for="password"><a class="disabled">Password:</a></li><input type="password" name="password" id="password" />
        <li><a href=""><input type="submit" name="login" id="login" value="Login" />  
    </fieldset>  
    </form>  --> 
      
   <?php  
}  
?> 
      <!--        <li class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">LANGUAGE <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">EN</a></li>
                    <li><a href="#">ID</a></li>
                    <li><a href="#">FR</a></li>
                    <li class="divider"></li>
                    <li><a href="#">IT</a></li>
                  </ul>
                </li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


 <div class="container">
        
      <div class="row-fluid">
  <div class="span6 logo">
  <a href="index.php"></a><div class="brand logo"><img src="static/img/shop-logo.png"></div><br>
  <!--<p>Tap Gadgets Specialists</p> -->
  </div>
  </div>
<div class="row-fluid">
        <div class="span12 nav-menus">
            <ul class="nav nav-pills">
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="about.php">About us</a></li> -->
                <li class="active"><a href="products.php">Products</a></li>
                <li><a href="order.php">Order</a></li>
            </ul>
        </div>


</div>

      
      <div class="row-fluid">
        <div class="span3">
            <div class="row-fluid">
                
            </div><!--/row-->
            <div class="row-fluid">
                <div class="span12 cart">
                 
                </div>
            </div><!--/row-->
           
            <div class="row-fluid">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>Special Offer</li>
                    </ul>
                </div>
            </div><!--/row-->
            <div class="row-fluid">
                <div class="span12">
                    <ul class="thumbnails">
                        <li class="span12">
                          <div class="thumbnail">
                            <a href="iphone-5c.php"><img alt="" src="static/img/iphone5c.png"></a>
                            <div class="caption">
                              <h5>IPhone 5C</h5>
                              <p>PHP 16,490.00</p>
                              <p>Available</p>
                            </div>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    
                </div>
            </div><!--/row-->
            <div class="row-fluid">
                
            </div><!--/row-->
        </div>
        <div class="span9">
            <div class="row-fluid">
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                    <li><a href="products.php">Products</a> <span class="divider">/</span></li>
                    <li><a href="samsung.php">Samsung</a> <span class="divider">/</span></li>
                    <li class="active">Samsung Galaxy S4 LTE</li>
                </ul>
            </div>
            <div class="row-fluid">
                <div class="span6 product">
                    <div class="carousel slide" id="myCarousel">
                        <div class="carousel-inner">
                          <div class="item">
                            <img alt="" src="static/img/galaxys4lte.png">
                          </div>
                          <div class="item active">
                            <img alt="" src="static/img/galaxys4ltewhite.png">
                          </div>
                          
                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
                      </div>
                </div>
                <div class="span6 product-detail">
                    <h3>Samsung S4 LTE</h3>
                    <p>
                      <table cellpadding = "2" border = "3">
                      <h4>DESIGN</h4>
                      <tr><td><b>Device Type:</b></td> <td>Smart Phone</td></tr>
                      <tr><td><b>Operating System:</b></td>  <td>Android (4.2.2)</td></tr>
                      <tr><td><b>Weight:</b></td> <td>4.59 oz (130 g)</td></tr>
                      <tr><td><b>Dimensions:</b></td> <td>5.38 x 2.75 x 0.31 inches</td></tr>
                      <tr><td><b>Body Material:</b></td> <td>Polycarbonate</td></tr>
                      </table>
                     <br>
                      <table cellpadding = "2" border = "3">
                       <h4>DISPLAY</h4>
                      <tr><td><b>Physical Size:</b></td> <td>5.0 inches</td></tr>
                      <tr><td><b>Resolution:</b></td>  <td>1080 x 1920 pixels</td></tr>
                      <tr><td><b>Pixel Density:</b></td> <td>441 ppi</td></tr>
                      <tr><td><b>Colors:</b></td> <td>16 777 216</td></tr>
                      <tr><td><b>Touchscreen:</b></td> <td>Multi- touch</td></tr>
                      <tr><td><b>Features:</b></td> <td>Light Sensor, Proximity Sensor, Scratch-resistant glass</td></tr>
                      </table>
                      <br>
                      <table cellpadding = "2" border = "3">
                       <h4>BATTERY</h4>
                      <tr><td><b>Talk Time:</b></td> <td>17.00 hours</td></tr>
                      <tr><td><b>Stand-By Time:</b></td>  <td>15.4 days (370 hours)</td></tr>
                      <tr><td><b>Capacity:</b></td> <td>2600 mAh</td></tr>
                      </table>
                      <br>
                      <table cellpadding = "2" border = "3">
                       <h4>HARDWARE</h4>
                      <tr><td><b>System Chip:</b></td> <td>Qualcomm Snapdragon 600 APQ8064T</td></tr>
                      <tr><td><b>Processor:</b></td>  <td>Quad Core, 1900 MHz, Krait 300</td></tr>
                      <tr><td><b>Graphics Processor:</b></td> <td>PowerVR SGX543MP3</td></tr>
                      <tr><td><b>System Memory:</b></td> <td>Adreno 320</td></tr>
                      <tr><td><b>Built-in Storage:</b></td> <td>16 GB</td></tr>
                      <tr><td><b>Storage Expansion:</b></td> <td>microSD, microSDHC up to 64 GB</td></tr>

                      </table>
                      <table cellpadding = "2" border = "3">
                       <h4>CAMERA</h4>
                      <tr><td><b>Camera:</b></td> <td>13 Megapixels</td></tr>
                      <tr><td><b>Camcorder:</b></td>  <td>1920 x 1080 (1080HD) (30fps)</td></tr>
                      <tr><td><b>Front-facing camera:</b></td> <td>2 Megapixels</td></tr>
                      </table>
                      <br>
                      <table cellpadding = "2" border = "3">
                       <h4>MULTIMEDIA</h4>
                      <tr><td><b>Music Player:</b></td> <td>Yes</td></tr>
                      <tr><td><b>Speakers:</b></td>  <td>Earpiece, Loudspeaker</td></tr>
                      <tr><td><b>Built-in Online Services:</b></td> <td>Youtube (Upload), Picasa</td></tr>
                      </table>
                      <br>
                      <table cellpadding = "2" border = "3">
                       <h4>CONNECTIVITY</h4>
                      <tr><td><b>Bluetooth:</b></td> <td>4.0</td></tr>
                      <tr><td><b>Wi-Fi:</b></td>  <td>5 GHz</td></tr>
                      <tr><td><b>HDMI:</b></td> <td>via Micro USB</td></tr>
                      </table>                    
                    </p>
                    <p><h2>PHP 24,280.00</h2></p>
                    <p>
                        <form class="form-horizontal">
                            <!-- <div class="control-group">
                                <label for="select01" class="control-label t-left">Color</label>
                                <div class="controls">
                                  <select id="select01" class="span10">
                                    <option>- Choose your color -</option>
                                    <option>White</option>
                                    <option>Matte Blue</option>
                          
                                  </select>
                                </div>
                              </div> -->
                             <!--  <div class="control-group">
                                <label for="select01" class="control-label t-left">Quantity</label>
                                <div class="controls">
                                  <input type="text" class="span4" value="1" />
                                </div>
                              </div> -->
                              <form action="order.php">
                              <div class="form-actions">
                                <?php 
                                  $price = "24280";
                                  $_SESSION['Price'] = $price;
                                  $model = "Samsung S4";
                                  $_SESSION['CellphoneModel'] = $model;
                                ?>
                                <button class="btn" type="submit"><a href="order.php">Order</a></button>
                              </div>
                              </form>
                        </form>
                    </p>
                </div>
            </div>
        </div>
      </div>
      
      <hr />
      
      

<div class="row-fluid footer">
        <div class="span3">
            <h3>Information</h3>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Map</a></li>
            </ul>
        </div>
        <div class="span3">
            <h3>Stay in touch</h3>
            <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li><br />
                <li>
                    <div class="control-group">
                        <div class="controls">
                          <div class="input-prepend input-append">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" size="16" id="appendedPrependedInput" class="span6" placeholder="Enter your email"><input type="submit" name="submit" value="Subscribe" class="btn" />
                          </div>
                        </div>
                    </div>
                </li>
                
            </ul>
            <p></p>
        </div>
        <div class="span3">
            <h3>Affiliate</h3>
            <ul>
                <li><a href="#">La Consolacion College - Caloocan</a></li>
                <li><a href="#">Liwanag Graphics Inc.</a></li>
                
            </ul>
        </div>
        <div class="span3">
            <h3>Discover our store</h3>
            <ul>
                <li><a href="#">Caloocan</a></li>
                
            </ul>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Ultra Tap 2013. All right reserved.</p>
      </footer>

</div>


   <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="static/js/jquery-1.7.2.min.js"></script>
    <script src="static/js/bootstrap.min.js"></script>
    <script src="static/js/script.js"></script>
</body>
</html>