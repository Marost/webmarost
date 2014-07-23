<?php 
$name_of_your_site = "yourcompanyname.com"; 
$email_adress_reciever = "gsrthemes9@gmail.com";

if(isset($_POST['Send']))
{
	include('send.php');	
}
?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Ainex - A Professional Hosting Theme</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <?php require_once("w-header-script.php"); ?>

</head>

<body>

<div class="wrapper_boxed">

<div class="site_wrapper">

<?php require_once("w-header.php"); ?>

<div class="clearfix"></div>
 
<div class="page_title">
	<div class="container">
		<div class="title"><h1>Contact</h1></div>
        <div class="pagenation">&nbsp;<a href="index.html">Home</a> <i>/</i> Contact</div>
	</div>
</div><!-- end page title --> 

<div class="clearfix"></div>


<!-- Contant
======================================= -->

<div class="container">

	<div class="content_fullwidth">
        	
    <div class="one_half">
        

    <p>Feel free to talk to our online representative at any time you please using our Live Chat system on our website or one of the below instant messaging programs.</p>
    <br />
    <p>Please be patient while waiting for response. (24/7 Support!)
    <strong>Phone General Inquiries: 1-888-123-4567-8900</strong></p>

    <br />
    <h3><i>Contact Form</i></h3>

    <form action="" method="post">
    
        <fieldset>
        
        <?php if (!isset($errorC) || $errorC == true){ ?>
        
        <label for="name" class="blocklabel">Your Name*</label>
        <p class="<?php if (isset($the_nameclass)) echo $the_nameclass; ?>" ><input name="yourname" class="input_bg" type="text" id="name" value='<?php if (isset($the_name)) echo $the_name?>'/></p>
        
        
        <label for="email" class="blocklabel">E-Mail*</label>
        <p class="<?php if (isset($the_emailclass)) echo $the_emailclass; ?>" ><input name="email" class="input_bg" type="text" id="email" value='<?php if (isset($the_email)) echo $the_email ?>' /></p>
        
        
        <label for="website" class="blocklabel">Website</label>
        <p><input name="website" class="input_bg" type="text" id="website" value="<?php if (isset($the_website))  echo $the_website?>"/></p>
        
        
        <label for="message" class="blocklabel">Your Message*</label>
        <p class="<?php if (isset($the_messageclass)) echo $the_messageclass; ?>"><textarea name="message" class="textarea_bg" id="message" cols="20" rows="7" ><?php  if (isset($the_message)) echo $the_message ?></textarea></p>
        
        
        <p>
        <input type="hidden" id="myemail" name="myemail" value="<?php echo $email_adress_reciever; ?>" />
        <input type="hidden" id="myblogname" name="myblogname" value="<?php echo $name_of_your_site; ?>" />
        <div class="clearfix"></div>
        <input name="Send" type="submit" value="SUBMIT" class="comment_submit" id="send"/></p>
        <?php } else { ?> 
        
        <div class="success">
            <div class="message-box-wrap">
               Your message has been <strong>Received Successfully!</strong> Thank you!</div>
        </div>
        
        <?php } ?>
        
        </fieldset>
        
        </form> 
    
    </div>
               
    <div class="one_half last">
    
        <div class="address-info">
            <h3><i>Address Info</i></h3>
                <ul>
                <li>
                <strong>Company Name</strong><br />
                2901 Marmora Road, Glassgow, Seattle, WA 98122-1090<br />
                Telephone: +1 1234-567-89000<br />
                FAX: +1 0123-4567-8900<br />
                E-mail: <a href="mailto:mail@companyname.com">mail@companyname.com</a><br />
                Website: <a href="index.html">www.yoursitename.com</a>
                </li>
            </ul>
        </div>

         <h3><i>Find the Address</i></h3>
            <iframe class="google-map" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=WA,+United+States&amp;aq=0&amp;oq=WA&amp;sll=47.605288,-122.329296&amp;sspn=0.008999,0.016544&amp;ie=UTF8&amp;hq=&amp;hnear=Washington,+District+of+Columbia&amp;t=m&amp;z=7&amp;iwloc=A">View Larger Map</a></small>
        
    </div>
            
</div>

</div><!-- end content area -->


    <?php require_once("w-footer-texto.php"); ?>

    <?php require_once("w-footer.php"); ?>
 
</div>
</div>

<?php require_once("w-footer-script.php"); ?>

</body>
</html>