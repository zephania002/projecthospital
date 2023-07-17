<?php
require_once "importance.php";

if (!User::loggedIn()) {
    Config::redir("index.php");
   // exit; // Added exit to stop further execution if user is not logged in
}

?>
<html>
<head>
    <title><?php echo Config::SYSTEM_NAME; ?> | Home</title>
    <?php require_once "inc/head.inc.php"; ?>
</head>
<body>
    <?php require_once "inc/header.inc.php"; ?>
    <div class='container-fluid'>
        <div class='row'>
            <div class='col-md-2'>
                <?php require_once "inc/sidebar.inc.php"; ?>
            </div>
            <div class='col-md-7'>
                <div class='content-area'>
                    <div class='content-header'>
                        Dashboard <small>Mannage your dashboard</small>
                    </div>
                    <div class='content-body'>
                        <div class='row'>
                            <?php Dashboard::draw("Patients", Dashboard::patients(), "patients.php"); ?>
                            <?php if ($userStatus == 1) {
                                Dashboard::draw("Doctors", Dashboard::doctors(), "doctors-record.php");
                            } ?>
                            <?php Dashboard::draw("Outbreaks", Dashboard::outbreaks(), "outbreaks.php"); ?>
                            <?php Dashboard::draw("Patient Book", Dashboard::getPatientRecords(), "patients.php"); ?>
                            <?php Dashboard::draw("Appointments", Dashboard::Appointments(), "appointments.php"); ?>
                            <?php Dashboard::draw("Replied Appts.", Dashboard::repliedAppointments(), "appointments.php"); ?>
                            <?php Dashboard::draw("HIV Record", Dashboard::hivPatients(), "hiv.php"); ?>
                            <?php Dashboard::draw("Change Password", "", "change-password.php"); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-3'>
                <img src='images/lady2.png' class='img-responsive' />
            </div>
        </div>
    </div>
</body>
</html>
