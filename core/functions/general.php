<?php
function email($to, $subject, $body) {
	mail($to, $subject, $body);
}

function logged_in_redirect() {
	if(logged_in() === true) {
		header('Location: dashboard.php');
		exit();
	}
}

function protect_page() {
	if (logged_in() === false) {
		header('Location: index.php');
		exit();
	}
}

function array_sanitize(&$item) {
	global $conn;
	$item = htmlentities(strip_tags(mysqli_real_escape_string($conn, $item)));
}

function sanitize($data) {
	global $conn;
	return htmlentities(strip_tags(mysqli_real_escape_string($conn, $data)));
}

function output_errors($errors) {
	return '<ul id="errorsArray">' . implode('</li><li>', $errors) . '</ul>';
}