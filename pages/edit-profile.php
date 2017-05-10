<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pet Services</title><meta charset="UTF-8" />
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
     <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <script src="../assets/js/script.js" defer="defer"></script>
</head>
<body>
    
       <?php
        //Start your session
        session_start();
        if (isset($_SESSION['username']) && $_SESSION['username'] == true) {
        } else {
            header("location: login.php");
        }

        function echoActiveClassIfRequestMatches($requestUri){
            $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");

            if ($current_file_name == $requestUri)
                echo 'class="active-menu"';
        }

    ?>
    
    <div id="wrapper">
        <?php include 'fragments/page-head.php'; ?>
        <!-- /. NAV TOP  -->
        <?php include 'fragments/sidebar-nav.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Edit Profile</h2>   
                    </div>    
                </div>
                <div class="jumbotron">

                <div class="panel-heading">
                        
                        <!--Start of table -->
                  <form class="form-horizontal">
                    <div class="form-group">
                      <label for="textArea" class="col-lg-2 control-label">About Yourself</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" rows="3" id="textArea"></textarea>
                        <!--
                        <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                        -->
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Services Offerred</label>
                      <div class="col-lg-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1">
                            Grooming
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
                            Sitting
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3">
                            Vaccine
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3">
                            Medical Services
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label">Specialization</label>
                      <div class="col-lg-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1">
                            Dog
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
                            Cat
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
                            Snake
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3">
                            Horse
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3">
                            Fish
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" name="optionsRadios" id="optionsRadios3" value="option3">
                            Hamster
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
</body>
</html>    
