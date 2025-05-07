<?php


$tracking = $_POST['tracking'];

?>

<!DOCTYPE html>

<html lang="en">

<head>

<title>WAL Courier Express </title>

<!-- custom-theme -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Consultancy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 

Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- //custom-theme -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/JiSlider.css" rel="stylesheet"> 

<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<!-- Owl-carousel-CSS --><link href="css/owl.carousel.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->

<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- //font-awesome-icons -->

<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700,900" rel="stylesheet">

</head>

	

<body>

<!-- banner -->

<div class="main_section_agile">

		<div class="agileits_w3layouts_banner_nav">

		   

			<nav class="navbar navbar-default">

				<div class="navbar-header navbar-left">

					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

						<span class="sr-only">Toggle navigation</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

					</button>

					<img src="images/logo.png">



				</div>

				<!-- <ul class="agile_forms">

					<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In</a> </li>

					<li><a href="#" data-toggle="modal" data-target="#myModal3"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Sign Up</a> </li>

				</ul>-->

				<!-- Collect the nav links, forms, and other content for toggling -->

				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">

					<nav class="link-effect-2" id="link-effect-2">

						<ul class="nav navbar-nav">

							<li class="active"><a href="index.html" class="effect-3">Home</a></li>
							<li><a href="about-us.html" class="effect-3">About Us</a></li>

							<li><a href="services.html">Services</a></li>


							<li><a href="how.html" class="effect-3">How To Ship</a></li>

							<li><a href="#" class="effect-3" data-toggle="modal" data-target="#myModal4">Track Package</a></li>

							<li><a href="contact-us.html" class="effect-3">Contact Us</a></li>

						</ul>

					</nav>



				</div>

			</nav>	

<div class="clearfix"> </div> 

		</div>

</div>

<!-- banner -->




<!-- //banner -->



<!-- Modal2 -->

		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">

			<div class="modal-dialog">

					<!-- Modal content-->

				<div class="modal-content">

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

					<div class="login-form">

						<form action="proc-tracking.php" method="post">
<br>
Enter your tracking number below to see progress of package

							<input type="text" name="tracking" placeholder="Enter Traking Number" required="">

							<input type="text" name="email" placeholder="Email" required="">

							<input type="submit" value="GET STATUS">

						</form>

					</div>

				</div>

				</div>

				</div>

			</div>

		</div>

	<!-- //Modal2 -->	



