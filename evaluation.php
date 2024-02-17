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
<!--JQUERY FOR THE GRAPHS STARTS BELOW BAR CHART----------------------->
<script src="js/jquery.js" type="text/javascript"></script>

<script type="application/javascript" src="js/awesomechart.js"> </script>

<!--JQUERY GRAPH END BAR CHART----------------------------------------->
<link href="templatemo_style_2.css" rel="stylesheet" type="text/css" />  <!-----------main menu glowing hover colour------------->
</head>
<body>
   <?php include('main_menu/navhead_2.php'); ?>
    <?php include('social.php'); ?> 
    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <!--<i class="icon-calendar icon-large"></i>-->                                                                 
                       <!---<>Herald Publishing House<>--->
                        <div class="brand">
                             <a  href="shop.php"><img src="images_2/templatemo_logo.png" width="195" height="95" /> <span class="hidden-sm hidden-sx"><!-- Book Shopping SLOGAN GOES HERE--></span></a>
                             <!--<i><h6><center>...Books for the Heart of Africa.</center></h6></i>-->
                      </div>
                   </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">
                     <!--<li class="nav-header">Menu Category</li><p>---><p></p>
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li><p>
                        <li><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
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
				<li class="active"><a  href="evaluation.php"><i class="icon-book icon-large"></i>&nbsp;Sales Evaluation
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                           </a></li>														
			</div>
                <br>
            </div>
            <div class="span9">
                <?php /*?> <div class="alert alert-info">                    
					<marquee>
<b style="color:#003333; scrollamount:40000"> Africa Herald Publishing House Online Shopping Bookstore..... TEL :+254(0) 728 701 598 Email: aburanick@hotmail.com </br> </b> 
</marquee>
                </div><?php */?>
                <div class="hero-unit-3">

                    <div class="row-fluid">
                        <div class="span12">
                            <center><div class="alert alert-success"> 
							<!--<marquee>-->
<b style="color:#006600; scrollamount:40000">Bookstore Shopping Sales Order Customers' Highest Amount in Pie Chart Representation</br> </b> 
							</marquee>

							</div></center>
                        <!---------.............................................................................................----------------------------------->
<!--------DROP DOWN MENU AT THE EVALUATION.PHP PAGE ON GRAPH CATEDORIES AND MORE----------------------------------------------------------->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content=" css, dropdowns, dropdown menu, drop-down, menu, navigation, nav, horizontal, vertical left-to-right, vertical right-to-left, horizontal linear, horizontal upwards, cross browser, internet explorer, ie, firefox, safari, opera, browser, lwis" />
<meta name="description" content="Clean, standards-friendly, modular framework for dropdown menus" />
<link rel="shortcut icon" type="image/x-icon" href="css/dropdown/themes/adobe.com/images/sda2.png" /><!--HOW TO PUT ICON FOR THE WEBSITE PAGE UP WHERE THERES HEADING-->

<link href="css/dropdown/dropdown.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/adobe.com/default.advanced.css" media="all" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jquery/jquery.dropdown.js"></script>
<![endif]-->
<!---------------DROP DOWN MENU AT THE EVALUATION.PHP PAGE ON GRAPH CATEDORIES AND MORE-------------------------------------------------->
</head>
<body>
           <?php /*?><p>Africa Herald Publishing House fully participates in the worldwide evangelism through the saturation of the region with quality printed materials. We are located near Kendu Town within Homa Bay County near the Kenya Lake Conference Offices.</p>
      <div class="cleaner_h40"></div><?php */?>        
<!--DROP DOWN EVALUATION MORE PAGES BELOW STARTING--------------------------------------------------------------------------------------->
<h5>Highest Amount of Customer Sales Order</h5>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<body>
<ul id="nav" class="dropdown dropdown-horizontal">
	<li><a href="evaluation.php" class="dir"> [ Select Category ] </a>
		<ul>
			<li><a href="evaluation.php">Highest Customer Sales</a></li>
			<li><a href="evaluationi.php">Highest Payment Method</a></li>
			<li><a href="evaluationii.php">Highest State Sales</a></li>			
			<!--<li><a href="./">Highest Payment Method</a></li>--->
		
	 	</li>
		</ul>
	</li>
