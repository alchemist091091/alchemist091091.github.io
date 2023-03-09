<?php
	include_once 'login.php';

	$LastName 		= ($_POST['LastName']);
	$FirstName 		= ( $_POST['FirstName']);
	$Email 			= ( $_POST['Email']);
	$Username		= ( $_POST['Username']);
	$Password 		= ( $_POST['Password']);

	$sql = "INSERT INTO registration (LastName, FirstName, Email, Username, Password) VALUES ('$LastName', '$FirstName', '$Email', '$Username', '$Password')";
	mysqli_query($conn, $sql);