<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>For Register</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- owl carousel style -->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.2.4/assets/owl.carousel.min.css" />
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="header_bg">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="logo" href="index.html"><img src="images/logo.png"></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                           <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="services.php">For Registration</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="admin.php">Admin</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="contact.html">Contact Us</a>
                        </li>
                     </ul>
                     <div class="call_section">
                        <ul>
                           <div class="donate_bt"><a href="#"><img src="images/search-icon.png"></a></div>
                        </ul>
                     </div>
                  </div>
               </nav>
            </div>
         </div>
      </div>
      <!--header section end -->
      
      <!-- blog section start -->
      <div class="blog_section layout_padding">
         <div class="container">
		 <div class="application"style="border: #37dcfa 1px; background-color:#b2c7e5; height: 650px;float:left;width:61.5%;">
            <form action="" method="post" enctype="multipart/form-data">
		<fieldset>
		<legend><p style="color:#ffffff; font-size: 30px;font-weight: bold; text-align:center;">Student Regisration</p></legend>
		<table>
			<tr><td><p style="color:#000000">First Name:	</p></td>
				<td><input type="text" name="FName" required placeholder="saman" style="border-radius:7px; padding:10px 20px 3px 2px;"/></td></tr>
			<tr><td><p style="color:#000000">Last Name:		</p></td>
				<td><input type="text" name="LName" required placeholder="perera" style="border-radius:7px; padding:10px 20px 3px 2px;"/></td></tr>
			<tr><td><p style="color:#000000">Date of Birth:		</p></td>
				<td><input type="date" name="DOB" required style="border-radius:7px; padding:10px 20px 3px 2px;"/></td></tr>
			<tr><td><p style="color:#000000">National Identity No:		</td>
				<td><input type="text" name="NIC" required placeholder="20007542470" style="border-radius:7px; padding:10px 20px 3px 2px;"/></td></tr>
			<tr><td><p style="color:#000000">Permanant Address:		</p></td>
				<td><input type="text" name="Address" required placeholder="No 35, Dandeniya, Eheliyagoda" style="border-radius:7px; padding:10px 20px 3px 2px;">
				</td></tr>
			<tr><td><p style="color:#000000">Email Address:		</p></td>
				<td><input type="email" name="EMail" required placeholder="abc@gmail.com" style="border-radius:7px; padding:10px 20px 3px 2px;"/></td></tr>
			<tr><td><p style="color:#000000">Contact Number:		<p></td>
				<td><input type="text" name="TPNo" required placeholder="xxx-xxxxxxx" style="border-radius:7px; padding:10px 20px 3px 2px;"/></td></tr>
				<td><p style="color:#000000">Subject Name:		</p></td>
				<td><input type="text" name="SubName" required placeholder="ict" style="border-radius:7px; padding:10px 20px 3px 2px;"/>
				</td></tr>
			<tr><td></td>
				<td><input type="submit" value="Submit" name="sub" style="border-radius:15px; padding:5px 5px 5px 5px;"/>
				<input type="reset" value="Clear" name="res" style="border-radius:15px; padding:5px 10px 5px 10px;"/>
			</td></tr>
		</table>
		</fieldset>
		</form>
			
	<?php
	if(isset($_POST['sub'])){
	$FName=$_POST['FName'];
	$LName=$_POST['LName'];
	$DOB=$_POST['DOB'];
	$NIC=$_POST['NIC'];
	$Address=$_POST['Address'];
	$EMail=$_POST['EMail'];
	$TPNo=$_POST['TPNo'];
	$SubName=$_POST['SubName'];
	$con=new mysqli("localhost","testuser","testuser","learnx_db");
	$sql_insert="INSERT INTO stdetails VALUES ('$FName','$LName','$DOB','$NIC',
	'$Address','$EMail','$TPNo','$SubName')";
	
	if($result=mysqli_query($con,$sql_insert))
		echo"<script>alert('Data inserted succcessfully!');</script>";
	else
		echo"<script>alert('Sorry, data not inserted succcessfully!');</script>";
	
	mysqli_close($con);
	}
?>

			</div>
			<div class="reg_details" style="border: #37dcfa 1px; background-color:#b2c7e5; height: 650px;float:right;width:38.5%;">
			<?php
				if(isset($_POST['sub']))
				{
					$FName=$_POST['FName'];
					echo "First Name :-$FName"."<br/><br/><br/>";
					
					$LName=$_POST['LName'];
					echo "Last Name :-$LName"."<br/><br/><br/>";
					
					$DOB=$_POST['DOB'];
					echo "Date Of Birth	:-$DOB"."<br/><br/><br/>";
					
					$NIC=$_POST['NIC'];
					echo "NIC:-$NIC"."<br/><br/><br/>";
					
					$Address=$_POST['Address'];
					echo "Address:-	$Address"."<br/><br/><br/>";
					
					$EMail=$_POST['EMail'];
					echo "EMail:-$EMail"."<br/><br/><br/>";
					
					$TPNo=$_POST['TPNo'];
					echo "TPNo:-$TPNo"."<br/><br/><br/>";
					
					$SubName=$_POST['SubName'];
					echo "Subiect Name :-$SubName";
					
				}
			?>
			
			
			</div>
         </div>
      </div>
		
        <!-- footer section start -->
      <div class="footer_section layout_padding" style="height: 350px;">
         <div class="container">
           
            
               <div class="row">
                  <div class="col-lg-3 margin_top">
                     <div class="call_text"><a href="#"><img src="images/call-icon1.png"><span class="padding_left_15">Call Now +94 365611979</span></a></div>
                     <div class="call_text"><a href="#"><img src="images/mail-icon1.png"><span class="padding_left_15">learnx12@gmail.com</span></a></div>
                  </div>
                 
                  <div class="col-lg-3 col-md-6">
                     <div class="information_main">
                        <h4 class="information_text">Helpful Links</h4>
                        <div class="footer_menu">
                           <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="about.html">About</a></li>
                              <li><a href="services.php">For Registration</a></li>
                              <li><a href="blog.html">Blog</a></li>
                              <li><a href="news.html">News</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="information_main">
                        <div class="footer_logo"><a href="index.html"><img src="images/logo.png"></a></div>
                     </div>
                  </div>
               </div>
            </div>
         
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">?? LearnX Institute of Higher Education. All Rights Reserved. Design and Developed by <a href="https://html.design">PPwebs</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

