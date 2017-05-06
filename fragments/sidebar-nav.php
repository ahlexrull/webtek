<!-- /. NAV SIDE  -->

<?php
    require_once 'connection.php'; 
    
    $query = $pdo->prepare("SELECT * FROM user WHERE username='".$_SESSION['username']."';");
    $query->execute();
    $print = $query->fetch();
?>

<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
        <li class="text-center">
            <?php echo '<img  class="user-image img-responsive" src="data:image/png;base64,' . base64_encode($print["user_image"]) . '">'; ?>
        </li>
        <li>
            <a href="pending.php"><i class="fa fa-book fa-3x"></i> Pending</a>
        </li>
        <li>
            <a  href="finished.php"><i class="fa fa-medkit fa-3x"></i> Finished</a>
        </li>
        <li>
            <a  href="feedback.php"><i class="glyphicon glyphicon-tint fa-3x"></i>Feedback</a>
        </li>
        <li>
            <a  href="editProfile.php"><i class="glyphicon glyphicon-tint fa-3x"></i>Edit Profile</a>
        </li>           
        </ul>
    </div>
</nav> 