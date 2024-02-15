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
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="index.php" style="color:#FFFFFF"> <img src="Images/logo.png" class="img-responsive" style="width:210px;height:70px;padding-bottom:40px;padding-right:30px;padding-left: 30px">
       </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav pull-right">
       <li><a href="#"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
       <br><br/><br><br/>
    <div class="container">
  <div class="row">
    <div class="col-sm-3">
       <h3 style="color:#ff3333"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</h3><hr>
      <ul class="nav nav-tabs nav-stacked" style="font-size:18px;">
          <li style="color: #ff3333;"><a href="#/"> <span class="glyphicon glyphicon-envelope"></span> Inbox</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search Donor</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-user"></span> Active Donors</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-user"></span> Not Active Donors</a></li>
       <li><a href="#"><span class="glyphicon glyphicon-briefcase"></span> Need Blood</a></li>
       </ul>
    </div>
      <div ng-view></div>
  </div>
</div>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                         <h6 style="font-size:18px; text-align:center;">Created By Avinash Singh</h6>
                    </div><!--end of col-lg-4-->
                </div><!--end row-->
            </div><!--end of container-->
        </footer>
                  <script src="js/jquery.js"></script>
                  <script src="js/bootstrap.min.js"></script>
                  <script src="js/app.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular.min.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.7/angular-route.min.js"></script>
              </body>
          </html>
