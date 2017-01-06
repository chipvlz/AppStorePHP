<?php
	session_start();
	include_once "dbhelper.php";

	session_start();


	if(!isset($_SESSION['user']))
	{
		header("Location: ../index.php");	//go back to previous directory
	}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Payment</title>
        <link href="css/payment_style.css" rel="stylesheet" type="text/css"  media="all" />
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="store.html">Store</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>
        <div class="clear"> </div>
        </div>
        </div>
        <!----End-top-nav---->
        <!----End-Header---->
    <!--start-image-slider---->


    <div class="clear"> </div>

    <section>
    <form id=payment action="middleman.php" method="post">
        <br><br><br>
       
<br><br><br>
        <fieldset>
            <legend>Card Details<br><br></legend>
            <ol>
                <li>
                <fieldset>
                    <legend>Card Type<br></legend>
                    <ol>
                        <li style="padding-bottom: 12px;">
                            <input id="visa" name="cardtype" type="radio" value="VISA" />
                            <label for=visa>VISA</label>
                        </li>
                        <li style="padding-bottom: 12px;">
                            <input id="amex" name="cardtype" type="radio" value="AmEx" />
                            <label for=amex>AmEx</label>
                        </li>
                        <li style="padding-bottom: 12px;">
                            <input id="mastercard" name="cardtype" type="radio" value="Mastercard"/>
                            <label for=mastercard>Mastercard</label>
                        </li>
                    </ol>
                </fieldset>
                <br><br>
                </li>
                <li style="padding-bottom: 12px;">
                    <label for=cardnumber>Card Number<br></label>
                    <input id="cardnumber" name="cardnumber" type="text" required /><br>
                </li>
                <li style="padding-bottom: 12px;">
                    <label for=secure>Security Code<br></label>
                    <input id="secure" name="secure" type="text" required /><br>
                </li>
                
            </ol>
        </fieldset>

            <br>
            <button type="submit">Buy It!</button>

    </form>
    </section>
<br><br><br>

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

