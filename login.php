<?php
session_start();
 
//Username and password
$user["chris"] = "password";
$user["khanh"] = "password";
$user["paul"] = "password";
 
 //If user is not logged in
if (!isset($_SESSION['loggedIn']))
{
    echo '<h1>Login</h1>';
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
            header("Refresh: 1");
            $_SESSION['loggedIn'] = true;
            echo '<p>You are now logged in!</p>';
        }
    }
    else
    {
        exit('<p>You must be authenticated to view this page.</p>
        <form method="POST" action=""><p>
        Username:<br />
        <input type="text" name="username" /><br /><br />
        Password:<br />
        <input type="password" name="password" /><br /><br />
        <input type="submit" value="Login" />
        </form>');
    }
}
?>