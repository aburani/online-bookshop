<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>


<!--contact form start------------------------------------------------------------------------------------>
<?php
// Set email variables
$email_to = 'aburan@yahoo.com';  //where the messages from the form made will be sent to
$email_subject = 'Form submission';

// Set required fields
$required_fields = array('fullname','email','comment');

// set error messages
$error_messages = array(
	'fullname' => 'Please enter a Name to proceed.',
	'email' => 'Please enter a valid Email Address to continue.',
	'comment' => 'Please enter your Message to continue.'
);

// Set form status
$form_complete = FALSE;

// configure validation array
$validation = array();

// check form submittal
if(!empty($_POST)) {
	// Sanitise POST array
	foreach($_POST as $key => $value) $_POST[$key] = remove_email_injection(trim($value));
	
	// Loop into required fields and make sure they match our needs
	foreach($required_fields as $field) {		
		// the field has been submitted?
		if(!array_key_exists($field, $_POST)) array_push($validation, $field);
		
		// check there is information in the field?
		if($_POST[$field] == '') array_push($validation, $field);
		
		// validate the email address supplied
		if($field == 'email') if(!validate_email_address($_POST[$field])) array_push($validation, $field);
	}
	
	// basic validation result
	if(count($validation) == 0) {
		// Prepare our content string
		$email_content = 'New Website Comment: ' . "\n\n";
		
		// simple email content
		foreach($_POST as $key => $value) {
			if($key != 'submit') $email_content .= $key . ': ' . $value . "\n";
		}
		
		// if validation passed ok then send the email
		mail($email_to, $email_subject, $email_content);
		
		// Update form switch
		$form_complete = TRUE;
	}
}

function validate_email_address($email = FALSE) {
	return (preg_match('/^[^@\s]+@([-a-z0-9]+\.)+[a-z]{2,}$/i', $email))? TRUE : FALSE;
}

function remove_email_injection($field = FALSE) {
   return (str_ireplace(array("\r", "\n", "%0a", "%0d", "Content-Type:", "bcc:","to:","cc:"), '', $field));
}

?>
<!--contact form end-------------------------------------------------------------------------------------->
<html>
<head>

<!---------------------start additional part from contact.php--------------------------->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="contact/css/contactform.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/mootools/1.3.0/mootools-yui-compressed.js"></script>
	<script type="text/javascript" src="contact/validation/validation.js"></script>
		
		<script type="text/javascript">
				<!--
				var nameError = '<?php echo $error_messages['fullname']; ?>';
						var emailError = '<?php echo $error_messages['email']; ?>';
						var commentError = '<?php echo $error_messages['comment']; ?>';
				
				function MM_preloadImages() { //v3.0
				  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
					var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
					if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
				}
				//-->
		</script>
<!---------------------end additional part from contact.php--------------------------->
<link rel="shortcut icon" type="image/x-icon" href="css/dropdown/themes/adobe.com/images/sda2.png" /><!--HOW TO PUT ICON FOR THE WEBSITE PAGE UP WHERE THERES HEADING-->
<link href="templatemo_style_2.css" rel="stylesheet" type="text/css" />  <!--------Glowing menu when pointer is on hover-------->
</head>
<body>

    <?php include('main_menu/navhead_3.php'); ?>
    
    <?php include('social.php'); ?> 

    <div class="container">
        <div class="row-fluid">
            <div class="span3">

                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <!--<i class="icon-calendar icon-large"></i>-->
                        <!--<>Herald Publishing House<>-->
                             <div class="brand">
                                 <a  href="shop.php"><img src="images_2/templatemo_logo.png" width="195" height="95" /> <span class="hidden-sm hidden-sx"><!-- Book Shopping SLOGAN GOES HERE--></span></a>
                             </div>
                    </div>
                </div>

                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                      <!--<li class="nav-header">Menu Category</li><p>--><p></p>
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
							
							 <li  class="active"><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
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
                            <div class="alert alert-success"> 
							<!--			<marquee>
<b style="color:#006600; scrollamount:40000"> Africa Herald Publishing House Online Shopping Bookstore..... TEL :+254(0) 728 701 598 Email: aburanick@hotmail.com </br> </b> 
							</marquee>-->
							<h3><b>Contact Us</b></h3>
							</div>
												

                                   <h3>Our Contact Address 
								   </h3>
									<!--<br>-->
Africa Herald Publishing House fully participates in the worldwide evangelism through the saturation of the region with quality printed materials.
We are located near Kendu Town within Homa Bay County near the Kenya Lake Conference Offices.	<br><br>



Africa Herald Publishing House <p>
P.O. Box 95 - 40301, <p>
Kendu-Bay, Kenya <p>
Phone 1: +254 700136116 <p>
Phone 2: +254 732265155 <p>
E-mail: ahpheau@gmail.com
								
									

									
									<h3>Fill the Form Below to Contact Us
								   </h3>
									<br>
									

							<!--<div class="cleaner_h50"></div>-->
           <!-- <h3>Fill the Form Below to Contact Us</h3><br>-->
            	
