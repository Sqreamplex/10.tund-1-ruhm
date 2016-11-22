<?php
	require("/home/mihhkuzm/config.php");
	/* ALUSTAN SESSIOONI */
	session_start();
		
	/* ÜHENDUS */
	$database = "if16_mikuz_1";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);
	
?>