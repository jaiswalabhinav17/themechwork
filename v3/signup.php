<?php
session_start();
include('db.php');
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
$message = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $stmt = $mysqli->prepare("INSERT INTO user_details (name,email_id,contact_no,password,catagory,user_details,created_date)
  VALUES (?,?,?,?,?,?,?)");
  $stmt->bind_param("sssssss", $username, $email_id, $phone, $password, $category, $details, $createdDate);

  $category = $_POST["catagory"];
  $details = $_POST["user_details"];
  $username = $_POST["name"];
  $email_id = $_POST["email"];
  $phone = $_POST["phone"];
  $password = $_POST["password"];
  $re_password = $_POST["repeat_password"];
  if ($password !== $re_password) {
    $passwordError = "Both passwords do not match";
  } else {
    $password = md5($password);
    $createdDate = date("Y-m-d H:m:s");
    $myObj = new stdClass();
    if ($stmt->execute()) {
      $myObj->flag = "success";
      $myObj->code = 1000;
      header("location:login.php");
    } else {
      $myObj->flag = "failed";
      $myObj->code = 0000;
    }
    echo json_encode($myObj);
    return json_encode($myObj);
    $stmt->close();
    $mysqli->close();
  }
 
}
?>


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
  <link rel="stylesheet" href="css/bootstrap.min.css">
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

    <div id="navbar"></div>

    <div id="content-container">
      <div class="content">
        <nav class="navbar navbar-default admin-nav">
        </nav>
                <div class="container">

                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                      <div class="wow fadeIn" data-wow-delay="600ms">
                        <div class="card-container login-container">
                          
                          <h2 class="text-center">SIGN UP</h2>
                          
                          <br>
                          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"   method="post" autocomplete="off">
                            <div class="form-group">
                              <label for="collegeName" >Name</label>
                                <input type="text" class="form-control input-sm" name="name" id="reg_iv_Name" placeholder="Enter the  name.."
                                  required>
                            </div>
        
                            <div class="form-group">
                              <label for="contact" >Contact Number</label>
                                <input type="text" name="phone" maxlength="10"class="phonenum form-control input-sm" id="numberphone" placeholder="Enter the  contact number.."
                                  required>
                                  <span class="error-num" style="display:none">Please enter valid mobile number</span>
                            </div>
                            <div class="form-group">
                              <label for="emailID" >Email</label>
                                <input type="email" name="email" class="form-control input-sm" id=" emailID" placeholder="Enter the  email address.."
                                  required>
                            </div>
                            <div class="form-group">
                  <label for="sel1">Please select your category</label>
                  <select placeholder="select car type" class="form-control input-sm" name="catagory" id="catagory" required>
                    <option>Industry</option>
                    <option>Institution</option>
                    <option>Individual</option>
                  </select>
                  <div style="display:none;color:red" id="cartypr-error">Please select your car type</div>
                </div>
                            <div class="form-group">
                            <label for="sel1">Details</label>
                                <textarea class="form-control" name="user_details" ></textarea>
                            </div>
                            <div class="form-group">
                              <label for="password" >Password</label>
                                <input type="password" name="password" class=" form-control input-sm" id="password" placeholder="Enter the  Password.."
                                  required>
                              </div>
                            <div class="form-group">
                              <label for="repeat_password" >Repeat Password</label>
                                <input type="password" name="repeat_password" class="passwordValidation form-control input-sm" id="repeat_password" placeholder="Confirm Password.."
                                  required>
                                  <center> <span style="display:none;color:red" class="error-password">Both passwords are not same</span></center>
                              </div>
        
                            <br />
                            <div class="form-group">
                              <div class="col-sm-offset-2 col-sm-10">
                                <button id="registration" type="submit" name="registration" class="btn btn-default btn-width btn-success">Submit</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
          
                </div>

              </div>
            </div>
          </div>
          <div class="line"></div>
        </div>
      </div>
      <!-- Contact Section -->
      <div id="contact-section">
        <div class="container">
          <div class="section-title wow fadeInDown" data-wow-delay="200ms">
            <h2>Contact Us</h2>
            <div class="clearfix"></div>
          </div>
          <div class="col-xs-12 col-sm-4 wow fadeInLeft" data-wow-delay="400ms">
            <h3>Contact info</h3>
            <div class="space"></div>
            <p>
              <i class="fa fa-map-marker fa-fw pull-left"></i>
              The Mech Work<br>
            </p>
            <p>
              <i class="fa fa-address-card fa-fw pull-left"></i>
              <b>Street<br></b>
              Lane,<br>
              <span class="m-r-25">Address,<br></span>
              <span class="m-r-25">Country<br></span>
            </p>
            <div class="space"></div>
            <p><i class="fa fa-envelope-o fa-fw pull-left"></i>network@themechwork.com</p>

            <div class="space"></div>
          </div>

          <div class="col-xs-12 col-sm-8 wow fadeInRight" data-wow-delay="1000ms">
            <form id="gform" method="POST" action="https://script.google.com/macros/s/AKfycbzXSf7yjp8hyEEZiR8Lz1w3pNpnIZNLI-Kz_H4J1016_5OM6z7r/exec">
              <h3>Leave us a message</h3>
              <div class="row">
                <div class="col-xs-12 col-sm-4">
                  <div class="form-group">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name"
                      required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                  <div class="form-group">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email"
                      required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                  <div class="form-group">
                    <input type="tel" name="number" id="number"  class=" form-control" placeholder="Enter your contact number"
                      required="required">
                    <p class="help-block text-danger error-num"></p>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message"
                  required></textarea>
                <p class="help-block text-danger"></p>
              </div>
              <div id="success"></div>
              <button type="submit" class="btn custom-btn-outline m-t-20">Send Message</button>
            </form>
            <div id="thankyou_message" style="display: none;">
              <h3><em>Thanks</em> for contacting us!
                We will get back to you soon!</h3>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <div id="footer">
        <div class="container-fluid">
          <div class="row wow fadeInUp" data-wow-delay="200ms">
            <div class="col-xs-6 col-sm-4">
              <p><b>©</b> 2018 The Mech Work. All rights reserved.</p>
            </div>
            <div class="col-xs-6 col-sm-4 text-center">
              <ul class="social-section">
                <li class="facebook">
                  <a href="https://www.facebook.com" title="Facebook" target="_blank">
                    <i class="fa fa-facebook-square"></i>
                  </a>
                </li>
                <li class="linkedin">
                  <a href="https://www.linkedin.com" title="Linkedin" target="_blank">
                    <i class="fa fa-linkedin-square"></i>
                  </a>
                </li>
                <li class="Twitter">
                  <a href="https://www.twitter.com" title="Twitter" target="_blank">
                    <i class="fa fa-twitter-square"></i>
                  </a>
                </li>
                <li class="Youtube">
                  <a href="https://www.youtube.com" title="Youtube" target="_blank">
                    <i class="fa fa-youtube-square"></i>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 text-right credits">
              <a href="#">
                <!-- <span>Crafted with <i class="fa fa-heart"></i> by Abhinav</span> -->
              </a>
            </div>
          </div>
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
  <script src="js/register_iv.js"></script>
  <script src="js/signup.js"></script>
</body>

</html>