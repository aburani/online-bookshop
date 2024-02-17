<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Africa Herald Publishing House - Bookstore</title>
<meta name="keywords" content="Web Design Agency, 2-column, Portfolio, Light Gray, Professional, HTML CSS," />
<meta name="description" content="Web Design Agency | Portfolio - professional website template for everyone" />
<link href="templatemo_style_shop.css" rel="stylesheet" type="text/css" />
<link href="templatemo_style_2.css" rel="stylesheet" type="text/css" />  
<link href="nick_style_2.css" rel="stylesheet" type="text/css" /> 
    <!--glowing menu for the current page where you are in-->
<link rel="shortcut icon" type="image/x-icon" href="css/dropdown/themes/adobe.com/images/sda2.png" />  
<!--HOW TO PUT ICON FOR THE WEBSITE PAGE UP WHERE THERES HEADING-->

<!--////// CHOOSE ONE OF THE 3 PIROBOX STYLES  \\\\\\\-->
<!--<link href="css_pirobox/white/style.css" media="screen" title="shadow" rel="stylesheet" type="text/css" />-CONTAINS BLACK SECTION AFFECTION MY ITEMS-->
<!--<link href="css_pirobox/white/style.css" media="screen" title="white" rel="stylesheet" type="text/css" />
<!--<--<link href="css_pirobox/black/style.css" media="screen" title="black" rel="stylesheet" type="text/css" />-CONTAINS BLACK SECTION AFFECTION MY ITEMS TO BE ADDED TO THE SHOPPING CART-->
<!--////// END  \\\\\\\-->

<!--////// INCLUDE THE JS AND PIROBOX OPTION IN YOUR HEADER  \\\\\\\-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/piroBox.1_2.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$().piroBox({
			my_speed: 600, //animation speed
			bg_alpha: 0.5, //background opacity
			radius: 4, //caption rounded corner
			scrollImage : false, // true == image follows the page, false == image remains in the same open position
			pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
			pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
			close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
			slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
			slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
	});
});
</script>
<!--////// END  \\\\\\\-->

</head>

<body>

<!--<body>-->
<!--<div id="templatemo_header_wrapper">
	<div id="templatemo_header">-->
    	
    	<!--<div id="site_title">
        
            <h1><a href="http://www.templatemo.com" target="_parent"><img src="images_2/templatemo_logo.png" alt="css template" /><span>AHP Bookstore </span></a></h1>
            
        </div> <!-- end of site_title -->
        
    </div>
</div>

<!--<div id="templatemo_menu">
                
    <!--<ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="services.html">Services</a></li>
		<li><a href="shoppingcart_left.php">Bookstore</a></li>
        <li><a href="blog.html">Our Blog</a></li>
        <li><a href="shop.html" class="current">Shop</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>-->

</div> <!-- end of templatemo_menu -->

<!--<div id="templatemo_main">-->

	<!--<div id="templatemo_content">-->
    
    	<!--<h2>Shop Page</h2>
            <div id="gallery">
                <ul>
                
                    <li>-->
					                      
	</body>
</html>
<!----------------------------SHOP START------------------------------------------------------->	
<!----------------------MENU BOUNDARY UPPER__MIDDLE IS THE MAIN SYSTEM------------------------->
<?php
//	
//	nicosoft Technologies
//	modified codes by nick abura
//
require_once "BootstrapShoppingCart/config.php";                // load settings file
require_once "BootstrapShoppingCart/BootstrapShoppingCart.php";     // load class BootstrapShoppingCart
?>
<?php include('move top_page.php'); ?>
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
        <link rel="stylesheet" href="BootstrapShoppingCart/animation.css">
		<link href="nick_style.css" rel="stylesheet" type="text/css" />
        <script src="vendor/jquery-2.1.0.min.js"></script>
        <script src="vendor/jquery-ui-1.10.4.custom.min.js"></script>
		
    </head>
    <body>
        <!--[if lt IE 7]>
        <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- header menu -->
                <?php include("BootstrapShoppingCart/inc.menu.php"); ?>  <!--BLACK MAIN MENU TOP OF THE PAGE CONTAINING NAVIGATION PAGES-->

<!--<marquee behavior="scroll" direction="left" scrollamount="5">Africa Herald Publishing House Online Shopping Store...</marquee>-->
<!--<marquee>
<b style="color:#33FF00; scrollamount: 200"> Africa Herald Publishing House Online Shopping Ordering System | TEL :+254(0) 728 701 598 Email: aburanick@hotmail.com </br> </b> 
</marquee>---->
<marquee  scrolldelay="140"> <b style="color:#33FF00; scrollamount:90000;font-size:14.5px">Africa Herald Publishing House Online Shopping Ordering System | TEL :+254(0) 728 701 598 | Email: aburanick@hotmail.com</b> </marquee>

        <!-- Product categories MENU-->
        <div class="container">
            <div class="row" id="animation_slideDown">
                <div class="col-md-12">
				<div id="templatemo_menu">
                    <?php
                    //
                    // List categories
                    //
                    include "BootstrapShoppingCart/categories_list.php";
                    //
                    // List categories
                    //
                    ?>
					</div>
                </div>
            </div>
        </div>



