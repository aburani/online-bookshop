
<?php
//	
//	nicosoft Technologies
//	modified codes by nick abura
//
require_once "BootstrapShoppingCart/config.php";                // load settings file
require_once "BootstrapShoppingCart/BootstrapShoppingCart.php";     // load class BootstrapShoppingCart

//require_once "shoppingcart_form_cash_on_delivery.php"
?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        
        <link rel="stylesheet" href="vendor/bootstrap-3.1.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="BootstrapShoppingCart/BootstrapShoppingCart.css">
        <link rel="stylesheet" href="BootstrapShoppingCart/BootstrapShoppingCart.css">
        <script src="vendor/jquery-2.1.0.min.js"></script>
        <script src="vendor/jquery-ui-1.10.4.custom.min.js"></script>
		<link rel="shortcut icon" type="image/x-icon" href="css/dropdown/themes/adobe.com/images/sda2.png" /><!--HOW TO PUT ICON FOR THE WEBSITE PAGE UP WHERE THERES HEADING-->
		<link href="nick_style_2.css" rel="stylesheet" type="text/css" />    <!--background image link-->
		<link href="templatemo_style_2.css" rel="stylesheet" type="text/css" /> 
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]--> 
        <!-- header menu -->
        <?php include("BootstrapShoppingCart/inc.menu.php"); ?>
        <div class="container">
            <div class="row">
                <!-- Shopping cart -->
                <div class="col-sm-2 col-md-2 hidden-sm hidden-xs">                    
                    <div class="nav-list affix">                          
                        <!--<div class="ShoppingCartHead"><div style="padding:10px;" >Shopping Checkout</div></div><br />-->
                        <!--Have a comment?<br />
                        You can fill the form<br /><br />--->
                        <!--- <a class="btn btn-success" onClick="$('#paypalform').attr('action', 'shoppingcart_form_cash_on_delivery.php');document.paypalform.submit();">Cash on Delivery +<?php echo moneyformat(EW_CASHONDELIVERY); ?><i class="icon-chevron-right"></i></a>
                       <a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/dopayment_paypal_multiple_cart.php');document.paypalform.submit();">Pay with Paypal<i class="icon-chevron-right"></i></a>--->
               </br>
                 <!--<><>Pay with PayPal<><> </br>
                 <a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/dopayment_paypal_multiple_cart.php');document.paypalform.submit();"><img src="images_payment/64_64_paypal.png" style="width:70px;height:35px;"><i class="icon-chevron-right"></i></a></br>--->

<!--<a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/dopayment_paypal_multiple_cart.php');document.paypalform.submit();">Pay with your Pesapal <i class="icon-chevron-right"></i></a></br>--->
<!---<a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/dopayment_paypal_multiple_cart.php');document.paypalform.submit();">2<i class="icon-chevron-right"></i></a> </br>--->
<!---<><>Pay with Pesapal<><> </br>--->
<!--<a class="btn btn-success" src="images_2/templatemo_logo.png" width="195" height="95" />e <i class="icon-chevron-right"></i></a>-->
<!--<a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/mpesa.php');document.paypalform.submit();"><img src="images_payment/mpesa_logo.png" style="width:60px;height:25px;"><i class="icon-chevron-right"> </i></a>

<a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/dopayment_paypal_multiple_cart.php');document.paypalform.submit();"><img src="images_payment/airtel_money_logo.png" style="width:60px;height:25px;"><i class="icon-chevron-right"></i></a></br>
                   
<a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/dopayment_paypal_multiple_cart.php');document.paypalform.submit();"><img src="images_payment/orange_money_logo.png" style="width:60px;height:25px;"><i class="icon-chevron-right"></i></a>
<a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/dopayment_paypal_multiple_cart.php');document.paypalform.submit();"><img src="images_payment/yucashlogo.jpg" style="width:60px;height:25px;"><i class="icon-chevron-right"></i></a>
</br>
                 
<a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/dopayment_paypal_multiple_cart.php');document.paypalform.submit();"><img src="images_payment/PayPal-logo-1.png" style="width:60px;height:50px;"><i class="icon-chevron-right"></i></a>
          
<a class="btn btn-success" onClick="$('#paypalform').attr('action', 'BootstrapShoppingCart/dopayment_paypal_multiple_cart.php');document.paypalform.submit();"><img src="images_payment/logo.png" style="width:60px;height:50px;"><i class="icon-chevron-right"></i></a>-->
           
                    </div>                 
                </div>             
                <div class="col-sm-10 col-md-10">
                    <!--Products-->
                    <div class="container"> 
                        <div class="col-sm-10 col-md-10">
                            <?php
                            $cart = new shoppingcart(); // init shoppingcart
                            $cart->init('my_shop');
                            if (!$cart->get_cart()) {  //checking if the cart is empty or not
				echo "<h3>Sorry! Your Shopping cart is empty!</h3>";
                                echo "<a href='" . $_SESSION['LastProductPage'] . "'><h4><b><< Go back </b></h4></a>";
                            } else { // the shoppingcart has content
                                include("BootstrapShoppingCart/checkout.php"); //show shoppingcart
                            }  // the shoppingcart has content 
                            ?>

                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- /container --> 

        <script src="vendor/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script> 
        <!-- BootsrapBootstrapShoppingCart.js -->
        <script src="BootstrapShoppingCart/BootstrapShoppingCart.js"></script>          
    </body>
</html>
<html>
<body>
<header>
<style type="text/css">
#footer { 
        font-family: Trebuchet MS; 
        font-size: 16px;	
        /*padding:20px;           <!----------increasing the size of the footer box------------>
        margin:0px;*/
		
        /*background-color:#DCDCDC;*/
		 /*background-color:white;
       color:#fff;     /*  fonts color at the footer*/
       <?php /*?> border-bottom: 1px solid #9EC4E2;
        border-top: 1px solid #9EC4E2;<?php 
        text-align:center;*/?> 
		color:white; 
	
        }

#footer a { 
        color:green;
         }

#footer a:hover {
        text-decoration: underline;
        }
</style>
</header>
<body>
<div id="footer">
<!--<br />-->
<hr /><!--<b>Copyright &copy; 2015 Africa Herald Publishing House | Created by nicosoft Developers</a> </b>-->

<div class="footerindex"><fieldset style ="background-color:black;margin-top:-2px;";>
<div class="navbar-inner">
        
            <img width="75" height="45" src="images/aa.png">&nbsp;<b>Copyright &copy; 2016 Africa Herald Publishing House |  Created by </b><a href="http://facebook.com/jakendujnr" target="_blank"> <b> nicosoft Developers </b></a>
             
            <div class="pull-right"><center>
                <!--<a href="http://facebook.com/jakendujnr" target="_blank"> Created by nicosoft Developers </a>-->
                <a href="http://facebook.com/jakendujnr" target="_blank"><i class="icon-facebook-sign icon-large" id="color_white"></i></a>
                <a href="http://twitter.com/nickabura" target="_blank"> <i class="icon-twitter icon-large" id="color_white"></i></a>
                <a href="http://google.com/nickabura" target="_blank"> <i class="icon-google-plus icon-large" id="color_white"></i></a>
                <!--  <i class="icon-github-alt icon-large" id="color_white"></i>-->
                <a href="http://linkedin.com/nickabura" target="_blank"><i class="icon-linkedin-sign icon-large" id="color_white"></i></a>
                </div></div>
        </div></div>
</div>
</div><hr/>
</body>
</html>
<!-----------------------------------------------SOCIAL PAGE LINK START------------------------------------------------>
