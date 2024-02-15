<!DOCTYPE html>
<html>

<head>
  <title>Online Blood Bank System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" id="top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php" style="color:#FFFFFF"> <img src="Images/logo2.jpeg" class="img-responsive" style="width:220px;height:70px;padding-bottom:40px;padding-right:30px;padding-left: 30px">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav pull-right">
          <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li><a href="aboutus.php"><span class="glyphicon glyphicon-globe"></span> About Us</a></li>
          <li><a href="registration.php"><span class="glyphicon glyphicon-briefcase"></span> Services</a></li>
          <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container">
    <div class="row">
      <div class="col-sm-4" style="margin-top:58px">
        <h3 style="color:#ff3333">Contact Us</h3>
        <hr>
        <p style="font-size:18px;font-style:italic"><span class="glyphicon glyphicon-map-marker"></span> S-416 School Block Shakarpur Delhi-110092</p>
        <p style="font-size:18px;font-style:italic;"><span class="glyphicon glyphicon-earphone"></span> (+91)123456789</p>
        <div id="map" style="width:100%;height:300px;">
          <script>
            function myMap() {
              var myCenter = new google.maps.LatLng(28.627465, 77.277544);
              var mapCanvas = document.getElementById("map");
              var mapOptions = {
                center: myCenter,
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              };
              var map = new google.maps.Map(mapCanvas, mapOptions);
              var marker = new google.maps.Marker({
                position: myCenter
              });
              marker.setMap(map);
            }
          </script>
          <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOFxl8cKQrG2a_qjjHiD78rPGIxhbT9l8&callback=myMap"></script>

        </div>
      </div>
      <div class="col-sm-8">
        <div class="panel" style="padding-left:85px;padding-right:190px;margin-top:45px">
          <div class="panel-heading">
            <h3 style="color:#ff3333;">Send Message</h3>
            <hr>
          </div>
            <form class="form-horizontal" method="post" action="contact.php" enctype="multipart/form-data" onsubmit="alert('Thank you for contacting Us, we will shortly reach you');">
              <div class="form-group">
                <label class="control-label col-sm-2">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="name" placeholder="Enter Full Name" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" placeholder="email@example.com" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Contact</label>
                <div class="col-sm-10">
                  <input type="tel" class="form-control" name="contact" placeholder="Enter Contact No." required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-2">Message</label>
                <div class="col-sm-10">
                  <textarea name="message" rows="6" cols="49" class="form-control" placeholder="Write Your Message Here" required></textarea>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6" style="text-align:right;margin-left:25px; padding-left:2px">
                  <button name="Send Message" class="btn btn-lg btn-danger">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:205px;background:transparent;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_button_linkedin"></a>
  </div>
  <footer>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <h6 style="font-size:18px;font-style:italic; text-align:center;">Created By Avinash Singh</h6>
        </div><!--end of col-lg-4-->
      </div><!--end row-->
    </div><!--end of container-->
  </footer>
  <div class="top">
    <a href=""><span class="glyphicon glyphicon-menu-up"></span></a>
  </div>
  <script async src="https://static.addtoany.com/menu/page.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/contact.js"></script>
</body>

</html>