<!-- about -->

	<div class="services" id="services">

		<div class="container">

		<h3 class="w3l_header w3_agileits_header two">TRACKING <span>DETAILS (#<?php echo $tracking; ?>).</span></h3>

<!--		<p class="sub_para_agile two">Ipsum dolor sit amet consectetur adipisicing elit</p>

-->			<div class="col-md-12">
				<h2></h2>
			</div>

			<div class="agile_inner_grids">

																	
<?php 
	include('connect.php');
	$query = "select * from details where tracking = '$tracking'";
	$result = mysqli_query($db,$query);
	$num_results = mysqli_num_rows($result);
				
	if($num_results > 0)
	{
		
		$row = mysqli_fetch_array($result);
		//send login message
		include('login-message.php');

?>	

								   <!-- choose icon -->

								   <div class="col-md-12 choose_icon1">

										<div class="choose_left">

											
											<img src="uploads/<?php echo stripslashes($row['tracking']);?>.jpg" width="220">

										</div>

									<div class="choose_right rrt" style="color: #fff;">

										

          </p>
          
  <?php echo '<p><b>Tracking Movement Checkpoint: </b>'.$num_results.'</p>'; ?>
          <table width="499" border="0" align="center" class="table table-bordered" style="background-color: #fff; color:#000;">
            <tr>
				<td valign="top" class="style2"><strong>Tracking number</strong> </td>
              <td valign="top" class="text-font"><b><?php echo stripslashes($row['tracking']);?></b></td>
            </tr>
            <tr>
              <td valign="top" class="style2"><strong>Name on package </strong></td>
              <td valign="top" class="text-font"><b><?php echo stripslashes($row['name']);?></b></td>
            </tr>
            <tr>
              <td valign="top" class="style2"><strong>Package sent from </strong></td>
              <td valign="top" class="text-font"><b><?php echo stripslashes($row['fromN']);?></b></td>
            </tr>
            <tr>
              <td valign="top" class="style2"><strong>Destination address </strong></td>
              <td valign="top" class="text-font"><b><?php echo stripslashes($row['destination']);?></b>
                  <p></p></td>
            </tr>
									   </table>
            
            <?php  	
		 $query = "select * from details where tracking = '$tracking'";
		 $result = mysqli_query($db,$query);

 		 $num_results = mysqli_num_rows($result);
			for ($i=0; $i <$num_results; $i++)
			{
 			$row = mysqli_fetch_array($result);
  ?>
			<table class="table table-bordered" style="background-color: #E7E7E7; ">
            <tr>
              <td width="119" valign="top" class="text-font">Date</td>
              <td width="370" valign="top" class="text-font"><?php echo stripslashes($row['date']);?></td>
            </tr>
            <tr>
              <td valign="top"><span class="text-font">Location</span></td>
              <td valign="top" class="text-font"><?php echo stripslashes($row['location']);?></td>
            </tr>
            <tr>
              <td valign="top"><span class="text-font">Order Status </span></td>
              <td valign="top" class="text-font"><?php echo stripslashes($row['status']);?></td>
            </tr>
            <tr>
              <td colspan="2"><hr /></td>
            </tr>
				
          </table>
            <?php  }?>
										
<?php }
		else{
			echo '<div align="center" style="color:#fff;">There is no item with the tracking number you have entered. Please click Track Package and try again <br><br><a href="#" class="effect-3" data-toggle="modal" data-target="#myModal4">Track Package</a></div>';
		}
				?>
									</div>

										<div class="clearfix"></div>

									 </div>

								 

								  <!-- choose icon -->

								  

					

								 <div class="clearfix"></div>

							</div>

						</div>

					</div>

<!-- //about -->



<!-- agile_testimonials -->



<!-- //agile_testimonials -->

<!-- footer -->

	<div class="footer">

		<div class="container">

			<div class="w3_agile_footer_grids">

				<div class="col-md-4 w3_agile_footer_grid">

					<h3>Social Media</h3>

					<ul class="agile_footer_grid_list">

						<a href=""><img src="images/twitter.png"></a>

						<a href=""><img src="images/facebook.png"></a>

						<a href=""><img src="images/instagram.png"></a>

					</ul>

				</div>

				<div class="col-md-4 w3_agile_footer_grid">

					<h3>Navigation</h3>

					<ul class="agileits_w3layouts_footer_grid_list">

						
				<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="index.html">Home</a></li>

						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="services.html">Services</a></li>


						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="about-us.html">About Us</a></li>						

						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="" data-toggle="modal" data-target="#myModal4">Track Package</a></li>						

						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="contact-us.html">Contact Us</a></li>

					</ul>

				</div>

				<div class="col-md-4 w3_agile_footer_grid">

					<h3>About Us</h3>

					<ul class="agile_footer_grid_list">

						The overseas expert since 1957, WAL Courier Express specializes in worldwide speed delivery and customized distribution of packages or freight of all sizes and description.<span><a href="about-us.html"> Learn more</a></span></li>

					</ul>

				</div>

				<div class="clearfix"> </div>

			</div>

			<div class="w3_newsletter_footer_grids">

				<div class="w3_newsletter_footer_grid_left">

					<form action="#" method="post">

						<input type="email" name="Email" placeholder="Enter Your Email...." required="">

						<input type="submit" value="SEND">

					</form>

				</div>

			</div>

			

			<div class="agileinfo_copyright">

				<p>© 2021 WAL Courier Express  All Rights Reserved</p>

			</div>

		</div>

	</div>

<!-- //footer -->



<!-- start-smoth-scrolling -->

<!-- js -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<!-- //js -->

<script src="js/JiSlider.js"></script>

<script>

			$(window).load(function () {

				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')

			})

		</script><script type="text/javascript">



  var _gaq = _gaq || [];

  _gaq.push(['_setAccount', 'UA-36251023-1']);

  _gaq.push(['_setDomainName', 'jqueryscript.net']);

  _gaq.push(['_trackPageview']);



  (function() {

    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

  })();



</script>

<!-- stats -->

	<script src="js/jquery.waypoints.min.js"></script>

	<script src="js/jquery.countup.js"></script>

		<script>

			$('.counter').countUp();

		</script>

<!-- //stats -->

<script type="text/javascript">

$(function(){

  $("#bars li .bar").each(function(key, bar){

    var percentage = $(this).data('percentage');



    $(this).animate({

      'height':percentage+'%'

    }, 1000);

  })

})

</script>

<!-- flexisel -->

	<script type="text/javascript" src="js/jquery.flexisel.js"></script>

	<script type="text/javascript">

		$(window).load(function() {

			$("#flexiselDemo1").flexisel({

				visibleItems: 4,

				animationSpeed: 1000,

				autoPlay: true,

				autoPlaySpeed: 3000,    		

				pauseOnHover: true,

				enableResponsiveBreakpoints: true,

				responsiveBreakpoints: { 

					portrait: { 

						changePoint:480,

						visibleItems: 1

					}, 

					landscape: { 

						changePoint:667,

						visibleItems:2

					},

					tablet: { 

						changePoint:800,

						visibleItems: 3

					}

				}

			});

			

		});

	</script>

<!-- //flexisel -->

<!-- requried-jsfiles-for owl -->

 <script src="js/owl.carousel.js"></script>

							        <script>

									    $(document).ready(function() {

									      $("#owl-demo2").owlCarousel({

									        items : 1,

									        lazyLoad : false,

									        autoPlay : true,

									        navigation : false,

									        navigationText :  false,

									        pagination : true,

									      });

									    });

									  </script>

							 <!-- //requried-jsfiles-for owl -->





<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">

	jQuery(document).ready(function($) {

		$(".scroll").click(function(event){		

			event.preventDefault();

			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);

		});

	});

</script>

<!-- start-smoth-scrolling -->

<!-- for bootstrap working -->

	<script src="js/bootstrap.js"></script>

<!-- //for bootstrap working -->

<!-- here stars scrolling icon -->

	<script type="text/javascript">

		$(document).ready(function() {

			/*

				var defaults = {

				containerID: 'toTop', // fading element id

				containerHoverID: 'toTopHover', // fading element hover id

				scrollSpeed: 1200,

				easingType: 'linear' 

				};

			*/

								

			$().UItoTop({ easingType: 'easeOutQuart' });

								

			});

	</script>

<!-- //here ends scrolling icon -->

</body>

</html>