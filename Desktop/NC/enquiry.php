 <?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "info@nandicoaching.com";
 
    $email_subject = "Enquiry Form Deatils";
 
    
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['first_name']) ||
 
        !isset($_POST['last_name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['telephone']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $first_name = $_POST['first_name']; // required
 
    $last_name = $_POST['last_name']; // required
 
    $email_from = $_POST['email']; // required
 
    $telephone = $_POST['telephone']; // not required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
 
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
 
  }
 
  if(!preg_match($string_exp,$last_name)) {
 
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
 
  }
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Enquiry form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
 
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
 
    $email_message .= "Email Address: ".clean_string($email_from)."\n";
 
    $email_message .= "Mobile Number: ".clean_string($telephone)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
 
 
<p style="color:blue font-size:15px">Thank you for contacting us.
We will be in touch with you very soon.</p>
 
 
 
<?php
 
}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Diploma / Diploma CET & B.E Coaching Centre</title>

    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="assets/css/style.css" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<style>
	.nandii {
    text-shadow: 2px 2px white;
	
}
	
	</style>
  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        
		
 
<marquee > Post Free Advertising  in Nandi Coaching Centre......  </marquee>
 
			
			  <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>info@nandicoaching.com</span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>+91-97404-88603 / 98803-49593</span>
                  </div>
                </div>
				  
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                <!--  <nav>
                    <ul class="mu-top-social-nav">
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/nandicoachingcentre" target="_blank"><span class="fa fa-facebook"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/NANDICOACHING1" target="_blank"><span class="fa fa-twitter"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Google+" href="https://plus.google.com/112739527911576187383" target="_blank" ><span class="fa fa-google-plus"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Linked In" href="https://www.linkedin.com/in/nandi-coaching-centre-606163121?trk=nav_responsive_tab_profile" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Youtube" href="https://www.youtube.com/watch?v=xtUQk_r0GFk&feature=&app=desktop" target="_blank"><span class="fa fa-youtube"></span></a></li>
                   
				   </ul>
                  </nav> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand nandii" href="index.html"><span>Nandi Coaching Centre</span></a>
         
		  <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
		    
            <li class="active"><a href="index.html">Home</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Project <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
               <li><a href="pmtech.html">M.Tech</a>
                  </li>
				 <li><a href="pbe.html">B.E</a>
                  </li>
                  <li><a href="pdiploma.html">Diploma</a>
                  </li>
                  <li><a href="#">B.Sc</a>
                  </li>
                  <li><a href="#">MCA</a>
                  </li>
				   <li><a href="#">BCA</a>
                  </li>
                               
              </ul>
            </li>    

		
          <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Training <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
               <li><a href="webdesign.html">Web Design</a>
                  </li>

				    <li><a href="mobileapp.html">MobileApp</a>
                  </li>
                  <li><a href="websites.html">Websites</a>
                  </li>
				    <li><a href="php.html">PHP</a>
                  </li>
				    <li><a href="databases.html">Databases</a>
                  </li>
                  <li><a href="#">PC Hardware & Networking</a>
                  </li>
				   <li><a href="#">Embedded Course</a>
                  </li>
                  <li><a href="#">Software Testing</a>
                  </li>
                  <li><a href="#">Java</a>
                  </li>
				  <li><a href="#">C & C++</a>
                  </li>
				  <li><a href="#">VLSI</a>
                  </li>
				  <li><a href="#">.NET</a>
                  </li>
                               
              </ul>
            </li>    
		  
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Coaching<span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                 <li><a href="cbe.html">B.E</a>
                  </li>
                  <li><a href="cdiploma.html">Diploma</a>
                  </li>
                  <li><a href="cdiplomacet.html">Diploma CET</a>
                  </li>
                  
				   <li><a href="#">P.U.C (I & II)</a>
                  </li>
                  <li><a href="#">8th, 9th, 10th</a>
                  </li>
                 
				             
              </ul>
            </li>   
	 <li><a href="careers.html">Careers</a></li>			
  		 <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li>
                   
           
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section><br>
    <!-- End Home Page Slider -->

	      <div class="row">
			 <div class="col-md-8" id="contactForm">
                <h3>Send us a Message</h3><br>
                <form name="sentMessage"  name="contactform" method="post" action="enquiry.php"  novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>First Name :</label>
                            <input type="text" class="form-control" name="first_name"  required placeholder="Enter first name">
                            <p class="help-block"></p>
                        </div>
                    </div>
					<div class="control-group form-group">
                        <div class="controls">
                            <label>Last Name :</label>
                            <input type="text" class="form-control" name="last_name"  required placeholder="Enter last name">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mobile Number:</label>
                            <input type="tel" class="form-control" name="telephone"  maxlength="15" required placeholder="Enter 10 digits mobile number">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email"   required placeholder="Enter email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="2" cols="10" name="comments" maxlength="500" class="form-control"   placeholder="Enter  message"  style="resize:none" required ></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Submit</button><br><br>
                </form>
            </div>
            
        </div>
	
     <!-- Start Footer -->
   <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">Advertise with Us</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">News</a></li>
                  <li><a href="#">News Letter</a></li>
                  <li><a href="#">Sitemap</a></li>
                 
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="#">FAQs</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Download Files</a></li>
                  <li><a href="#">Quick Enquiry</a></li>
                  <li><a href="#">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
              <h4>Follow Us</h4>
            
                    <ul class="mu-top-social-nav">
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/nandicoachingcentre" target="_blank"><span class="fa fa-facebook"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/NANDICOACHING1" target="_blank"><span class="fa fa-twitter"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Google+" href="https://plus.google.com/112739527911576187383" target="_blank" ><span class="fa fa-google-plus"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Linked In" href="https://www.linkedin.com/in/nandi-coaching-centre-606163121?trk=nav_responsive_tab_profile" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Youtube" href="https://www.youtube.com/watch?v=xtUQk_r0GFk&feature=&app=desktop" target="_blank"><span class="fa fa-youtube"></span></a></li>
                   
				   </ul>				
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact Us</h4>
                <address>
                  <p># 51/102, 20th  Main Road,</p>
				  
                  <p>Marenahalli Road Vijayanagar,</p>
				  <p>Bengaluru-560040</p>
                  <p>Website: www.nandicoaching.com</p>
                  <p>Email: info@nandicoaching.com</p>
			   <p><i class="fa fa-phone"></i> +91-97404-88603</p>
			  <p><i class="fa fa-phone"></i> +91-98803-49593</p>
			  </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy;2016 Nandi Coaching Centre. Designed by <a href="#" rel="nofollow">Raveendra R</a></p>
        
		</div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

   <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72506204-1', 'auto');
  ga('send', 'pageview');

</script>

  </body>
</html>