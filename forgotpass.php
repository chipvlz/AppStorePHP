<?php 
	session_start();
    //$_SESSION['info'] = "";
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Forgot Password</title>
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
                <li><a href="index.php" id="loginform">Login</a><li>
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


    <form action = "forgetpassaction.php" method="post">
        <br><br><br><br>
        
        <fieldset class="text-center" style="padding: 10px 20px; width:50%;margin:auto;">
        <?php 
        if($_SESSION['info'] =="wrong") 
        {
         ?>

         <h4>Your Key did not matched. Try again.</h4>
        <?php
        }
        $_SESSION['info'] = "";
        ?>
            <legend style="font-size:1.2em; color:green;">Forgot Password</legend>
            <h2 style="font-family: 'Open Sans', sans-serif;color: #94CB32;">Forgot your password???</h2>
            <h3 style="font-family: 'Open Sans', sans-serif;color: #399649;">Please give your email address:</h2>
                <br>
            	<input type="email" name="mail">
            	<br><br>
            	<input type="submit" value="Submit" style="color:#399649;">
        </fieldset>
        <br><br><br><br>
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
