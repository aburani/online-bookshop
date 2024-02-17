<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="css/dropdown/themes/adobe.com/images/sda2.png" /><!--HOW TO PUT ICON FOR THE WEBSITE PAGE UP WHERE THERES HEADING-->
<link href="templatemo_style_2.css" rel="stylesheet" type="text/css" />  <!-----------main menu glowing hover colour------------->
</head>
<body>
    <?php include('main_menu/navhead_5.php'); ?>   
    <?php include('social.php'); ?> 
    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <!--<i class="icon-calendar icon-large"></i>-->
			 <!---<>Herald Publishing House<>---->
                          <div class="brand">
                               <a  href="shop.php"><img src="images_2/templatemo_logo.png" width="195" height="95" /> <span class="hidden-sm hidden-sx"><!-- Book Shopping SLOGAN GOES HERE--></span></a>
                               <!--<i><h6><center>...Books for the Heart of Africa.</center></h6></i>-->
                          </div>
                    </div>
                </div>			
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">
                        <!---<li class="nav-header">Menu Category</li><p>---><p></p>
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li><p>
                        <li class="active"><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li><p>						
				<li><a  href="about.php"><i class="icon-book icon-large"></i>&nbsp;About Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li><p>							
				<li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li><p>						
			<!--<li><a  href="admin/index.php"><i class="icon-book icon-large"></i>&nbsp;Admin Portal
                               <div class="pull-right">
                               <i class="icon-double-angle-right icon-large"></i>
                               </div> 
                               </a></li><p>
			       <!--<li><a  href="services.php"><i class="icon-book icon-large"></i>&nbsp;Our Services
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li><p>-->					
			  <li><a  href="shop.php"><i class="icon-book icon-large"></i>&nbsp;Bookstore Shop
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                          </a></li><p>
							
			  <li><a  href="evaluation.php"><i class="icon-book icon-large"></i>&nbsp;Sales Evaluation
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                          </a></li>
                </div>
            </div>
            <div class="span9">
                <div class="alert alert-info">
                    <?php /*?><button type="button" class="close" data-dismiss="alert">&times;</button><?php */?>
                    <?php /*?><strong>Head Up!</strong>&nbsp;Welcome to Carlos Hilado Memorial State College E-Learning Site.<?php */?>
				<marquee  scrolldelay="140"> <b style="color:#006600; scrollamount:90000;font-size:14.5px">Africa Herald Publishing House Online Shopping Ordering System | TEL :+254(0) 728 701 598 | Email: aburanick@hotmail.com</b> </marquee>
                    
                </div>
                <?php /*?><p><iframe width="860" height="390" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
                           src="http://maps.google.com/maps/ms?doflg=ptm&amp;ie=UTF8&amp;msa=0&amp;msid=203722259750162261795.0004aafd513ccced356f4&amp;sll=10.743085,122.969515&amp;sspn=0,0&amp;ll=10.743346,122.969686&amp;spn=0,0&amp;t=h&amp;vpsrc=0&amp;output=embed">
                    </iframe></p>
<?php */?>
<?php /*?><div style="height:500px;width:500px;max-width:100%;list-style:none; transition: none;overflow:hidden;"><div id="google-maps-display" style="height:500px;width:500px;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Africa+Herald+Publishing+House,+Homa+Bay,+Kenya&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embedded-map-html" href="http://interactwive.com" id="make-map-information">twitter contests</a><style>#google-maps-display .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div><?php */?>
<div style="height:390px;width:860px;max-width:100%;list-style:none; transition: none;overflow:hidden;"><div id="google-maps-display" style="height:390px;width:860px;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Africa+Herald+Publishing+House,+Homa+Bay,+Kenya&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="embedded-map-html" href="http://interactwive.com" id="make-map-information">twitter contests</a><style>#google-maps-display .text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
<!--</div>
</div>-->
</body>
</html>
