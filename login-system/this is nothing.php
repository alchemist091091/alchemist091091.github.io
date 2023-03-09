<?php

session_start()

$db = mysqli_connect('localhost','root','','website')

if(isset($_POST['sign-up']))
{
	$LastName = mysqli_real_escape_string($db $_POST['LastName']);
	$FirstName = mysqli_real_escape_string($db $_POST['FirstName']);
	$Email = mysqli_real_escape_string($db $_POST['Email']);
 	$Username = mysqli_real_escape_string($db $_POST['Username']);
	$Password = mysqli_real_escape_string($db $_POST['Password']);

	if (empty(FirstName))
	{
		array_push($errors, "First name cannot be empty!");
	}
	if (empty(LastName))
	{
		array_push($errors, "First name cannot be empty!");
	}
	if (empty(Email))
	{
		array_push($errors, "First name cannot be empty!");
	}
	if (empty(Username))
	{
		array_push($errors, "First name cannot be empty!");
	}
	if (empty(Password))
	{
		array_push($errors, "First name cannot be empty!");
	}

	//---------------------------------------------------------

	$checker = "SELECT * FROM registration WHERE Username = '$Username' OR Email = '$Email' LIMIT 1";
	$result = mysqli_query($db, $checker);
	$user = mysqli_fetch_assoc($result);

	if ($user)
	{
		if ($user['Username'] === $Username)
		{
			array_push($errors, "Username already exist!")
		}
		if ($user['Email'] === $Email)
		{
			array_push($errors, "Email already exist!")
		}
	}

	//----------------------------------------------------------

	if (count($errors) === 0)
	{
		$Password = md5($Password)

		$query = "INSERT INTO registration(FirstName, LastName, Email, Username, Password) VALUES ('$FirstName', '$LastName', '$Email', '$Username', '$Password');
		mysqli_query($db, $query);
		$_SESSION['Username'] = $Username;
		$_SESSION['success'] = "You are now logged in!";
		header ('location: index.php');
	}
}

//-------------------------------------------------------------------

<?php

if(isset($_POST['sign-up']))
{
	$LastName 		= ($_POST['LastName']);
	$FirstName 		= ( $_POST['FirstName']);
	$Email 			= ( $_POST['Email']);
 	$Username		= ( $_POST['Username']);
	$Password 		= ( $_POST['Password']);

	echo $FirstName . "" . $LastName . "" . $Email . "" . $Username . "" . $Password . "";
}


?>