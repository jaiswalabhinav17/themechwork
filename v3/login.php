<?php
session_start();
include('db.php');
error_reporting(E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_STRICT);
$message="";
if($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['user_name']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
    }
    $username= $_POST["user_name"];
    $password= $_POST["password"];
    $password=md5($password);
    $stmt = $mysqli->prepare( "SELECT name from user_details  WHERE email_id=? and password=?");
    $stmt->bind_param("ss", $username,$password);
    $stmt->execute();
    $results = $stmt->get_result();
    while($row = $results->fetch_assoc()) {
      $name = $row['name'];
    }
                                             
    if($results->num_rows !== 0) {
        $_SESSION["user_id"] = $name;
        setcookie("username", $name, time()+3600);
        header("location:index.html");
        echo 'Welcome '.$name;
	} else {
  $credentialErr = "Invalid Username or Password!";
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
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
    <!--  My Stylesheet -->
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <style>
.error {color: #FF0000;}
.signup {
    color: #262626;
    font-size: 14px;
    margin: 15px;
    text-align: center;
}
</style>
  <body class="login-bg">

    <!-- About us -->
    <div id="about-section">
      <div class="container">

        <div class="row">
          <div class="col-xs-12 col-sm-6 col-sm-offset-3">
            <div class="wow fadeIn" data-wow-delay="600ms">
              <div class="card-container login-container">
                
                <h2 class="text-center">LOGIN</h2>
                <br>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                  <div class="form-group">
                    <label for="username"><b>Email Id</b></label>
                    <input type="text" class="form-control" name="user_name" id="username" placeholder="Email Id" required>
                    <div class="clearfix"></div>
                    <div class="text-danger errorDivUsername" role="alert">
                      Please enter Email Id.
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password"><b>Password</b></label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                    <div class="text-danger errorDivPassword" role="alert">
                      Please enter the Password.
                    </div>
                    <div class="text-right text-primary forgot-password">
                      <small>Forgot Password?</small>
                      </br>
               <center> <span class="error"> <?php echo $credentialErr;?></span></center>

                    </div>
                  </div>
                  <br/>
                  <button type="submit" id="loginbtn" name="login" class="btn btn-default btn-lg btn-block custom-btn">LOGIN</button>
                </form>
                <p class="signup">Don't have an account? <a style="color:blue;text-decoration:underline; " href="signup.php">SignUp</a></p>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- 3rd Party JS's -->
    <script src="js/wow.min.js"></script>
    <!-- Our own Js Files -->
    <script src="js/login.js"></script>
  </body>
</html>
