<?php
include 'core/init.php';
logged_in_redirect();

if (empty($_POST) === false && empty($errors)) {
	$email 	  = sanitize($_POST['emailLogin']);
	$password = sanitize($_POST['password']);

	if ($_POST['remember']) {
		$year = time() + 31536000;
		setcookie('remember_me', $email, $year);
	} elseif (!$_POST['remember']) {
		$past = time() - 100;
		setcookie('remember_me', 'gone', $past);
	}

	if (user_exists($email) === false) {
		$errors[] = '<div class="alert alert-warning" style="display:inline; position:absolute;">That email & password combination is incorrect -<br>Please <a href="#" data-toggle="modal" data-target="#loginPopUp">try again</a>.</div>';
	} else {
		$login = user_login($email, $password);
		if ($login == false) {
			$errors[] = '<div class="alert alert-warning" style="display:inline; position:absolute;">That email & password combination is incorrect -<br>Please <a href="#" data-toggle="modal" data-target="#loginPopUp">try again</a>.</div>';
		} else {
			$_SESSION['id'] = $login;
			header('Location: dashboard.php');
			exit();
		}
	}
}

if (empty($errors) === false) {
	include 'includes/overall/header.php';
	echo output_errors($errors);
	include 'includes/overall/footer.php';
}