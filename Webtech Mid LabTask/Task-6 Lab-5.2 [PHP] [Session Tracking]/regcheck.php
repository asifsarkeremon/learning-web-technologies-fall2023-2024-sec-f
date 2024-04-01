<?php
session_start();

$name = $_REQUEST['name'];
$username = $_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$gender = $_REQUEST['gender'];
$dd = $_REQUEST['dd'];
$mm = $_REQUEST['mm'];
$yyyy = $_REQUEST['yyyy'];

$password_hash = password_hash($password, PASSWORD_DEFAULT);

$user_data = array(
    "name" => $name,
    "username" => $username,
    "email" => $email,
    "password" => $password_hash,
    "gender" => $gender,
    "dob" => $yyyy . '-' . $mm . '-' . $dd,
);

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
}
array_push($_SESSION['users'], $user_data);

header('location: login.php');
?>
