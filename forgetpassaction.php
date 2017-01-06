
<!DOCTYPE HTML>
	<html>
	<head>
		<title>Key Password</title>
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
                <form>
                    <input type="text"><input type="submit" value="Search" />
                </form>
            </div>
            <div class="clear"> </div>
        </div>
        </div>

        <div class="clear"> </div>

        <div class="top-header">
            <div class="wrap">
        <!----start-logo---->
            <div class="logo">
                <a href="newHome/index.php">
                    <img src="images/Logo.png" title="logo"/>
                </a>
            </div>
        <!----end-logo---->
        <!----start-top-nav---->

        <div class="top-nav">
            <ul>
                <li><a href="login.html" id="loginform">Login</a><li>
                <li style="padding: 10px 1px;">|</li>
                <li><a href="register.php">Register</a></li>
                <li><a href="newHome/index.php">Home</a></li>
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

		<form action="nextpass.php" method = "post">
			<br><br><br>
			<fieldset class="text-center" style="padding: 10px 20px; width:50%;margin:auto;">
				<legend style="font-size:1.2em; color:green;">Key Password</legend>
				<h3 style="font-family: 'Open Sans', sans-serif;color: #94CB32;">Please enter the key that has been sent to your email:</h3>
			<br>
			<input type="number" name="pial">
			<br><br>
			<input type="submit" value="Submit" style="color:#399649;">
			</fieldset>
			<br><br><br>
		</form>

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

<?php
	session_start();
include_once "dbhelper.php";
$email = $_POST['mail'];
//echo $email;

//echo rand(0,100);
$key = rand(1000,10000);
while(true)
{
	$key = rand(1000,10000);
	$db->forgetPass($email,$key);
	if(!$db->forgetPass($email,$key))
	{
		$_SESSION['key'] = $key;
		$_SESSION['email'] = $email;
		//echo "<br>" . $_SESSION['key'] . "<br>";
		//echo "inserted";
		break;
	}
}

//header("Location: nextpass.php");


$msg = "You Should Try to remember your password. -_- " . "BTW your password recovery key is: " . $key;
$msg = wordwrap($msg,70);
mail($email,"Password Recovery",$msg);
echo "mail sent";

?>


