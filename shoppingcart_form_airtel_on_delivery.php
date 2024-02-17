<?php
//	
//	Aenea - redesigned by abura nick
//	Bootstrap BootstrapShoppingCart for codecanyon.net redesigned by abura nick
//
require_once "BootstrapShoppingCart/config.php";                // load settings file
require_once "BootstrapShoppingCart/BootstrapShoppingCart.php";     // load class BootstrapShoppingCart
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
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="vendor/bootstrap-3.1.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="BootstrapShoppingCart/BootstrapShoppingCart.css">
        <script src="vendor/jquery-2.1.0.min.js"></script>
        <script src="vendor/jquery-ui-1.10.4.custom.min.js"></script>
        <!-- validate form -->
        <link rel="stylesheet" href="vendor/jQuery-Validation-Engine-master/css/validationEngine.jquery.css" type="text/css"/>
        <script src="vendor/jQuery-Validation-Engine-master/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
        <script src="vendor/jQuery-Validation-Engine-master/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
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
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="nav-list affix">  
                        <div class="ShoppingCartHead"><div style="padding:10px;">AIRTEL PAYMENT</div></div><br/>
<!-----START------->
<!--<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!--<title>Shopping Cart</title>--->
  <!--<link rel="stylesheet" href="jquery-ui.css">
  <script src="jquery-1.10.2.js"></script>
  <script src="jquery-ui.js"></script>
  <style>
  h1 { padding: .2em; margin: 0; }
  #products { float:left; width: 400px; margin-right: 2em; }
  #cart { width: 230px; float: left; margin-top: 1em; }
  /* style the list to maximize the droppable hitarea */
  #cart ol { margin: 0; padding: 1em 0 1em 3em; }
  </style>
  <script>
  $(function() {
    $( "#catalog" ).accordion();
    $( "#catalog li" ).draggable({
      appendTo: "body",
      helper: "clone"
    });
    $( "#cart ol" ).droppable({
      activeClass: "ui-state-default",
      hoverClass: "ui-state-hover",
      accept: ":not(.ui-sortable-helper)",
      drop: function( event, ui ) {
        $( this ).find( ".placeholder" ).remove();
        $( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
      }
    }).sortable({
      items: "li:not(.placeholder)",
      sort: function() {
        $( this ).removeClass( "ui-state-default" );
      }
    });
  });
  </script>
</head>
<body>
 
<div id="products">
   <h5 class="ui-widget-header">AIRTEL PAYMENT TERMS</h5>
  <div id="catalog">
    <h5><a href="#"><b> < Payment Methods > </b></a></h5>
    <div>
      <ul>
        <li>CASH ON DELIVERY</li>  
        <li>M-PESA</li>
        <li>AIRTEL MONEY</li>
        <li>ORANGE MONEY</li>
        <li>yu CASH</li>
        <li>PAYPAL</li>  
            
      </ul>
    </div>
    <h5><a href="#"><b> < Terms & Conditions > </b></a></h5>
    <div>
      <ul>
        <li>Mobile Payments</li>
        <li>Paypal Payments</li>
        <li>Banks Payments</li>
      </ul>
    </div>
    <!--<h5><a href="#"><b> < Payment Help > </b></a></h5>
    <div>
      <ul>
        <li>Zebra Striped</li>
        <li>Black Leather</li>
        <li>Alligator Leather</li>
      </ul>
    </div>-->
 
 
<!--<div id="cart">
  <h1 class="ui-widget-header">Shopping Cart</h1>
  <div class="ui-widget-content">
    <ol>
      <li class="placeholder">Add your items here</li>
    </ol>
  </div>
</div>--->

<!--</body>
</html>
<!-----END--------->
                        <?php
                     $total = 0; // ShoppingCart Total
                        $subtotal=0;
                        $cart = new shoppingcart(); // init shoppingcart
                        $cart->init('my_shop');
                        $bsc = $cart->get_cart(); // get shoppingcart
                        $render = new renderchartshop($bsc);  // render shoppingcart
                        $shoppingcart = $render->get();   // get render 
                        // list current shoppingcart 

                        foreach ($shoppingcart as $cart) {
                            $subtotalrow = 0; // ShoppingCart subtotal

                            if ($cart['price_offer'] > 0) {
                                $price = $cart['price_offer'];
                            } else {
                                $price = $cart['price'];
                            }
                            $subtotalrow = $price * $cart['quantity'];
                            $subtotal += $subtotalrow;
                        } // End count

                       /*if (EW_CASHONDELIVERY > 0) {
                            echo "Cash on delivery has an<br />extra charge of +" . moneyformat(EW_CASHONDELIVERY);
                        } else {
                            echo "Cash on delivery has<br />no extra charge";
                        }
                        echo "<br /><br />Subtotal: " . moneyformat($subtotal);
                        if (EW_CASHONDELIVERY > 0) {
                            echo "<br />Extra charge: +" . moneyformat(EW_CASHONDELIVERY);
                            $subtotal = $subtotal + EW_CASHONDELIVERY;
                        } else {
                            echo "<br />";
                        }*/
                         if (isset($_SESSION['discount']) && ($_SESSION['discount'] > 0)) {
                            echo "<br />Coupon: -" . moneyformat($_SESSION['discount']);
                            $subtotal = $subtotal - $_SESSION['discount'];
                        }
                        if (EW_SHIPPING > 0) {
                            echo "<br />Shipping: " . moneyformat(EW_SHIPPING);
                            $subtotal = $subtotal + EW_SHIPPING;
                        }
                        echo "<br /><span class='price'>Total: " . moneyformat($subtotal) . "</span>";                             
                        ?>			
                     <br /><br />									
                        <a class="btn btn-default" href="<?php echo $_SESSION['LastProductPage']; ?>">Go products<i class="icon-chevron-right"></i></a><br /><br />
                        <a class="btn btn-default" href="shoppingcart_checkout.php"><b><< Go back</b></a><br /><br />

                    </div> 
                </div>
                <!--<div class="col-md-10">-->    <!--STOPPED THE MOVING REQUIRED WARNING NOTE-->
                    <!--form-->
                    <div class="container">
                        <div class="col-md-10">
			
                            <table class="ShoppingCartHead" width="100%" height="40" border="0" cellspacing="0" cellpadding="0" >
                                <tr>
                                    <td align="left">&nbsp;&nbsp;Fill the form Below and Submit your Code and your Delivery Details to Complete your Purchase Order.</td>        
                                </tr>
                            </table>
							
							<div style="margin-top: 20px; ">
                                <b>AIRTEL Payment Order Customer Delivery Details Form. Fill your Details and Confirmation Code Below.</b>
                            </div>
                            <div style="margin-top: 20px;">
                                <form action="BootstrapShoppingCart/airtel_on_delivery_send.php" method="post" id="form" name="form">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <label><span class="control-label">First name*</span></label>
                                            <input type="text" value="" class="form-control validate[required]" name="first_name"  id="first_name"   placeholder="First name">
                                            <div style="color:#b22222; font-size:10px; line-height: 10px; padding-bottom: 10px;">Your first name</div>                                            <label><span class="control-label">Last name*</span></label>
                                            <input type="text" value="" class="form-control validate[required]" name="last_name"  id="last_name"   placeholder="Last name">
                                            <div style="color:#b22222; font-size:10px; line-height: 10px; padding-bottom: 10px;">Your last name</div>
                                            <label><span class="control-label">Email*</span></label>
                                            <input type="text" value="" class="form-control validate[required,custom[email]]" name="payer_email"  id="payer_email"   placeholder="Email">
                                            <div style="color:#b22222; font-size:10px; line-height: 10px; padding-bottom: 10px;">Your email</div>
                                        </div>

                                        <div class="col-md-3">
                                            <label><span class="control-label">Street Address*</span></label>
                                            <input type="text" value="" class="form-control validate[required]" name="address_street"  id="address_street"   placeholder="Address">
                                            <div style="color:#b22222; font-size:10px; line-height: 10px; padding-bottom: 10px;">Street Name and/or apartment number</div>
                                            <label><span class="control-label">Phone Number*</span></label>
                                            <input type="text" value="" class="form-control validate[required]" name="phone_number" id="phone_number" placeholder="Enter your Phone Number">
                                            <div style="color:#b22222; font-size:10px; line-height: 10px; padding-bottom: 10px;">Please provide your Phone Number</div>
                                            <label><span class="control-label">City*</span></label>
                                            <input type="text" value="" class="form-control validate[required]" name="address_city" id="address_city" placeholder="City">



                                            <div style="color:#b22222; font-size:10px; line-height: 10px; padding-bottom: 10px;">Your city or town</div>
                                        </div>
                                        <div class="col-md-3">
                                            <label><span class="control-label">State*</span></label>
                                            <input type="text" value="" class="form-control validate[required]" name="address_state" id="address_state" placeholder="State">
                                            <div style="color:#b22222; font-size:10px; line-height: 10px; padding-bottom: 10px;">Your state/county</div>
                                            <label>Country*</label>
                                            <select name="address_country_code" id="address_country_code" class="form-control validate[required]" onChange="$('#address_country').val($('#address_country_code').find('option:selected').text());">
                                                <option value="" selected="selected">Select</option>
                                                <option value="AG">Algeria</option>
                                                <option value="AN">Angola</option>
                                                <option value="BN">Benin</option>
                                                <option value="BT">Botswana</option>
                                                <option value="BF">Burkina Faso</option>
                                                <option value="BR">Burundi</option>
                                                <option value="CM">Cameroon</option>
                                                <option value="CV">Cape Verde</option>
                                                <option value="CA">Central African Republic</option>
                                                <option value="CH">Chad</option>
                                                <option value="CO">Comoros</option>
                                                <option value="DB">Djibouti</option>
                                                <option value="DR">DR Congo</option>
                                                <option value="CU">Egypt</option>
                                                <option value="EG">Equatorial Guinea</option>
                                                <option value="ER">Eritrea</option>
                                                <option value="ET">Ethiopia</option>
                                                <option value="GB">Gabon</option>
                                                <option value="GH">Ghana</option>
                                                <option value="GU">Guinea</option>
                                                <option value="GB">Guinea-Bissau</option>
                                                <option value="IC">Ivory Coast</option>
                                                <option value="KE">Kenya</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LB">Liberia</option>
                                                <option value="LB">Libya</option>
                                                <option value="MD">Madagascar</option>
                                                <option value="ML">Malawi</option>
                                                <option value="MI">Mali</option>
                                                <option value="MT">Mauritania</option>
                                                <option value="MR">Mauritius</option>
                                                <option value="MO">Morocco</option>
                                                <option value="MZ">Mozambique</option>
                                                <option value="NM">Namibia</option>
                                                <option value="NG">Niger</option>
                                                <option value="NR">Nigeria</option>
                                                <option value="RW">Rwanda</option>
                                                <option value="SA">Sahrawi Arab Democratic Republic</option>
                                                <option value="ST">São Tomé and Príncipe</option>
                                                <option value="SN">Senegal</option>
                                                <option value="SC">Seychelles</option>
                                                <option value="SL">Sierra Leone</option>
                                                <option value="SM">Somalia</option>
                                                <option value="LT">South Africa</option>
                                                <option value="SA">South Sudan</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SZ">Swaziland</option>
                                                <option value="TZ">Tanzania</option>
                                                <option value="GM">The Gambia</option>
                                                <option value="TG">Togo</option>
                                                <option value="TN">Tunisia</option>
                                                <option value="UG">Uganda</option>
                                                <option value="ZM">Zambia</option>
                                                <option value="ZW">Zimbabwe</option>
                                                </select>
                                            <div style="color:#b22222; font-size:10px; line-height: 10px; padding-bottom: 10px;">Select your country</div>




<label><span class="control-label">AIRTEL Transaction ID*</span></label>
                                            <input type="text" value="" class="form-control validate[required]" name="mpesa_code"  id="mpesa_code"   placeholder="AIRTEL Transaction ID">
                                            <div style="color:#b22222; font-size:10px; line-height: 10px; padding-bottom: 10px;">Your AIRTEL_MONEY CODE <!--<a href="#"><b> <h5>HELP! What is Payment Code?</h5> </a> </b>---></div>                                         


                                            <!--<div style="margin-top: 25px; text-align: right;">
                                                <button class="btn btn-success" type="submit" >ENTER M-PESA DETAILS</button>
                                            </div>
 <div style="margin-top: 25px; text-align: center;">-->

                                                <button class="btn btn-success" type="submit" ><b>Submit Your Purchase Order</b></button>
                                            </div>

                                        </div>






<div style="position:absolute;left:714px;top:50px;color:brown"> 
                                               <ul class="btn btn-success"  ><b> [] AIRTEL PAYMENT STEPS []</p></b></ul>
 <?php
                        $total = 0; // ShoppingCart Total
                        $subtotal=0;
                        $cart = new shoppingcart(); // init shoppingcart
                        $cart->init('my_shop');
                        $bsc = $cart->get_cart(); // get shoppingcart
                        $render = new renderchartshop($bsc);  // render shoppingcart
                        $shoppingcart = $render->get();   // get render 
                        // list current shoppingcart 

                        foreach ($shoppingcart as $cart) {
                            $subtotalrow = 0; // ShoppingCart subtotal

                            if ($cart['price_offer'] > 0) {
                                $price = $cart['price_offer'];
                            } else {
                                $price = $cart['price'];
                            }
                            $subtotalrow = $price * $cart['quantity'];
                            $subtotal += $subtotalrow;
                        } // End count

                       /*if (EW_CASHONDELIVERY > 0) {
                            echo "Cash on delivery has an<br />extra charge of +" . moneyformat(EW_CASHONDELIVERY);
                        } else {
                            echo "Cash on delivery has<br />no extra charge";
                        }
                        echo "<br /><br />Subtotal: " . moneyformat($subtotal);
                        if (EW_CASHONDELIVERY > 0) {
                            echo "<br />Extra charge: +" . moneyformat(EW_CASHONDELIVERY);
                            $subtotal = $subtotal + EW_CASHONDELIVERY;
                        } else {
                            echo "<br />";
                        }*/
                        if (isset($_SESSION['discount']) && ($_SESSION['discount'] > 0)) {
                            echo "<br />Coupon: -" . moneyformat($_SESSION['discount']);
                            $subtotal = $subtotal - $_SESSION['discount'];
                        }
                        if (EW_SHIPPING > 0) {
                            echo "<br />Shipping: " . moneyformat(EW_SHIPPING);
                            $subtotal = $subtotal + EW_SHIPPING;
                        }
                        echo "<br /><span class='price'>Get Transaction ID. Send to Pay Bill Business number 572632 a Total of : " . moneyformat($subtotal) . "</span>"; 
                        ?></p>
1. Go to Airtel Money on your phone</p>
2. Select Send Money Option</p>
3. Select Enter Nick-Name Option</p>
4. Type the Name AHPH</p>
5. Enter the Total Amount of Charges</p>
6. Confirm Amount and Nickname</p>
7. You will receive a confirmation SMS from Airtel Money with a Transaction ID.</p>
8. After you receive the confirmation SMS enter the Transaction ID</p>
9. Click on Submit Your Purchase Order</p>
  
</div>


                                    </div>
      				   </div>
                                    <input type="hidden" name="business" value="<?php echo (EW_PAYPAL_REGISTERED_EMAIL); ?>"> <!-- Your paypal email account --> 
                                    <input type="hidden" name="return" value="<?php echo (EW_WEB_PATH); ?>shoppingcart_thanks_purchase.php"> <!-- if payment complete then show "Thanks !" -->
                                    <input type="hidden" name="notify_url" value="<?php echo (EW_WEB_PATH); ?>BootstrapShoppingCart/paypal_paymentpaypalipn.php"> <!-- The URL to which PayPal posts information about the payment, notification messages.  -->  
                                    <input type="hidden" name="mc_currency" value="<?php echo (EW_CURRENCY_CODE) ?>"> <!-- Currency code / setup config.php -->
                                    <input type="hidden" name="invoice" value="<?php echo date("YmdHis"); ?>"> <!-- My num invoice its inverted date -->        
                                    <input type="hidden" name="payment_status" value="AIRTEL MONEY Before Delivery"> <!--DB PAYMENT STATUS--->
                                    <input type="hidden" name="mc_gross" value="<?php echo $subtotal; ?>"> 
                                    <input type="hidden" name="custom" value="<?php echo $_POST['comments'] ?>">
                                    <input type="hidden" name="address_country" id="address_country" value="">
                                </form>
                            </div>
                        </div>
                    </div> 
                </div> 
                <!--/form-->
            </div>
        </div>
    </div>
    <!-- /container --> 
    <script src="vendor/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script> 
    <!-- BootsrapBootstrapShoppingCart.js -->
    <script src="BootstrapShoppingCart/BootstrapShoppingCart.js"></script>  

    <script>
                                                $(document).ready(function () {
                                                    // show current shoppingcart
                                                    $("#BSCart").load("BootstrapShoppingCart/addproduct_vertical.php");

                                                    $("#form").validationEngine(); // init form validator
                                                });
    </script>

</body>
</html>
</br></br></br><br></br>
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
