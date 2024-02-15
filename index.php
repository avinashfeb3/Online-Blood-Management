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
</div>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
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
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="Images/slide0.jpg" alt="slide0">
        </div>

        <div class="item">
            <img src="Images/slide1.jpg" alt="slide1">
        </div>

        <div class="item">
            <img src="Images/slide3.jpg" alt="slide3">
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <h3 style="color:#ff3333;font-size:35px;">Online Blood Bank System</h3><hr>
    <div class="row">
        <div class="col-sm-4">
            <div class="panel" style="border-top-color:#ff3333;border-bottom-color:#ff3333;border-left-color:#ff3333;border-right-color:#ff3333">
                <div class="panel-heading" style="background-color:#ff3333;color:#FFFFFF;font-size:15px"><span class="glyphicon glyphicon-user"></span> Donor Registration</div>
                <div class="panel-body">
                    <p>Blood donation pictogram Blood donation center at the University Hospital of Basel, Switzerland. From left to right: Two cell separators for apheresis, secluded office for pre-donation blood pressure measurement and blood count, and on the right, chairs for whole blood donations.</p>
                    <a href="registration.php"><input type="button" name="view More" value="View More" class="btn btn-danger" style="background-color:#ff3333;color:#FFFFFF"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel" style="border-top-color:#ff3333;border-bottom-color:#ff3333;border-left-color:#ff3333;border-right-color:#ff3333">
                <div class="panel-heading" style="background-color:#ff3333;color:#FFFFFF;font-size:15px"><span class="glyphicon glyphicon-briefcase"></span> Need Blood</div>
                <div class="panel-body">
                    <p>Many people who have surgery need blood transfusions because they lose blood during their operations. ... You may need a blood transfusion if you have: A severe infection or liver disease that stops your body from properly making blood or some parts of blood.</p>
                    <a href="need.php"><input type="button" name="view More" value="View More" class="btn btn-danger" style="background-color:#ff3333;color:#FFFFFF"></a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="panel" style="border-top-color:#ff3333;border-bottom-color:#ff3333;border-left-color:#ff3333;border-right-color:#ff3333">
                <div class="panel-heading" style="background-color:#ff3333;color:#FFFFFF;font-size:15px"><span class="glyphicon glyphicon-search"></span> Search Donor</div>
                <div class="panel-body">
                    <p>We know that people come in to donate blood — not only to save lives but because they feel good when they do it so that text message is really a reminder of that good feeling of what it was like to save lives.I have often wondered where and how my blood is used once I've left the donation centre now I know.</p>
                    <a href="search.php"><input type="button" name="view More" value="View More" class="btn btn-danger" style="background-color:#ff3333;color:#FFFFFF"></a>
                </div>
            </div>
        </div>
    </div>
    <h3 style="color:#ff3333;font-size:25px;">Blood Donor Camps</h3><hr>
    <div class="col-sm-3">
        <img src="Images/d1.jpg" class="img-thumbnail" alt="donation">
    </div>
    <div class="col-sm-3">
        <img src="Images/d5.jpg" class="img-thumbnail" alt="donation">
    </div>
    <div class="col-sm-3">
        <img src="Images/d7.jpg" class="img-thumbnail" alt="donation">
    </div>
    <div class="col-sm-3">
        <img src="Images/d9.jpg" class="img-thumbnail" alt="donation">
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
</body>
</html>