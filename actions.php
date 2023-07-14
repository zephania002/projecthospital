<?php

// Include necessary class files or define classes if not present
require_once "importance.php";

if(isset($_GET['action'])){
	$action = $_GET['action'];
}

if(isset($_POST['action'])){
	$action = $_POST['action'];
}

if(isset($action)) {
	if($action == "remove-doc"){
		if(isset($_GET['token'])){
			$doc = $_GET['token'];
			Doctor::delete($doc);
			Config::redir("doctors-record.php?message=Doctor has been removed!"); 
		} else {
			echo "Invalid token for removing doctor.";
		}
	}

	if($action == "delete-outbreak"){
		if(isset($_GET['token'])){
			$token = $_GET['token'];
			Outbreak::delete($token);
			Config::redir("outbreaks.php?message=Outbreak has been deleted!"); 
		} else {
			echo "Invalid token for deleting outbreak.";
		}
	}
}
