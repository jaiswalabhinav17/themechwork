<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- website Details for search engine's -->
    <title>The Mech Work</title>
    <meta name="description" content="JMECH-Details">
    <meta name="keywords" content="JMECH descriptions">
    <meta name="author" content="JMECH-email">
    <!-- Brand Image -->
    <!-- <link rel="icon" href="img/logo.png"> -->
    <!-- Bootstrap and core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nivo-lightbox.min.css">
    <link rel="stylesheet" href="css/nivo-theme.min.css">
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <!--  My Stylesheet -->
    <link rel="stylesheet" href="css/style2.css">
  </head>
  
  <body>
      <div class="wrapper">
          
          <nav id="menu" class="navbar navbar-default navbar-fixed-top" role="navigation">
              <div class="container">
                <div class="navbar-header page-scroll">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  
                  <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="img/logo.png">
                  </a>
                </div>
        
                <div id="navbar" class="navbar-collapse collapse">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html" class="page-scroll">Home</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services<span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                        <li><a href="industries.html" class="page-scroll">Industry</a></li>
                        <li><a href="institution.html" class="page-scroll">Institution</a></li>
                        <li><a href="individual.html" class="page-scroll">Individual</a></li>
                      </ul>
                    </li>
                    <li><a href="events.html" class="page-scroll">Events</a></li>
                    <li><a href="register_iv.html" class="page-scroll">Registration for IV</a></li>
                    <li><a href="#contact-section" class="page-scroll">Contact Us</a></li>
                    <li><a href="#" class="page-scroll">Login</a></li>
                  </ul>
                </div>
              </div>
            </nav>
        
          <div id="content-container">
            <div class="content">
              <nav class="navbar navbar-default admin-nav">
              </nav>
              <div class="container-fluid">
                
    
                <div  class="row ">
    
                  <div class="col-xs-12">
                    <div class="card">
                      <div class="card-title">
                        <h5>
                          Register for IV
                        </h5>
                        
                      </div>
    
                      <div>
                        <form method = "post" action="send_mail.php" class="form-horizontal">
                            <strong><?php
                            $message="";
                             echo $message;
                              ?></strong>
                          <div class="form-group">
                            <label for="collegeName" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control input-sm" name="name" id="collegeName" placeholder="Enter the  name.." required>
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <label for="image" class="col-sm-2 control-label">Profile</label>
                            <div class="col-sm-10">
                              <input type="file"  name="profile" accept=".pdf,.doc" required>
                            </div>
                          </div>
                         
                          <div class="form-group">
                            <label for="contact" class="col-sm-2 control-label">Contact Number</label>
                            <div class="col-sm-10">
                              <input type="text" name="phone" class="form-control input-sm" id="contact" placeholder="Enter the  contact number.." required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="emailID" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                              <input type="email" name="email" class="form-control input-sm" id="emailID" placeholder="Enter the  email address.." >
                            </div>
                          </div>
                        
                          <br/>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button id="btnSubmit" type="submit" class="btn btn-default btn-width btn-success">Submit</button>
                            </div>
                          </div>
                        </form>
                      </div>
    
                    </div>
                  </div>
                </div>
                
                <div class="line"></div>
              </div>
    
            </div>
    
            <div id="footer">
              <div class="container-fluid">
                <p>©2016 All Rights Reserved</p>
              </div>
            </div>
            
          </div>
        </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- 3rd Party JS's -->
    <script src="js/wow.min.js"></script>
    <!-- <script src="js/scrollspy.js"></script> -->
    <script src="js/typed.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="slick/slick.min.js"></script>
    <script data-cfasync="false" src="js/form-submission-handler.min.js"></script>
    <!-- Our own Js Files -->
    <script src="js/index.js"></script>
  </body>
</html>
