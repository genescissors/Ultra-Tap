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
if(!empty($_POST['address']) && !empty($_POST['contactnumber']) && !empty($_POST['fullname']) && !empty($_POST['productname']))  
{  
    $address = mysql_real_escape_string($_POST['address']);  
    $contactnumber = mysql_real_escape_string($_POST['contactnumber']);  
    $fullname = mysql_real_escape_string($_POST['fullname']);
    $productname = mysql_real_escape_string($_POST['productname']);  
    $price = $_SESSION['Price'];
      
    
        $orderquery = mysql_query("INSERT INTO orders (Address, ContactNumber, FullName, ProductName, DateOrdered, Price) VALUES('".$address."', '".$contactnumber."', '".$fullname."', '".$productname."', now(), '".$price."')");  
        if($orderquery)  
        {  
           ?> <!-- echo "<h1>Success</h1>";  
             echo "<p>Your order was successfully Added.</p>";
              echo "<p> Proceed to <a href=\"index.php\">Home</a>.</p>"; -->
        <div class="modal" id="myModal"  tabindex="-1" role="dialog" aria-hidden="True">
        <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">X</button> -->
        <h1>Success</h1>
        <h3>Your order was successfully Added.</h3>
        <h3>Proceed to <a href="index.php">Home</a>.</h3>
        </div>
        <?php
        }  
        else  
        {  
            echo "<h1>Error</h1>";  
            echo "<p>Sorry, your registration failed. Please go back and try again.</p>";      
        }         
       
}  
else  
{  
    ?>  
      
   <!-- <div class="offset5 span9"> 
   <h1>Order Form</h1>  
      
   <p>Please place your order and other details .</p>  
      
    <form method="post" action="order2.php" name="orderform" id="orderform">  
    <fieldset>  
        <label for="fullname">Full Name:</label><input type="text" name="fullname" id="fullname" /><br />  
        <label for="address">Address:</label><input type="text" name="address" id="address" /><br />  
        <label for="contactnumber">Contact Number:</label><input type="text" name="contactnumber" id="contactnumber" /><br />  
        <label for="productname">Product:</label> <input type="text" name="productname" id="productname" /> <br />
        <input type="submit" name="order" id="order" value="Submit" />  
    </fieldset>  
    </form>  
      </div> -->



    <div class="modal" id="myModal"  tabindex="-1" role="dialog" aria-hidden="True">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">X</button> -->
        <h1>Order Form</h1>
        <h3>Please place your order and other details.</h3>
      </div>

      <div class="modal-body">
        <form method="post" action="order2.php" name="orderform" id="orderform">
            <fieldset>
          <p><input type="text" class="span3" name="fullname" id="fullname" placeholder="Fullname"></p>
          <p><input type="text" class="span3" name="address" id="address" placeholder="Address"></p>
          <p><input type="text" class="span3" name="contactnumber" id="contactnumber" placeholder="Contact Number"></p>
          <?php $model = $_SESSION['CellphoneModel']; ?>
          <p><input type="text" class="span3" name="productname" id="productname" placeholder="Product Name" value ="<?php  echo $model;  ?>" readonly></p>
          <!-- echo "<p>Sorry, your registration failed. Please go back and try again.</p>"; -->
          
          <p><button type="submit" class="btn btn-primary" name="order" id="order">Submit</button> </p>
          </fieldset>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <a href="register.php" class="btn btn-primary">Register</a> -->
      </div>
    </div>
      
    <?php  
}  
?> 

        </div>
</body>
</html>