<body onload="MM_preloadImages('contact/images/x.png')">
		
		<div id="formWrap">
								
		<div id="form">

<?php if($form_complete === FALSE): ?>

<form action="contact.php" method="post" id="comments_form">
	<div class="row">
	<div class="label"> Your Name</div><!--en .label-->
	<div class="input">
	<input type="text" id="fullname" class="detail" name="fullname" value="<?php echo isset($_POST['fullname'])? $_POST['fullname'] : ''; ?>
"/><?php if(in_array('fullname', $validation)): ?><span class="error"><?php echo $error_messages['fullname']; ?></span><?php endif; ?>




	</div><!--end .input-->
	<!--<div class="context">e.g Nick Abura or Victor Lee</div>-->
	</div><!--end .row-->
		
	<div class="row">
	<div class="label"> Your Email Address</div><!--end .label-->
	<div class="input">
	<input type="text" id="email" class="detail" name="email" value="<?php echo isset($_POST['email'])? $_POST['email'] : ''; ?>"/><?php if(in_array('email', $validation)): ?><span class="error"><?php echo $error_messages['email']; ?></span><?php endif; ?>
		
	</div><!--end .input-->
	<!--<div class="context2">We will not share your email with anyone or spam you with messages either</div>-->
	<!--end .context-->
	</div><!--end .row-->
	
	<div class="row">
	<div class="label"> Your Message</div>  <!--end .label-->
	<div class="input2">
	<textarea id="comment" name="comment" class="mess">
<?php echo isset($_POST['comment'])? $_POST['comment'] : ''; ?>
</textarea>
<?php if(in_array('comment', $validation)): ?><span class="error"><?php echo $error_messages['comment']; ?></span><?php endif; ?>
	</div><!--end .input-->
	</div><!--end .row-->
	
	<div class="submit">
	<input type="submit" name="submit" value="Send Message"/>
	<input type="reset" name="Reset" value="Reset Message"/>
	</div><!--end .submit-->
</form>
			
<?php else: ?>
<p style="font-size:35px; font-family:Arial, Helvetica, sans-serif; color:#006600; margin-left:25px;">Thank you for your Message!</p>

		<script type="text/javascript">
				setTimeout('ourRedirect()', 5000) //5000 is equal to 5 seconds counts
				function ourRedirect(){
					location.href='contact.php'	
				}	
		</script>

<?php endif; ?>
                
               
	
<!--</div><!--end #form-->
</div><!--end formWrap-->      
    
    </div>

                             <?php /*?><div class="row-fluid">
                                <div class="span6">

                                    <p><i class="icon-circle"></i>&nbsp;Contact I</p>
									</div>
									</div>
                                  <!-- <p><i class="icon-circle"></i>&nbsp;Accounting - 495-5560</p>
                                    <p><i class="icon-circle"></i>&nbsp;President's Office - 495-4064(telefax)</p>
                                    <p><i class="icon-circle"></i>&nbsp;  VPA/PME - 495-1635</p>
                                    <p><i class="icon-circle"></i>&nbsp;  Registrar Office - 495-4657(telefax)</p>
                                    <p><i class="icon-circle"></i>&nbsp;  Cashier - 712-7272</p>
                                    <p><i class="icon-circle"></i>&nbsp;  CIT - 712-0670</p>
                                    <p><i class="icon-circle"></i>&nbsp;  SAS/COE - 495-6017</p>
                                    <p><i class="icon-circle"></i>&nbsp;  BAC - 712-8404(telefax)</p>
                                    <p><i class="icon-circle"></i>&nbsp;  Records - 495-3470</p>-->


                                </div>
                                <div class="span6">

                                    <!--<p><i class="icon-circle"></i>&nbsp;  Supply - 495-3767</p>
                                    <p><i class="icon-circle"></i>&nbsp;Internet Lab - 712-6144/712-6459</p>
                                    <p><i class="icon-circle"></i>&nbsp;COA - 495-5748</p>
                                    <p><i class="icon-circle"></i>&nbsp; Guard House - 476-1600</p>
                                    <p><i class="icon-circle"></i>&nbsp;HRM - 495-4996</p>
                                    <p><i class="icon-circle"></i>&nbsp;Extension - 457-2819</p>
                                    <p><i class="icon-circle"></i>&nbsp;   Canteen - 495-5396</p>
                                    <p><i class="icon-circle"></i> &nbsp;  Research - 712-8464</p>
                                    <p><i class="icon-circle"></i>  &nbsp; Library - 495-5143</p>-->
                                    <p><i class="icon-circle"></i>  &nbsp; Contact II</p>
                                </div>
                            </div><?php */?>
							
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

</body>
</html>