<!------------------------------------FIXED PART START-----------------------!>
 <!-- Products --> 
        <div class="container">
            <div class="row">
                <div class="col-md-10">
                    <!--Products-->
                    <div class="row"> 
                        <section class="products">
                            <?php
                            //
                            // Show Product Grid 
                            //
                            if (isset($_GET['category'])) {
                                $category = $_GET['category'];
                            } else {
                                $category = 1;
                            } // list category from table bsc_category
                            $shoppingcart_vertical = 1; // if the is vertical shoppingcart_vertical=1 / is top or bottom are horitzontal -> shoppingcart_vertical=0
                            $_SESSION['LastProductPage'] = $_SERVER["REQUEST_URI"]; // take the name of this page for return
                            include "BootstrapShoppingCart/products_grid.php";  // list products 
                            //
                            // Show Product Grid 
                            //
                            ?> 
                        </section>   
                    </div>
                </div>
              
<!----------------------------------FIXED PART END-----------------------------------!>
    <!-- Shopping cart -->
        <div class="container">
            <div class="row">
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="nav-list affix">
                        <?php
                        //
                        // Show Shopping Cart
                        //
                        ?>
                        <div id="BSCart" class="collections">
                            <div class="BSCart_list">                               

                            </div>
                        </div>
                        <?php
                        //
                        // /Show Shopping Cart
                        //
                        ?>
                    </div> 
                </div>

              <?php /*?>  <!-- Products --> 
                <div class="col-md-10">
                    <div class="row"> 
                        <section class="products">
                            <?php
                            //
                            // Show Product Grid 
                            //
                            if (isset($_GET['category'])) {
                                $category = $_GET['category'];
                            } else {
                                $category = 1;
                            } // list category from table bsc_category
                            $shoppingcart_vertical = 1; // if the is vertical shoppingcart_vertical=1 / is top or bottom are horitzontal -> shoppingcart_vertical=0
                            $_SESSION['LastProductPage'] = $_SERVER["REQUEST_URI"]; // take the name of this page for return
                            include "BootstrapShoppingCart/products_grid.php";  // list products 
                            //
                            // Show Product Grid 
                            //
                            ?>
                        </section>   
                    </div>

                </div><?php */?>
	<!------------------!>
	 <!-- Shopping cart -->
        <div class="container">
            <div class="row">
                <div class="col-md-2 hidden-sm hidden-xs">
                    <div class="nav-list affix">
                        <?php
                        //
                        // Show Shopping Cart
                        //
                        ?>
                        <div id="BSCart" class="collections">
                            <div class="BSCart_list">                               

                            </div>
                        </div>
                        <?php
                        //
                        // /Show Shopping Cart
                        //
                        ?>
                    </div> 
                </div>
<!---------fdgd--------!>			
            </div>
        </div>
        <?php include "BootstrapShoppingCart/inc.pagination.php";  // list products  ?>
        <!-- /container --> 

        
        <script src="vendor/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script> 
        <!-- BootsrapBootstrapShoppingCart.js -->
        <script src="BootstrapShoppingCart/BootstrapShoppingCart.js"></script>  
        <script>
            $(document).ready(function() {
                // show current shoppingcart
                $("#BSCart").load("BootstrapShoppingCart/addproduct_vertical.php");
                // anim buttons categories 
                $('#animation_slideDown').addClass("slideDown");	
            });            
        </script>
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
<!DOCTYPE html>
<html >
  <head>
   <style type="text/css">
.social {
  position: fixed;
  top: 250px;
  left: 3px; /*sticks them to the left wall*/
  
}
.social ul {
  padding: 0px;
  -webkit-transform: translate(-270px, 0);
  -moz-transform: translate(-270px, 0);
  -ms-transform: translate(-270px, 0);
  -o-transform: translate(-270px, 0);
  transform: translate(-270px, 0);
}
.social ul li {
  display: block;
  margin: 5px;         /*spaces between them*/
  background: rgba(0, 0, 0, 0.36);
  width: 300px;
  text-align: right;
  padding: 10px;
  -webkit-border-radius: 0 30px 30px 0;
  -moz-border-radius: 0 30px 30px 0;
  border-radius: 0 30px 30px 0;
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -ms-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
}
.social ul li:hover {
  -webkit-transform: translate(110px, 0);
  -moz-transform: translate(110px, 0);
  -ms-transform: translate(110px, 0);
  -o-transform: translate(110px, 0);
  transform: translate(110px, 0);
  background: rgba(255, 255, 255, 0.4);
}
.social ul li:hover a {
  color: #008200;
}
.social ul li:hover i {
  color: #33FF00;    //social images links changing color
  background: rgba(0, 0, 0, 0.36);
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -ms-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
}
.social ul li i {
  margin-left: 10px;   /*take the social sites writing further/hide them*/
  color: #000;
  background: #fff;
  /*padding: 10px;        Increases the size of the circle*/
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  font-size: 20px;          /*Increases the size of the images for the social sites*/
  background: #ffffff;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}
   </style>
  </head>
    
  <body>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'> 
  
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<nav class="social">
          <ul>
              <li><a href="https://twitter.com/AburaNick" target="_blank">Twitter <i class="fa fa-twitter"></i></a></li>
              <li><a href="https://www.facebook.com/jakendu.jnr" target="_blank">Facebook <i class="fa fa-facebook"></i></a></li>
              <li><a href="https://plus.google.com/u/1/111908786840392957601/posts/p/pub" target="_blank">Google+ <i class="fa fa-dribbble">

</i></a></li>
              <!--<li><a href="http://nicosoft.co.ke" target="_blank">Share About Us <i class="fa fa"></i></a></li>-->
          </ul>
      </nav>
    
  </body>
</html>
<!-------------------------------------------SOCIAL PAGE LINK END---------------------------------------------------->

