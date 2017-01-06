<?php 

session_start();
include_once "../dbhelper.php";

if(!isset($_SESSION['user']))
{
	header("Location: ../index.php");	//go back to previous directory
}



	$arr = $db->getCategorizedData("app_os","iOS");
	$data0 = $db->getAppInfo($arr[0]); 
	$data1 = $db->getAppInfo($arr[1]);
	$data2 = $db->getAppInfo($arr[2]);
	$data3 = $db->getAppInfo($arr[3]);
	//echo $data2['image'] . " " . $data2['app_name'];
			

?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>iOS</title>
        <link href="css/os_style.css" rel="stylesheet" type="text/css"  media="all" />
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
                <form>
                    <input type="text"><input type="submit" value="Search" />
                </form>
            </div>
            <div class="clear"> </div>
            <div class="header-top-nav">
                <ul>
                    <li><a href="#"><?php echo $_SESSION['user']; ?></a></li>
                    <img src="images/user-pic.png" alt="userImage">
                    <li><a href="logout.php">Log Out</a></li>
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


            <div class="clear"> </div>


            <div class="content-grids">
                <img style="display: block; margin-top:10px; margin-left:auto; margin-right:auto;" src="images/iOS.png">
                <h4 class="text-center" style="padding:10px 30px 30px 30px;">iOS Apps</h4>
                <div class="section group">

                <div class="grid_1_of_4 images_1_of_4 products-info">
                     <img src="<?php echo $data0['image'] ?>">
                      <a href="intermediate.php?add=<?php echo $data0['app_name']; ?>"><?php echo $data0['app_name'] ?></a>
                     <h2>$<?php echo $data0['app_price'] ?></h2>
                     <ul>

                        <li><a  class="i" href="single.html"> </a></li>
                        <li><a  class="Compar" href="single.html"> </a></li>
                        <li><a  class="Wishlist" href="single.html"> </a></li>
                     </ul>
                </div>

                <div class="grid_1_of_4 images_1_of_4 products-info">
                     <img src="<?php echo $data1['image'] ?>">
                      <a href="intermediate.php?add=<?php echo $data1['app_name']; ?>"><?php echo $data1['app_name'] ?></a>
                     <h2>$<?php echo $data1['app_price'] ?></h2>
                     <ul>

                        <li><a  class="i" href="single.html"> </a></li>
                        <li><a  class="Compar" href="single.html"> </a></li>
                        <li><a  class="Wishlist" href="single.html"> </a></li>
                     </ul>
                </div>
            </div>
          </div>
          <div class="content-sidebar">
            <h4>Operating Systems</h4>
                <ul>
                    <li><a href="windows_os.php">Windows</a></li>
					<li><a href="android_os.php">Android</a></li>
					<li><a href="iOS_os.php">iOS</a></li>
					<li><a href="linux_os.php">LINUX</a></li>
                </ul>
          </div>
            <div class="content-grids">

                <div class="grid_1_of_4 images_1_of_4 products-info">
                     <img src="<?php echo $data2['image'] ?>">
                      <a href="intermediate.php?add=<?php echo $data2['app_name']; ?>"><?php echo $data2['app_name'] ?></a>
                     <h2>$<?php echo $data2['app_price'] ?></h2>
                     <ul>

                        <li><a  class="i" href="single.html"> </a></li>
                        <li><a  class="Compar" href="single.html"> </a></li>
                        <li><a  class="Wishlist" href="single.html"> </a></li>
                     </ul>
                </div>
                <div class="grid_1_of_4 images_1_of_4 products-info">
                     <img src="<?php echo $data3['image'] ?>">
                      <a href="intermediate.php?add=<?php echo $data3['app_name']; ?>"><?php echo $data3['app_name'] ?></a>
                     <h2>$<?php echo $data3['app_price'] ?></h2>
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
            <p>Mobilestore  &#169    All Rights Reserved | Design By <a href="contact.html">Roll08&12</a></p>
        </div>
        </div>
        </div>
    </body>
</html>

