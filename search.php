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
                <h3 style="color:#ff3333"><span class="glyphicon glyphicon-heart"></span> Need Blood To Save Life</h3><hr>
                <ol class="breadcrumb">
                    <li><a href="registration.php" style="color:#ff3333;font-size:16px;padding-right:0px"><span class="glyphicon glyphicon-user"></span> Donor Registration</a></li>
                    <li><a href="need.php" style="color:#ff3333;font-size:16px"><span class="glyphicon glyphicon-bed"></span> Need Blood</a></li>
                    <li><a href="search.php" style="color:#ff3333;font-size:16px"><span class="glyphicon glyphicon-search"></span> Search Blood</a></li>
                </ol>
                <h4 style="text-align: right">Please fill the correct details  and search  your nearest donor. For more  queries contact our admin.</h4>
                    <div class="panel col-sm-6" style="margin-right:510px;padding-right:0px;box-shadow:10px 10px grey">
                    <div class="panel-heading" style="background-color:#ff3333;color:#FFFFFF;font-size:15px">
                        <h4 align="center"><span class="glyphicon glyphicon-search"></span>Search Doctor Avalibility</h4>
                        </div>
                  <div class="panel-body">
                 <form class="form-horizontal" method="post">
               <div class="form-group" style="color:#ff3333">
                  <label class="control-label col-sm-2">Search Type</label>
                  <div class="col-sm-10">
                  <select class="form-control">
                     <option>Select search type</option>
                     <option>Pincode</option>
                      <option>Area</option>
                      <option>City</option>
                      <option>State</option>
                    </select>
                 </div>
               </div>
              <div class="form-group" style="color:#ff3333">
                  <label class="control-label col-sm-2">Required Blood Group</label>
                  <div class="col-sm-10">
                  <select class="form-control">
                     <option>Select Blood</option>
                      <option>O+</option>
                      <option>O-</option>
                      <option>A+</option>
                      <option>A-</option>
                      <option>B+</option>
                      <option>B-</option>
                      <option>AB+</option>
                      <option>AB-</option>
                    </select>
                  </div>
                   </div>
                    <div class="form-group" style="color:#ff3333">
                        <label class="control-label col-sm-2">Search Text</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control"placeholder="Type Here" name="search">
                      </div>
                   </div>
                  <div class="form-group">
                <div class="col-sm-6" style="text-align:center">
                   <input type="submit" class="btn btn-lg btn-danger" value="Search Donor">
                </div>
                  </div>
                      </form>
                    </div>
                    </div>
                </div>
           </div>
              <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:150px;background:transparent;">
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
                        <h6 style="font-size:18px;font-style:italic;text-align:center;">Created By Avinash Singh</h6>
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
