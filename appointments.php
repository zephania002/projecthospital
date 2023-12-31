<?php
require_once "importance.php";

if (!User::loggedIn()) {
    Config::redir("login.php");
    exit;
}
?>

<html>
<head>
    <title>Appointments <?php echo Config::SYSTEM_NAME; ?></title>
    <?php require_once "inc/head.inc.php";  ?> 
</head>
<body>
    <?php require_once "inc/header.inc.php"; ?> 
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div> <!-- this should be a sidebar --> 
            <div class='col-md-7'>
                <div class='content-area'> 
                    <div class='content-header'> 
                        Dashboard <small>View your dashboard</small>
                    </div>
                    <?php require_once "inc/alerts.inc.php";  ?> 
                    <div class='content-body'> 
                        <?php Appointment::loadDoctorAppointments(); ?>
                        
                        <hr /> 
                        <h3>Replied Appointments</h3>
                        <?php Appointment::loadDoctorRepliedAppointments(); ?>
                    </div><!-- end of the content area --> 
                </div> 
                
            </div><!-- col-md-7 --> 

            <div class='col-md-3'>
                <img src='images/doc-background-one.png' class='img-responsive' /> 
            </div> <!-- this should be a sidebar -->
                
        </div> 
    </div> 
</body>
</html>
