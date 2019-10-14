<?php
	session_start();
	if(!isset($_SESSION['username'])){
		//header ('Location: Website/Pages/registration.php');
		header ('Location: Website/src/home.php');
		//header ('Location: Website/Pages/homepage.php');
	}
?>