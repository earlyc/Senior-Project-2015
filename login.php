<?php
session_start();
 
$user["chris"] = "password";
$user["khanh"] = "password";
$user["paul"] = "password";
 
if (!isset($_SESSION['loggedIn']))
{
    echo '<h1>Login</h1>';
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (empty($_POST['username']) || empty($_POST['password']))
        {
            echo '<p>Please enter both a username and password.</p>';
        }
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