<?php 

session_start();
include_once "../dbhelper.php";

if(!isset($_SESSION['user']))
{
  header("Location: ../index.php"); //go back to previous directory
}
?>


<!DOCTYPE HTML>
<html>
<head>
    <title>Editing by Admin</title>
    <link href="css/homepage_style.css" rel="stylesheet" type="text/css"  media="all" />
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    <br><br>
    <fieldset class="text-center">
        <h2 style="font-family: 'Open Sans', sans-serif;color: #94CB32; font-size:1.5em;">
            The following are the features of our honorable admins. Please choose according to your need.
        </h2>
        <br><br>
        <div style="padding: 10px 20px;">
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="font-size:1.2em;color: #399649;">INSERT</button>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1" style="font-size:1.2em;color: #399649;">UPDATE</button>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2" style="font-size:1.2em;color: #399649;">DELETE</button>
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3" style="font-size:1.2em;color: #399649;">MAINTAINANCE</button>
        </div>

        <!-- Modal1 -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="font-family: 'Open Sans', sans-serif;color: #94CB32;">INSERT</h4>
            </div>
            <div class="modal-body">
                <form action="dataentryAction.php" method="post">
                    App name: <br>
                    <input type="text" name="name">
                    <br> Company:
                    <br> <input type="text" name="company">
                    <br> Description:
                    <br> <input type="text" name="description">
                    <br> Type:
                    <br> <input type="text" name="type">
                    <br> App OS:
                    <br> <input type="text" name="os">
                    <br> Rating:
                    <br> <input type="text" name="rating">
                    <br> Price:
                    <br> <input type="text" name="price">
                    <br> Image:
                    <br> <input type="text" name="image">
                    <br> Download:
                    <br> <input type="text" name="download">
                    <br><br>
                    <input type="submit">
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal2 -->
      <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="font-family: 'Open Sans', sans-serif;color: #94CB32;">UPDATE</h4>
            </div>
            <div class="modal-body">
                <form action="updateaction.php" method="post">
                    App name: <br>
                    <input type="text" name="name">
                    <br> Attribute:
                    <br> <input type="text" name="attribute">
                    <br> Data:
                    <br> <input type="text" name="data">
                    <br><br>
                    <input type="submit">
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal3 -->
      <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="font-family: 'Open Sans', sans-serif;color: #94CB32;">DELETE</h4>
            </div>
            <div class="modal-body">
            <form action="deleteaction.php" method="post">
                <fieldset>
                    <label for="" style="font-family: 'Open Sans', sans-serif;color: #399649;">Select deletion Category</label>
                    <br><br>
                      <input type="radio" name="person" value="app_id" checked style="color:#94CB32;">App_id<br><br>
                      <input type="radio" name="person" value="app_name" style="color:#94CB32;">App Name<br><br>
                      <input type="radio" name="person" value="app_company" style="color:#94CB32;">Dev Comp<br><br>
                      <input type="radio" name="person" value="app_type" style="color:#94CB32;">App type<br><br>
                    <label for="" style="font-family: 'Open Sans', sans-serif;color: #399649;">Please submit the data:</label>
                    <br><br>
                       <input type="text" name="data"><br><br>
                       <input type="submit" value="Submit" style="color:#399649;">
                </fieldset>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal4 -->
      <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="font-family: 'Open Sans', sans-serif;color: #94CB32;">MAINTAINANCE</h4>
            </div>
            <div class="modal-body">
              <p style="font-family: 'Open Sans', sans-serif;color: #94CB32;">Sorry, this part is still under construction.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    </fieldset>
    <br><br>

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