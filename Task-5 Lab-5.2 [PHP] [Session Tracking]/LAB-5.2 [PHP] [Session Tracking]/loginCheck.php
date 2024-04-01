<?php
session_start();

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if (empty($username) || empty($password)) 
{
    echo "Fill up Username and Password";
}
else
{
    if (!isset($_SESSION['users']))
    {
        echo "No user";
    } 
    else 
    {
        
        foreach ($_SESSION['users'] as $user) {
            if ($user["username"] === $username && password_verify($password, $user["password"])) {
                $_SESSION['flag'] = 'true'; 
                header('location: logged_dashboard.php');
                break;
            }
        }

        echo "Invalid username or password.";
    }
}
?>
