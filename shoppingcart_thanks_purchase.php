<!--
//	
//	nicosoft Technologies
//	modified codes by nick abura
//
-->
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



	<link href="nick_style_2.css" rel="stylesheet" type="text/css" />    <!--background image link-->	
        <link href="templatemo_style_2.css" rel="stylesheet" type="text/css" />
        
       <link rel="shortcut icon" type="image/x-icon" href="css/dropdown/themes/adobe.com/images/sda2.png" />     <!--HOW TO PUT ICON FOR THE WEBSITE PAGE UP WHERE THERES HEADING-->
    </head>
    <body>
        <!--[if lt IE 7]>
                    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                <![endif]--> 
        <!-- header menu -->
        <?php include("BootstrapShoppingCart/inc.menu.php"); ?>

        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <!--Products-->
                    <div class="container"> 
                        <div class="col-md-12" style="text-align: center;" >
                           <img src="images/templatemo_logo.png" /> <br> <img src="images/pointer_image.png" /> <img src="images/shoppingcart_64x64.png" /> 
                            <h3>Thanks for purchase!</h3>
                            <a href='shop.php'><h4><b> << Go back </b><h4></a>   
							<script type="text/javascript"><!-------TIME TO RETURN TO MAIN PAGE CONTROLLER AFTER SUBMITING SHOPPING CAT--------------------------->
				setTimeout('ourRedirect()', 5000) 
				function ourRedirect(){
					location.href='shop.php'	
				}	
		</script>

                        </div>
                    </div> 
                </div>
            </div>


        </div>

        <!-- /container --> 
        
    </body>
</html>
