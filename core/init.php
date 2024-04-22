<?php
session_start();
ob_start();
error_reporting(E_ALL);

require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);

if (logged_in()) {
	$session_user_id = $_SESSION['id'];
	$user_data = user_data($session_user_id, 'id', 'first_name', 'last_name', 'email', 'password', 'password_recover');

	if ($current_file !== 'changepassword.php' && $current_file !== 'logout.php' && $user_data['password_recover'] === 1) {
		header('Location: changepassword.php?force');
		exit();
	}
}

$errors = array();
?>