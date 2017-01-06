<?php 

session_start();
include_once "../dbhelper.php";

if(!isset($_SESSION['user']))
{
	header("Location: ../index.php");	//go back to previous directory
}



	$arr = $db->getSortdList(); 
	$data0 = $db->getAppInfo($arr[0]); 
	$data1 = $db->getAppInfo($arr[1]);
	$data2 = $db->getAppInfo($arr[2]);
	//echo $data2['image'] . " " . $data0['app_name'];
			

?>


<!DOCTYPE HTML>
<html>
	<head>
		<title>My homepage</title>
		<link href="css/homepage_style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="Mobilestore iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='http://fonts.googleapis.com/css?family=Londrina+Solid|Coda+Caption:800|Open+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/homepage_responsiveslides.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {

			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>

	<body>
		<div class="wrap">
		<!----start-Header---->
		<div class="header">
			<div class="search-bar">
				<form method="post" action="searchaction.php">
					<input type="text" name="bar"><input type="submit" value="Search"  />
				</form>
			</div>
			<div class="clear"> </div>
			<div class="header-top-nav">
				<ul>
					<li><a href="#"> <?php echo $_SESSION['user']; ?> </a></li>
					<img src="images/user-pic.png" alt="userImage">
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
			<div class="clear"> </div>
		</div>
		</div>

		<div class="clear"> </div>

		<div class="top-header">
			<div class="wrap">
		<!----start-logo---->
			<div class="logo">
				<a href="index.php">
					<img src="images/Logo.png" title="logo"/>
				</a>
			</div>
		<!----end-logo---->
		<!----start-top-nav---->

		<div class="top-nav">
			<ul>
				<?php
					if($_SESSION['admin']=="true")
					{
					?>
					<li><a href="edit_admin.php">Edit</a></li>	
					<?php
					}
				?>
				<li><a href="index.php">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Store</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
		<div class="clear"> </div>
		</div>
		</div>
		<!----End-top-nav---->
		<!----End-Header---->
	<!--start-image-slider---->
	<div class="content-grids">
		<div class="wrap">
			<div class="image-slider">
			<!-- Slideshow 1 -->
				<ul class="rslides" id="slider1">
			      <li><img src="images/app4.png" alt="app4"></li>
			      <li><img src="images/app10.png" alt="app10"></li>
			      <li><img src="images/app12.png" alt="app12"></li>
			    </ul>
			<!-- Slideshow 2 -->
			</div>
	<!--End-image-slider---->
		</div></div>
		<div class="content-sidebar">
				<h4>Operating Systems</h4>
				<ul>
					<li><a href="windows_os.php">Windows</a></li>
					<li><a href="android_os.php">Android</a></li>
					<li><a href="iOS_os.php">iOS</a></li>
					<li><a href="linux_os.php">LINUX</a></li>
				</ul>
			</div>
			
		    <div class="clear"> </div>
		    <div class="wrap">
		    <div class="content">
		    	<div class="top-3-grids">
		    		<div class="section group">
				<div class="grid_1_of_3 images_1_of_3">
					  <a href="intermediate.php?add=<?php echo $data0['app_name']; ?>"><img src="<?php echo $data0['image']; ?>"></a>
					  <h3><?php echo $data0['app_name']; ?></h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 second">
					  <a href="intermediate.php?add=<?php echo $data1['app_name']; ?>"><img src="<?php echo $data1['image']; ?>"></a>
					  <h3><?php echo $data1['app_name']; ?></h3>
				</div>
				<div class="grid_1_of_3 images_1_of_3 theree">
					   <a href="intermediate.php?add=<?php echo $data2['app_name']; ?>"><img src="<?php echo $data2['image']; ?>"></a>
					  <h3><?php echo $data2['app_name']; ?></h3>
				</div>
			</div>
		    	</div>
			<?php
				$src1 = "Bad Ball";
				$src2 = "Garden Mania";
				$src3 = "Quiz";
				$src4 = "Boom Beach";
				$src5 = "Clash Royale";
				$src6 = "Bomb Squad";
				$src7 = "Angry Horse";
				$src8 = "Cut The Rope";
				//$_SESSION['src1'] = $src1;
			?>
		    <div class="content-grids">
		    	<h4>Top apps of the day</h4>
		    	<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/app2.png">   	<!--changed---->
					 <a href="intermediate.php?add=<?php echo $src1; ?>" ><?php echo $src1; ?></a>
					 <h3>$1</h3>
					 <ul>

					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
				

				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/app5.png">
					  <a href="intermediate.php?add=<?php echo $src2; ?>"  ><?php echo $src2; ?></a>		<!--changed---->
					 <h3>$Free</h3>
					 <ul>

					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/app7.png">
					  <a href="intermediate.php?add=<?php echo $src3; ?>"><?php echo $src3; ?></a>
					 <h3>$10</h3>
					 <ul>

					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/Boom.png">
					  <a href="intermediate.php?add=<?php echo $src4; ?>"><?php echo $src4; ?></a>
					 <h3>$5</h3>
					 <ul>

					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
			</div>
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/royale.png">
					 <a href="intermediate.php?add=<?php echo $src5; ?>"><?php echo $src5; ?></a>
					 <h3>$Free</h3>
					 <ul>

					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/BSquad.png">
					  <a href="intermediate.php?add=<?php echo $src6; ?>"><?php echo $src6; ?></a>
					 <h3>$Free</h3>
					 <ul>

					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/img4.png">
					  <a href="intermediate.php?add=<?php echo $src7; ?>"><?php echo $src7; ?></a>
					 <h3>$2</h3>
					 <ul>
					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
				<div class="grid_1_of_4 images_1_of_4 products-info">
					 <img src="images/app9.png">
					  <a href="intermediate.php?add=<?php echo $src8; ?>"><?php echo $src8; ?></a>
					 <h3>$Free</h3>
					 <ul>

					 	<li><a  class="i" href="single.html"> </a></li>
					 	<li><a  class="Compar" href="single.html"> </a></li>
					 	<li><a  class="Wishlist" href="single.html"> </a></li>
					 </ul>
				</div>
			</div>

		    	</div>
		    	<div class="content-sidebar">
		    		<h4>Categories</h4>
						<ul>
							<li><a href="roadtocategory.php?add=Books">Books</a></li>
							<li><a href="roadtocategory.php?add=Business">Business</a></li>
							<li><a href="roadtocategory.php?add=Communication">Communication</a></li>
							<li><a href="roadtocategory.php?add=Entertainment">Entertainment</a></li>
							<li><a href="roadtocategory.php?add=Game">Games</a></li>
							<li><a href="#">Education</a></li>
							<li><a href="#">Health</a></li>
							<li><a href="#">Lifestyle</a></li>
							<li><a href="#">Media</a></li>
							<li><a href="#">Mobile Phones</a></li>
							<li><a href="#">Music</a></li>
							<li><a href="#">Photography</a></li>
							<li><a href="#">Shopping</a></li>
							<li><a href="#">Sports</a></li>
							<li><a href="#">Transformation</a></li>
							<li><a href="#">Weather</a></li>
						</ul>
		    	</div>
		    </div>
		    <div class="clear"> </div>
		    </div>

		<div class="footer">
			<div class="wrap">
			<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<h3>Credits</h3>
					<p>Feel free to contact us
						<a href="contact.html">here.</a>
					</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Latest News:</h3>
					<p>New Android App has been uploaded daily now.</p>
					<p>iOS updates are more advanced.</p>
					<p>LINUX apps getting more accepted by people.</p>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h3>Store Location</h3>
					<p>Yet to be announced. :p</p>
					<h3>Order-online</h3>
					<p>01685-604351</p>
					<p>123-345-678</p>
				</div>
				<div class="col_1_of_4 span_1_of_4 footer-lastgrid">
					<h3>News-Letter</h3>
					<input type="text"><input type="submit" value="go" />
					<h3>Follow Us:</h3>
					 <ul>
					 	<li><a href="https://twitter.com/?lang=en"><img src="images/twitter.png" title="twitter" />Twitter</a></li>
					 	<li><a href="https://www.facebook.com/"><img src="images/facebook.png" title="Facebook" />Facebook</a></li>
					 	<li><a href="https://www.rss.com/"><img src="images/rss.png" title="Rss" />Rss</a></li>
					 </ul>
				</div>
			</div>
		</div>

		<div class="clear"> </div>
		<div class="wrap">
		<div class="copy-right">
			<p>Mobilestore  &#169	 All Rights Reserved | Design By <a href="contact.html">Roll08&12</a></p>
		</div>
		</div>
		</div>
	</body>
</html>



















