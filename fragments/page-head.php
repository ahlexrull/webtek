<!-- /. NAV TOP  -->

<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PRC BIMS</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">Last Access: <?php echo date("F d, Y"); ?> &nbsp; <a href="login.php" class="btn btn-danger square-btn-adjust" onclick="return confirm('Are you sure you want to log out?');">Logout</a> </div>
<?php 
error_reporting(0);
            ini_set('display_errors', 0);
    session_start();
    if(!(isset($_SESSION['nameofuser']))){
                header("location: login.php");
    }
	$_SESSION['logout'] = 3;

    if($_SESSION['notadmin'] == 3){
                   echo "<script type='text/javascript'>window.top.location='login.php';</script>"; exit;
    }
?>
</nav>   
    