</ul>
</body>
</html>
<!--DROP DOWN EVALUATION MORE PAGES BELOW ENDING-------------------------------------------------------------------------------------------->
<!--------............................................................................................-------------------------------------->
<html lang="en">
<?php
mysql_select_db('Bookshop',mysql_connect('localhost','root',''))or die(mysql_error());
?>
              <!-- <div class="container">
                <div class="row-fluid">                
                    <div class="span12">
                        <div class="hero-unit-table">   
                            <div class="charts_container">
                                <div class="chart_container">-->
                                     <!--<div class="alert alert-info">Customer Evaluation for the Highest Sales.<p>-->
<!--DROP DOWN EVALUATION MORE PAGES BELOW STARTING-------------------------------------------------------------------------------------->
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!--<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">-->
<body>
<!--<a href="http://www.lwis.net/free-css-drop-down-menu/" id="lwis">http://www.lwis.net/free-css-drop-down-menu/</a>-->
</body>
</html>
<!--DROP DOWN EVALUATION MORE PAGES BELOW ENDING---------------------------------------------------------------------------------------->
<!--?????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????-->
<!DOCTYPE HTML>
<html>
	<head>
	<!--	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">-->
		<!--<title>Highcharts Pie Chart</title>-->
		<!--<script type="text/javascript" src="PC/jquery.min.js"></script>-->
		<script src="PC/highcharts.js"></script>
        <!--<script src="PC/exporting.js"></script>--->
		<script type="text/javascript">
		$(document).ready(function() {
			var options = {
				chart: {
	                renderTo: 'container',
	                plotBackgroundColor: null,
	                plotBorderWidth: null,
	                plotShadow: false
	            },
	            title: {
	                text: '' //put tittle of the pie chart centered 'inside the quotations'
	            },
	            tooltip: {
	                formatter: function() {
	                    return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';
	                }
	            },
	            plotOptions: {
	                pie: {
	                    allowPointSelect: true,
	                    cursor: 'pointer',
	                    dataLabels: {
	                        enabled: true,
	                        color: '#000000',
	                        connectorColor: '#000000',
	                        formatter: function() {
	                            return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %';   //increase the image on pointing
					//return '<b>'+ this.point.name +'</b>: '+ this.percentage +' %'
	                        }
	                    }
	                }
	            },
	            series: [{
	                type: 'pie',
	                name: 'Browser share',
	                data: []
	            }]
	        }
	        
	        $.getJSON("PC/data.php", function(json) {
				options.series[0].data = json;
	        	chart = new Highcharts.Chart(options);
	        });
 
	        
      	});   
		</script>

	</head>
	<body>
		<!--<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>-->
		<!--<div id="container" style="width: 900px; height: 390px; margin: 0 auto"></div>-->
			<div id="container" style="width:100%; height: 400px; margin: 0 auto"></div>
	
<!--</body>
</html>
</div>-->
</br></br>
<center>
<div class="alert alert-success"> 
							<!--<marquee>-->
<b style="color:#006600; scrollamount:40000">Bookstore Shopping Sales Order Customers' Highest Amount in Bar Chart Representation</br> </b> 
							</marquee>
							</div>
</center>

<!--2 CHART START------------------------------------------------------------------------------------------------>
<h5>Highest Amount of Customer Sales Order</h5>
<!---------.............................................................................................----------------------------------->
<!--------DROP DOWN MENU AT THE EVALUATION.PHP PAGE ON GRAPH CATEDORIES AND MORE----------------------------------------------------------->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="keywords" content=" css, dropdowns, dropdown menu, drop-down, menu, navigation, nav, horizontal, vertical left-to-right, vertical right-to-left, horizontal linear, horizontal upwards, cross browser, internet explorer, ie, firefox, safari, opera, browser, lwis" />
<meta name="description" content="Clean, standards-friendly, modular framework for dropdown menus" />
<link rel="shortcut icon" type="image/x-icon" href="css/dropdown/themes/adobe.com/images/sda2.png" /><!--HOW TO PUT ICON FOR THE WEBSITE PAGE UP WHERE THERES HEADING-->
<link href="css/dropdown/dropdown.css" media="all" rel="stylesheet" type="text/css" />
<link href="css/dropdown/themes/adobe.com/default.advanced.css" media="all" rel="stylesheet" type="text/css" />

