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
    <!-- Data Tables -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="css/buttons.dataTables.min.css">
    <!--  My Stylesheet -->
    <link rel="stylesheet" href="css/style2.css">
  </head>
  
  <body>
    <div class="wrapper">
     

    <!-- College update -->
    <div class="modal fade" id="updateCollege" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Update Details</h4>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-xs-12">
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="collegeName" class="col-sm-2 control-label">College Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="collegeName" value="Panimalar">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="description" class="col-sm-2 control-label">Description</label>
                      <div class="col-sm-10">
                        <textarea type="text" class="form-control input-sm" id="description" rows="3" value="Description will be added here about the colleges."></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="image" class="col-sm-2 control-label">Image</label>
                      <div class="col-sm-10">
                        <input type="file" name="pic" accept="image/*">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="websiteUrl" class="col-sm-2 control-label">Website URL</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="websiteUrl" value="http://www.pit.ac.in/">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="contact" class="col-sm-2 control-label">Contact Number</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="contact" value="044-26491113">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="emailID" class="col-sm-2 control-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control input-sm" id="emailID" value="info@pit.ac.in">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="address" class="col-sm-2 control-label">Address</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="address" value="Panimalar Institute of Technology, No.391, Bangalore Trunk Road, Varadharajapuram,Poonamallee, Chennai - 600 123.">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="establishmentYear" class="col-sm-2 control-label">Year of Estalishment</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control input-sm" id="establishmentYear" value="1998">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button id="canceled-btn" type="button" class="btn btn-sm btn-default btn-width btn-success" data-dismiss="modal">Update</button>
            <button id="" type="button" class="btn btn-sm btn-default btn-width btn-danger" data-dismiss="modal">Discard</button>
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
    <!-- Datatable scripts -->
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
    <!-- 3rd Party JS's -->
    <script src="js/wow.min.js"></script>
    <!-- Our own Js Files -->
    <script src="js/main.js"></script>
  </body>
</html>
