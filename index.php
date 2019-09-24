<?php
	session_start();
	if(!isset($_SESSION['username'])){
		//header ('Location: Website/Pages/registration.php');
		header ('Location: Website/pages/home.php');
		//header ('Location: Website/Pages/homepage.php');
	}
?>