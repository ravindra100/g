<?php
		
		// include phpmailer class
		require_once 'mailer/class.phpmailer.php';
		// creates object
		$mail = new PHPMailer(true);	
		
		if(isset($_POST['btn_send']))
		{
			$full_name  = strip_tags($_POST['full_name']);
			$email      = strip_tags($_POST['email']);
			$subject    = "Nandi Coaching Centre News Letter.";
			$text_message    = "Hello $full_name, <br /><br /> Nandi coaching centre of academy of technical education centre as set up in various parts of the karnataka like bengaluru , mysore and bagalkot.with an objective to high class education and coaching for BE students and diploma board of technical education bengaluru (BTE).";			   
			
			
			// HTML email starts here
			
			$message  = "<html><body>";
			
			$message .= "<table width='100%' bgcolor='#e0e0e0' cellpadding='0' cellspacing='0' border='0'>";
			
			$message .= "<tr><td>";
			
			$message .= "<table align='center' width='100%' border='0' cellpadding='0' cellspacing='0' style='max-width:650px; background-color:#fff; font-family:Verdana, Geneva, sans-serif;'>";
				
			$message .= "<thead>
						<tr height='80'>
							<th colspan='4' style='background-color:#f5f5f5; border-bottom:solid 1px #bdbdbd; font-family:Verdana, Geneva, sans-serif; color:#333; font-size:34px;' >Nandi Coaching Centre</th>
						</tr>
						</thead>";
				
			$message .= "<tbody>
						<tr align='center' height='50' style='font-family:Verdana, Geneva, sans-serif;'>
							<td style='background-color:#00a2d1; text-align:center;'><a href='http://www.nandicoaching.com/cdiploma.html' style='color:#fff; text-decoration:none;'>Diploma</a></td>
							<td style='background-color:#00a2d1; text-align:center;'><a href='http://www.nandicoaching.com/cdiplomacet.html' style='color:#fff; text-decoration:none;'>Diploma CET</a></td>
							<td style='background-color:#00a2d1; text-align:center;'><a href='http://www.nandicoaching.com/webdesign.html' style='color:#fff; text-decoration:none;' >Web Design</a></td>
							<td style='background-color:#00a2d1; text-align:center;'><a href='http://www.nandicoaching.com/websites.html' style='color:#fff; text-decoration:none;' >Website Design</a></td>
						</tr>
						
						<tr>
							<td colspan='4' style='padding:15px;'>
								<p style='font-size:20px;'>Hi' ".$full_name.",</p>
								<hr />
								<p style='font-size:25px;'>Nandi Coaching Centre</p>
								<img src='http://nandicoaching.com/images/slider/2.png' alt='Nandi Coaching Centre' title='Nandi Coaching Centre' style='height:auto; width:100%; max-width:100%;' />
								<p style='font-size:15px; font-family:Verdana, Geneva, sans-serif;'>".$text_message.".</p>
							</td>
						</tr>
						
						<tr height='80'>
							<td colspan='4' align='center' style='background-color:#f5f5f5; border-top:dashed #00a2d1 2px; font-size:24px; '>
							<label>
							Follow us on : 
							<a href='https://www.facebook.com/nandicoachingcentre' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-facebook-m.png' /></a>
							<a href='https://twitter.com/NANDICOACHING1' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-twitter-m.png' /></a>
							<a href='https://plus.google.com/112739527911576187383' target='_blank'><img style='vertical-align:middle' src='https://cdnjs.cloudflare.com/ajax/libs/webicons/2.0.0/webicons/webicon-googleplus-m.png' /></a>
						
							</label>
							</td>
						</tr>
						
						</tbody>";
				
			$message .= "</table>";
			
			$message .= "</td></tr>";
			$message .= "</table>";
			
			$message .= "</body></html>";
			
			// HTML email ends here
			
			try
			{
				$mail->IsSMTP(); 
				$mail->isHTML(true);
				$mail->SMTPDebug  = 0;                     
				$mail->SMTPAuth   = true;                  
				$mail->SMTPSecure = "ssl";                 
				$mail->Host       = "smtp.gmail.com";      
				$mail->Port       = 465;             
				$mail->AddAddress($email);
				$mail->Username   ="raveendrar35@gmail.com";  
				$mail->Password   ="raviroodagi";            
				$mail->SetFrom('raveendrar35@gmail.com','nandi-coaching-centre');
				$mail->AddReplyTo("raveendrar35@gmail.com","nandi-coaching-centre centre");
				$mail->Subject    = $subject;
				$mail->Body 	  = $message;
				$mail->AltBody    = $message;
					
				if($mail->Send())
				{
					
					$msg = "<div class='alert alert-success'>
							Hi,<br /> ".$full_name." mail was successfully sent to ".$email." go and check, cheers :)
							</div>";
					
				}
			}
			catch(phpmailerException $ex)
			{
				$msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
			}
		}	
		
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title> News Letter</title>


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
                  <nav>
                    <ul class="mu-top-social-nav">
                   <li><a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/nandicoachingcentre" target="_blank"><span class="fa fa-facebook"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Twitter" href="https://twitter.com/NANDICOACHING1" target="_blank"><span class="fa fa-twitter"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Google+" href="https://plus.google.com/112739527911576187383" target="_blank" ><span class="fa fa-google-plus"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Linked In" href="https://www.linkedin.com/in/nandi-coaching-centre-606163121?trk=nav_responsive_tab_profile" target="_blank"><span class="fa fa-linkedin"></span></a></li>
                      <li><a class="facebook itl-tooltip" data-placement="bottom" title="Youtube" href="https://www.youtube.com/watch?v=xtUQk_r0GFk&feature=&app=desktop" target="_blank"><span class="fa fa-youtube"></span></a></li>
                   
					</ul>
                  </nav>
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
            <li><a href="index.html">Home</a></li>            
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
                  <li><a href="#">I.T.I</a>
                  </li>
				   <li><a href="#">P.U.C</a>
                  </li>
                  <li><a href="#">S.S.L.C</a>
                  </li>
                  <li><a href="#">I to IX</a>
                  </li>
				             
              </ul>
            </li>            
            <li><a href="contact.html">Contact</a></li>
            
		 </ul>                   
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
             <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>News Letter</h2>
           <ol class="breadcrumb">
            <li><a href="#">Home</a></li>            
            <li class="active">News Letter</li>
		
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End breadcrumb -->

 <!-- Start contact  -->
 <section id="mu-contact">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="mu-contact-area">
          <!-- start title -->
          <div class="mu-title">
            <h2>News Letter</h2>
			
			


	    
    <div class="email-form">
    
    	<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
        
    	<form method="post" class="form-control-static">
        
            <div class="form-group">
                <input class="form-control"  type="text" name="full_name" placeholder="Full Name" />
            </div>
            
            <div class="form-group">
                <input class="form-control" type="text" name="email" placeholder="Email address" />
            </div>
            
            <div class="form-group">
                <button class="btn btn-success" type="submit" name="btn_send">
                Subscribe
                </button>  
			
				
            </div>
        
    	</form>
    </div>    
          
		  </div>
          <!-- end title -->
          
          <!-- end contact content -->
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- End contact  -->
 

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
                  <li><a href="#">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Course</a></li>
                  <li><a href="">Event</a></li>
                  <li><a href="">Sitemap</a></li>
                  <li><a href="">Term Of Use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Download Files</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & academic offers</p>
                <form class="mu-subscribe-form">
                  <input type="email" placeholder="Type your Email">
                  <button class="mu-subscribe-btn" type="submit">Subscribe!</button>
                </form>               
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
               	   <p><i class="fa fa-mobile"></i> <strong>Mobile:</strong> +91-97404-88603</p>
			  <p><i class="fa fa-mobile"></i> <strong>Mobile:</strong> +91-98803-49593</p>
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

  </body>
</html>