<!--[if lt IE 7]>
<script type="text/javascript" src="js/jquery/jquery.js"></script>
<script type="text/javascript" src="js/jquery/jquery.dropdown.js"></script>
<![endif]-->
<!---------------DROP DOWN MENU AT THE EVALUATION.PHP PAGE ON GRAPH CATEDORIES AND MORE-------------------------------------------------->
</head>
<body>
           <?php /*?><p>Africa Herald Publishing House fully participates in the worldwide evangelism through the saturation of the region with quality printed materials. We are located near Kendu Town within Homa Bay County near the Kenya Lake Conference Offices.</p>
      <div class="cleaner_h40"></div><?php */?>
        
<!--DROP DOWN EVALUATION MORE PAGES BELOW STARTING--------------------------------------------------------------------------------------->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<body>
<ul id="nav" class="dropdown dropdown-horizontal">
	
	<li><a href="evaluation.php" class="dir"> [ Select Category ] </a>
		<ul>
			
			<li><a href="evaluation.php">Highest Customer Sales</a></li>
			<li><a href="evaluationi.php">Highest Payment Method</a></li>
			<li><a href="evaluationii.php">Highest State Sales</a></li>			
			<!--<li><a href="./">Highest Payment Method</a></li>--->
		
	 	</li>
		</ul>
	</li>
</ul>
</body>
</html>
<!--DROP DOWN EVALUATION MORE PAGES BELOW ENDING-------------------------------------------------------------------------------------------->
<!--------............................................................................................-------------------------------------->
<!--GRAPH ONE STARTS__evaluate the highest amt of KSHS customer order----------GRAPH SALES SYSTEM CODES------------------->	
<html lang="en">
<?php
mysql_select_db('Bookshop',mysql_connect('localhost','root',''))or die(mysql_error());
?>
         <!-- <div class="container">-->
        <div class="row-fluid">
            <!--<div class="span12">-->
                <!--<div class="hero-unit-table"> -->  
                    <!-- <div class="charts_container">-->
                        <!--<div class="chart_container">-->
                           <!--<div class="alert alert-info">Customer Evaluation for the Highest Sales.<p>-->										 	 	
				 </div>  
                                    <canvas id="chartCanvas1" width="700" height="450"> <!--the size of the charts controller-->
                                        Your web-browser does not support the HTML 5 canvas element.
                                    </canvas>
                             <!--   </div>
                            </div>-->
		        <!--</div>-->
                            <script type="application/javascript">
                                var chart1 = new AwesomeChart('chartCanvas1');
                                chart1.data = [
                                <?php
                                $query = mysql_query("select * from bsc_order_header") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo $row['payment_amount'] . ','; ?>	
                                <?php }; ?>
                                ];
                                chart1.labels = [
                                <?php
                                $query = mysql_query("select * from bsc_order_header") or die(mysql_error());
                                while ($row = mysql_fetch_array($query)) {
                                    ?>
                                    <?php echo "'" . $row['first_name'] . "'" . ','; ?>	
                                <?php }; ?>
                                ];
                                chart1.colors = ['#006CFF', '#FF6600', '#34A038', '#945D59', '#93BBF4', '#F493B8'];
                                chart1.randomColors = true;
                                chart1.animate = true;
                                chart1.animationFrames = 50;
                                chart1.draw();
                               </script>
<!--2 CHART END-------------------------------------------------------------------------------------------------->
                        </div>
                    </div>
                </div>
                <!-- end slider -->
            </div>
        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>
</div>
</body>
</html>
