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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php" style="color:#FFFFFF"><img src="Images/logo.png" class="img-responsive"style="width:210px;height:70px;padding-bottom:40px;padding-right:30px;padding-left: 30px">
                   </a>  
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <li><a href="aboutus.php"><span class="glyphicon glyphicon-globe"></span> About Us</a></li>
                        <li><a href="services.php"><span class="glyphicon glyphicon-briefcase"></span> Services</a></li>
                        <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> Contact Us</a></li>
                </div>
            </div>            
        </nav>
        <div class="container">
            <div class="row">
                <h3 style="color:#ff3333"><span class="glyphicon glyphicon-user"></span> New Donor Registration</h3><hr>
                <ol class="breadcrumb">
                    <li><a href="registration.php" style="color:#ff3333;font-size:16px"><span class="glyphicon glyphicon-user"></span> Donor Registration</a></li>
                    <li><a href="need.php" style="color:#ff3333;font-size:16px"><span class="glyphicon glyphicon-bed"></span> Need Blood</a></li>
                    <li><a href="search.php" style="color:#ff3333;font-size:16px"><span class="glyphicon glyphicon-search"></span> Search Blood</a></li>
                </ol>
                <div class="panel panel-default" style="padding-right:0px; box-shadow: 10px 8px 10px 20px gray">
                    <div class="panel-heading" style="background-color:#ff3333;color:#FFFFFF;font-size: 15px">
                        <h5 align="center"><span class="glyphicon glyphicon-user"></span> JOIN AS BLOOD DONOR</h5>
                    </div>
                    <div class="panel-body">
           <form class="form-horizontal">
            <div class="form-group" style="color:#ff3333">
            <label class="control-label col-sm-2">Name</label>
            <div class="col-sm-6">
              <input type="text" class="form-control" name="name">
            </div>
          </div>
             <div class="form-group"style="color:#ff3333">
                    <label class="control-label col-sm-2">Father Name</label>
                  <div class="col-sm-6">          
                    <input type="text" class="form-control" name="father">
                </div>
              </div>
               <div class="form-group" style="color:#ff3333">
                  <label class="control-label col-sm-2">Gender</label>
                  <div class="col-sm-6">
                  <select class="form-control">
                     <option>Please Select</option>
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
               </div>
               <div class="form-group" style="color:#ff3333">
            <label class="control-label col-sm-2">D.O.B</label>
            <div class="col-sm-6">          
              <input type="date" class="form-control" name="dob">
            </div>
          </div>
              <div class="form-group" style="color:#ff3333">
                  <label class="control-label col-sm-2">Blood Group</label>
                  <div class="col-sm-6">
                  <select class="form-control">
                     <option>Please Select</option>
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
                        <label class="control-label col-sm-2">Body Weight</label>
                      <div class="col-sm-6">
                        <input type:"text" class="form-control" placeholder="weights in kgs" name="bw">
                      </div>
                   </div>
                     <div class="form-group" style="color:#ff3333">
                        <label class="control-label col-sm-2">Email</label>
                      <div class="col-sm-6">
                        <input type:"email" class="form-control" placeholder="Email Address" name="email">
                      </div>
                   </div>
                    <div class="form-group" style="color:#ff3333">
                  <label class="control-label col-sm-2">Country</label>
                  <div class="col-sm-6">
                  <select class="form-control">
                     <option>Select Country</option>
                      <option>Canada</option>
                      <option>US</option>
                      <option>UK</option>
                      <option>India</option>
                      <option>Sri Lanka</option>
                    </select>
                  </div>
                   </div>
                    <div class="form-group" style="color:#ff3333">
                  <label class="control-label col-sm-2">State</label>
                  <div class="col-sm-6">
                  <select class="form-control">
                     <option>Select State</option>
                      <option>Canada</option>
                      <option>California</option>
                      <option>Texas</option>
                      <option>Hawii</option>
                      <option>Goa</option>
                      <option>Bihar</option>
                      <option>Delhi</option>
                      <option>kerala</option>
                    </select>
                  </div>
                   </div>
                    <div class="form-group" style="color:#ff3333">
                        <label class="control-label col-sm-2">Area</label>
                      <div class="col-sm-6">
                        <input type:"text" class="form-control" placeholder="Insert Area" name="area">
                      </div>
                   </div>
                    <div class="form-group" style="color:#ff3333">
                        <label class="control-label col-sm-2">Address</label>
                        <div class="col-sm-6">          
                            <textarea name="add" rows="4" cols="76" placeholder="Full Address"></textarea>
                        </div>
                    </div>
                      <div class="form-group" style="color:#ff3333">
                        <label class="control-label col-sm-2">Pincode</label>
                        <div class="col-sm-6">          
                            <input type="pin" class="form-control" placeholder="Insert Pincode" name="pin">
                        </div>
                    </div>
                     <div class="form-group" style="color:#ff3333">
                        <label class="control-label col-sm-2">Contact-1</label>
                        <div class="col-sm-6">          
                            <input type="tel" class="form-control" placeholder="Contact-1" name="contact-1">
                        </div>
                    </div>
                    <div class="form-group" style="color:#ff3333">
                        <label class="control-label col-sm-2">Contact-2</label>
                        <div class="col-sm-6">          
                            <input type="tel" class="form-control" placeholder="Contact-2" name="contact-2">
                        </div>
                    </div>
                     <div class="form-group" style="color:#ff3333">
                  <label class="control-label col-sm-2">New Donor</label>
                  <div class="col-sm-6">
                  <select class="form-control">
                     <option>Select Donor</option>
                      <option>Yes</option>
                      <option>No</option>
                    </select>
                  </div>
                   </div>
                  <div class="form-group">
                        <label class="control-label col-sm-2" style="color:#ff3333">Photo:</label>
                      <div class="col-sm-6">  
                        <input type="file" class="form-control" name="file">
                      </div>
                  </div>
               <div class="form-group" style="color:red">
                      <div class="col-sm-6">  
                          <input type="checkbox" name="d1" value="donation"> I have read the eligibility criteria  and confirm  that i am  eligible to donate blood.<br>
                          <input type="checkbox" name="d2" value="donation"> I agree to the Term  and Conditions   and consent  to have  my contact  and donor  information published  to the  potential blood  recipients.
                      </div>
                  </div>
                  <div class="form-group">
                <div class="col-sm-6" style="text-align:center">
                    <input type="submit" class="btn btn-lg btn-danger" value="Register Now">
                </div>
        </form>
                    </div>
                </div>
           </div>
         </div>
        </div>
                <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                        <h6 align="center" style="font-size:18px">Copyright &COPY; Blood Bank</h6>
                    </div><!--end of col-lg-4-->
                </div><!--end row-->
            </div><!--end of container-->
        </footer>
        <a href="#top" class="back-to-top"><span class="glyphicon glyphicon-menu-up"></span> Back to Top</a>
                  <script src="js/jquery.js"></script>
                  <script src="js/bootstrap.min.js"></script>
              </body>
          </html>
