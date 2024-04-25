<?php
include 'core/init.php';
protect_page();

if (empty($_POST) === false && empty($errors)) {
	$title 	         = sanitize($_POST['clientRegTitle']);
	$firstName       = sanitize($_POST['clientRegFirstName']);
    $lastName        = sanitize($_POST['clientRegLastName']);
    $email           = sanitize($_POST['clientRegEmail']);
    $status          = sanitize($_POST['clientRegStatus']);
    $dob             = sanitize($_POST['clientRegDOB']);
    $address1        = sanitize($_POST['clientRegAddress1']);
    $address2        = sanitize($_POST['clientRegAddress2']);
    $city            = sanitize($_POST['clientRegCity']);
    $county          = sanitize($_POST['clientRegCounty']);
    $postcode        = sanitize($_POST['clientRegPostcode']);
    $country         = sanitize($_POST['clientRegCountry']);
    $phone1          = sanitize($_POST['clientRegPhone1']);
    $timezone        = sanitize($_POST['clientRegTimezone']);
    $clientMgr       = sanitize($_POST['clientRegCM']);
    $smsReceive      = sanitize($_POST['smsReceive']);
    $lessonReminder  = sanitize($_POST['lessonReminder']);
    $invoiceReminder = sanitize($_POST['invoiceReminder']);
    $balanceReminder = sanitize($_POST['balanceReminder']);

	if (empty($errors)) {
		if (client_exists($email)) {
			$errors[] = '<div class="alert alert-warning" style="display:inline; position:absolute;">This email address <br><strong>\''.$_POST['email'].'\'</strong> is already registered</div>';
		}
	}
}

if (empty($_POST) === false && empty($errors)) {
    register_client($title, $firstName, $lastName, $email, $status, $dob, $address1, $address2, $city, $county, $postcode, $country, $phone1, $timezone, $clientMgr, $smsReceive, $lessonReminder, $invoiceReminder, $balanceReminder);
    header('Location: clients.php?success');
    exit();
} else if (empty($errors) === false) {
    echo output_errors($errors);
}