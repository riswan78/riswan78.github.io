<?php
if(isset($_POST['Send']))
{
//echo "clicked";
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
 $Subject = $_POST['Subject'];
  $Message = $_POST['Message'];
  $to = 'vpbajio@gmail.com';
  $header = "from: $Name<$Email>";
  $message = "Name: $Name \n\n Email:$Email \n\n Subject:$Subject \n\n Message:$Message";
  if(mail($to,$Subject,$message,$header))
  {
  echo "mail sent successfully";
  }
  else
  {
  echo "Try again****";
  }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Respawn</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Box  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="js/jquery.min.js"></script>

<link rel="icon" type="images/gif/png" href="images/Logo1.png">
</head>
<body>
<!-- header -->
<div class="header">
	 <div class="container">
		 <div class="headr-left">
			 <div class="social">							
					<a href="https://www.facebook.com/
"><i class="facebook"></i></a>
						<a href="https://twitter.com/
"><i class="twitter"></i></a>
						<a href="https://plus.google.com/
"><i class="gplus"></i></a>	
						<a href="https://www.pinterest.com/
"><i class="pin"></i></a>	
						<a href="https://www.youtube.com/
"><i class="youtube"></i></a>
			 </div>
			 <div class="search">
				 <form>
					 <input type="submit" value="">
					 <input type="text" value="" placeholder="Search...">					 
				 </form>
			 </div>
			 <div class="clearfix"></div>
		 </div>
		 <div class="headr-right">
			 <div class="details">
				 <ul>
					 <li><a href="mailto@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info@respawn.com</a></li>
					 <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456789</li>
				 </ul>
			 </div>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!--banner-info-->	
<div class="banner-info">
	  <div class="container">
		  <div class="logo">
				 <h1><a href="index.html">RESPAWN</a></h1>
		  </div>
		 <div class="top-menu">
		     <span class="menu"></span>
			  <ul class="nav1">
					 <li><a href="index.html">Home</a></li>
					 <li><a href="about.html">About</a></li>
					 <li><a href="reviews.html">Reviews</a></li>
					 <li><a href="gallery.html">Gallery</a></li>
					 <li class="active"><a href="contact.html">Mail</a></li>
			  </ul>
		 </div>	
<!-- script-for-menu -->
					<script>
						 $( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						// Animation complete.
							});
							});
					</script>
				<!-- /script-for-menu -->		 
		 <div class="clearfix"></div>
	 </div>
</div>
<!-- banner -->
<div class="banner">		  			
		<div class="bnr2">						  
	   </div>			 
</div>
<!---->
<div class="contact">
	 <div class="container">
     
     <div class="contact">
			
			<div class="container">
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form action="#" method="post">
						<input type="text" value="Name" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Name';}">
					
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" value="Subject" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Subject';}">
						
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						<div class="send">
							<input type="submit" value="Send" name="Send">
						</div>
					</form>
				</div>
                s
		<!-- <div class="contact-head">
		 	 <h2>Contact</h2>
			  <form>
				  <div class="col-md-6 contact-left">
					<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
					<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
					<input type="text" class="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
				 </div>
				 <div class="col-md-6 contact-right">
						 <textarea value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
						 <input type="submit" value="SEND"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
		 </div> -->
		 <div class="contact-map">
				
	     </div>
		 <div class="address">
			 <h3>Our Locations</h3>
			 <div class="locations">				 
				  <ul>
					 <li><span></span></li>					 					
					 <li>
						 <div class="address-info">	
							 <h4>New York, Washington</h4>
							 <p>10-765 MD-Road</p>
							 <p>Washington, DC, United States,</p>
							 <p>Phone: 123 456 7890</p>
							 <p>Mail: <a>info@respwan.com</a></p>
							 <h5><a href="">Visit on Google Maps >></a></h5>	
						 </div>
					 </li>				
				  </ul>	
				  
			 </div>			 
		 </div>		 
	 </div>
</div>
<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 ftr-info">
				 <h3>About Us</h3>
				 <p>Respawn is the best destination for your gaming needs. You can find Latest games, Games Reviews and much more.</p>
			 </div>
			
			 </div>
			 <div class="col-md-3 ftr-grid">
				
			 <div class="col-md-3 ftr-grid">
				 <h3>Information</h3>
				 <ul class="ftr-list">	
					 <li><a href="#">Contact Us</a></li>
									 
				 </ul>				 
			 </div>		
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p> © 2016 Respawn</a></p>
	 </div>
</div>
<!---->
 


</body>
</html>