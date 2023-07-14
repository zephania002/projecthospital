<?php

// Include necessary class files or define classes if not present
require_once "importance.php";

if(!class_exists('User') || !method_exists('User', 'loggedIn')){
	Config::redir("login.php");
	exit;
}

?>

<html>
<head>
	<title>Add Doctors - <?php echo Config::SYSTEM_NAME; ?></title>
	<?php require_once "inc/head.inc.php";  ?> 
</head>
<body>
	<?php require_once "inc/header.inc.php"; ?> 
	<div class='container-fluid'>
		<div class='row'>
			<div class='col-md-2'><?php require_once "inc/sidebar.inc.php"; ?></div>
			<div class='col-md-7'>
				<div class='content-area'> 
				<div class='content-header'> 
					<?php if(isset($_GET['token'])){ echo "Edit Doctor <small>Edit this doctor</small>"; } else { ?> Add Doctors <small>Add doctors into the system</small> <?php } ?> 
				</div>
				<?php require_once "inc/alerts.inc.php";  ?> 
				<div class='content-body'> 
						
					<?php Messages::info("The default password is <strong>hospital</strong>"); ?> 
					<div class='form-holder'>
						<?php 
							$firstName = ""; 
							$secondName = "";
							$email = ""; 
							$phone = ""; 
							$role = ""; 
							$gender = ""; 
							$token = "";
							if(isset($_GET['token'])){
								$token = $_GET['token'];
								$firstName = User::get($token, "firstName"); 
								$secondName = User::get($token, "secondName");
								$email = User::get($token, "email"); 
								$phone = User::get($token, "phone"); 
								$role = User::get($token, "role"); 
								$gender = User::get($token, "gender"); 
							}
							if(isset($_POST['fn'])){
								$firstName = $_POST['fn']; 
								$secondName = $_POST['sn']; 
								 $email = isset($_POST['em']) ? $_POST['em'] : ""; // Check if 'em' key exists
    $phone = isset($_POST['phone']) ? $_POST['phone'] : ""; // Check if 'phone' key exists
								$role = $_POST['role']; 
								if($token == ""){
									$gender = $_POST['gender']; 
								} else {
									$gender = "$gender"; 
								}
								
								if($firstName == "" || $secondName == "" || $email == "" || $phone == "" || $role == "" || $gender == ""){
									Messages::error("You must fill in all the fields"); 
								} else if (strlen($phone) != 10) {
									Messages::error("Phone must be 10 characters");
								} else if (strpos($email, "@") === false || strpos($email, ".") === false) {
									Messages::error("You entered an invalid email. Email must be in the format example@example.com");
								} else {
									Doctor::add($token, $firstName, $secondName, $email, $phone, $gender, $role);
								}
							}
							
							$form = new Form(3, "post");
							$form->init(); 
							$form->textBox("First Name", "fn", "text", $firstName, "");
							$form->textBox("Second Name", "sn", "text", $secondName,"");
							$form->textBox("Email", "em", "text", $email,"");
							$form->textBox("Phone Number", "phone", "text", $phone,"");
							$form->textBox("Role e.g <i>Surgeon</i>", "role", "text", $role, "");
							if(isset($_GET['token'])){
								$form->textBox("Gender", "", "text", $gender, array("disabled"));
							} else {
								$form->select("Gender", "gender", "", array("Male", "Female", "Other"));
							}
							if(isset($_GET['token'])){
								$form->close("Edit Doctor"); 
							} else {
								$form->close("Add Doctor"); 
							}
							?>
							
							</div><!-- end of the content area -->
							</div>
							
							</div><!-- col-md-7 -->
							
							<div class='col-md-3'>
								<img src='images/lady.png' class='img-responsive' />
							</div><!-- this should be a sidebar -->
							
							</div>
							</div>
							</body>
							</html>
							