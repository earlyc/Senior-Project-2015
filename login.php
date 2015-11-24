<?php

session_start();
 
//Username and password
$user["chris"] = "password";
$user["khanh"] = "password";
$user["paul"] = "password";
$user["tablet"] = "password";
 
 //If user is not logged in
if (!isset($_SESSION['loggedIn']))
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
	//If username field is empty
	if (empty($_POST['username']))
        {
            echo '<p>Please enter a valid username.</p>';
        }
	//If password field is empty
	elseif (empty($_POST['password']))
        {
            echo '<p>Please enter a valid password.</p>';
        }
	//Username and password don't match
        elseif ($user[$_POST['username']] != $_POST['password'])
        {
            echo '<p>Incorrect username or password</p>';
        }
	else
        {
        	if($_POST['username'] == 'tablet') {
            	$_SESSION['loggedIn'] = true;
				header("Location:uservideopage.php");
				die();
die();
        	}
        	else {
            	$_SESSION['loggedIn'] = true;
        	}
        }
    }
    else
    {
        exit (
		'<html>
		<head>	
	<meta charset="utf-8">
	<title>AVATAR Control Interface</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
		</head>
		<body id=login-page>
		<img src="avatar.png" />
		<div id=login-box>
			<h1>Login</h1><p>You must be authenticated to view this page.</p>
			<form class ="test" method="POST" action=""><p>
				Username:
				<input type="text" name="username" /><br /><br />
				Password:
				<input type="password" name="password" /><br /><br />
				<input type="submit" value="Login" />
			</form>
		</div>
		</body>
		</html>'
		);
    }
}
?>
