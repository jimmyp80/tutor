<?php

function recover($email) {
	$email		= sanitize($email);
	$user_data 	= user_data(user_id_from_email($email), 'first_name', 'email', 'email_code');
	$email_code = $user_data['email_code'];
				
	$subject = 'Password Reset';
	$from 	 = 'NoReply@tutor.com';
	$body 	 = "Hi ".$user_data['first_name'].",<br><br>You have received this email to reset your password. <strong>To reset your password, please <a href='www.tutors.com/password-update.php?code=".$email_code."'>click here</a> and follow the instructions.</strong><br><br>
	This email is auto-generated - please do not reply as your email will not be seen.<br><br>
	Thank you.";
	$headers = "From: " . strip_tags($from) . "\r\n";
	$headers .= "Reply-To: ". strip_tags($from) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	mail($email, $subject, $body, $headers);
}

function update_user($user_id, $update_data) {
	global $conn;
	$update = array();
	array_walk($update_data, 'array_sanitize');
	foreach($update_data as $field=>$data) {
		$update[] = '`' . $field . '` = \'' . $data . '\'';
	}
	mysqli_query($conn, "UPDATE users SET " . implode(', ', $update) . " WHERE user_id = $user_id");
}

function update_password($email_code, $newPassword) {
	global $conn;
	global $user_data;
	$query 	   = mysqli_query($conn, "SELECT * FROM users WHERE email_code = '$email_code'");
	$row1  	   = mysqli_fetch_assoc($query);
	$hashedPW  = $row1['password'];
	$hashedPW1 = password_hash($newPassword, PASSWORD_DEFAULT, ['cost' => 11]);
	$result1 = mysqli_query($conn, "UPDATE users SET password = '$hashedPW1', password_recover = 0 WHERE email_code = '$email_code'");
	return $result1;
}

//**********USER ACTIONS**********
//Register new user
function register_user($first_name, $last_name, $email, $password) {
	global $conn;
	$hashedPW = password_hash($password, PASSWORD_DEFAULT, ['cost' => 11]);
	$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?,?,?,?)");
	$stmt->bind_param("ssss", $first_name, $last_name, $email, $hashedPW);
	$stmt->execute();
}

//Check if user already exists
function user_exists($email) {
	global $conn;
	$email  = sanitize($email);
	$result = mysqli_query($conn, "SELECT COUNT(id) FROM users WHERE email = '$email'");
	$row    = mysqli_fetch_row($result);
	return ($row[0] == 1) ? true : false;
}

//Existing user login
function user_login($email, $password) {
	global $conn;
	$user_id  = user_id_from_email($email);
	$query 	  = mysqli_query($conn, "SELECT password FROM users WHERE email = '$email'");
	$row1  	  = mysqli_fetch_assoc($query);
	$hashedPW = $row1['password'];
	if (password_verify($_POST['password'], $hashedPW)) {
		$result = mysqli_query($conn, "SELECT COUNT(id) FROM users WHERE email = '$email'");
		$row 	= mysqli_fetch_row($result);
		return ($row[0] == 1) ? $user_id : false;
	}
}

//Get session ID on login
function logged_in() {
	return (isset($_SESSION['id'])) ? true : false;
}

//Get user ID from email
function user_id_from_email($email) {
	global $conn;
	$email  = sanitize($email);
	$result = mysqli_query($conn, "SELECT id FROM users WHERE email = '$email'");
	$row    = mysqli_fetch_assoc($result);
	return $row['id'];
}

//Get user ID and email
function user_data($user_id, $email) {
	global $conn;
	$func_num_args = func_num_args();
	$func_get_args = func_get_args();
	if ($func_num_args > 1) {
		unset($func_get_args[0]);
		$fields = implode(', ', $func_get_args);
		$data   = mysqli_fetch_assoc(mysqli_query($conn, "SELECT $fields FROM users WHERE id = $user_id"));
		return $data;
	}
}

//Change password
function change_user_password($user_id, $current_password, $new_password) {
	global $conn;
	$user_id = (int)$user_id;
	$query 	   = mysqli_query($conn, "SELECT * FROM users WHERE id = $user_id");
	$row1  	   = mysqli_fetch_assoc($query);
	$hashedPW  = $row1['password'];
	if (password_verify($current_password, $hashedPW)) {
		$hashedPW1 = password_hash($new_password, PASSWORD_DEFAULT, ['cost' => 11]);
		$result1 = mysqli_query($conn, "UPDATE users SET password = '$hashedPW1', password_recover = 0 WHERE password = '$hashedPW'");
		return $result1;
	} else {
		return false;
	}
}

//*****CLIENT ACTIONS*****
//Register new client
function register_client($title, $firstName, $lastName, $email, $status, $dob, $address1, $address2, $city, $county, $postcode, $country, $phone1, $phone2, $timezone, $clientMgr, $smsReceive, $lessonReminder, $invoiceReminder, $balanceReminder) {
	global $conn;
	$stmt = $conn->prepare("INSERT INTO clients (title, first_name, last_name, email, status, dob, address_1, address_2, city, county, postcode, country, phone_1, phone_2, timezone, client_manager, receive_sms, lesson_reminders, invoice_reminders, balance_reminders) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssssssssssssiiii", $title, $firstName, $lastName, $email, $status, $dob, $address1, $address2, $city, $county, $postcode, $country, $phone1, $phone2, $timezone, $clientMgr, $smsReceive, $lessonReminder, $invoiceReminder, $balanceReminder);
	$stmt->execute();
}

//Check if client already exists
function client_exists($email) {
	global $conn;
	$email  = sanitize($email);
	$result = mysqli_query($conn, "SELECT COUNT(id) FROM clients WHERE email = '$email'");
	$row    = mysqli_fetch_row($result);
	return ($row[0] == 1) ? true : false;
}

//*****SAVE CONTACT*****

function save_contact($type, $title, $firstname, $lastname, $email, $mobile, $phone, $status, $address1, $address2, $city, $county, $postcode, $country, $latitude, $longitude, $notes, $userId) {
	global $conn;
	date_default_timezone_set("Europe/London");
	$now = date('Y-m-d H:i:s');
	$query = mysqli_query($conn, "SELECT * FROM clients WHERE type = '$type' AND user_id = $userId
		UNION
		SELECT * FROM pupils WHERE type = '$type' AND user_id = $userId
		UNION
		SELECT * FROM tutors WHERE type = '$type' AND user_id = $userId");
	$result = mysqli_num_rows($query);
	if ($result === 1) {
		if ($type === 'Client') {
			$stmt = $conn->prepare("UPDATE clients SET type = ?, title = ?, first_name = ?, last_name = ?, email = ?, mobile = ?, phone = ?, status = ?, address1 = ?, address2 = ?, city = ?, county = ?, postcode = ?, country = ?, latitude = ?, longitude = ?, notes = ?, last_updated = ? WHERE user_id = ?");
			$stmt->bind_param("ssssssssssssssddssi", $type, $title, $firstname, $lastname, $email, $mobile, $phone, $status, $address1, $address2, $city, $county, $postcode, $country, $latitude, $longitude, $notes, $now, $userId);
			$stmt->execute();
		} else if ($type === 'Pupil') {
			$stmt = $conn->prepare("UPDATE pupils SET type = ?, title = ?, first_name = ?, last_name = ?, email = ?, mobile = ?, phone = ?, status = ?, address1 = ?, address2 = ?, city = ?, county = ?, postcode = ?, country = ?, latitude = ?, longitude = ?, notes = ?, last_updated = ? WHERE user_id = ?");
			$stmt->bind_param("ssssssssssssssddssi", $type, $title, $firstname, $lastname, $email, $mobile, $phone, $status, $address1, $address2, $city, $county, $postcode, $country, $latitude, $longitude, $notes, $now, $userId);
			$stmt->execute();
		} else if ($type === 'Tutor') {
			$stmt = $conn->prepare("UPDATE tutors SET type = ?, title = ?, first_name = ?, last_name = ?, email = ?, mobile = ?, phone = ?, status = ?, address1 = ?, address2 = ?, city = ?, county = ?, postcode = ?, country = ?, latitude = ?, longitude = ?, notes = ?, last_updated = ? WHERE user_id = ?");
			$stmt->bind_param("ssssssssssssssddssi", $type, $title, $firstname, $lastname, $email, $mobile, $phone, $status, $address1, $address2, $city, $county, $postcode, $country, $latitude, $longitude, $notes, $now, $userId);
			$stmt->execute();
		}
	} else {
		if ($type === 'Client') {
			$stmt = $conn->prepare("INSERT INTO clients (type, title, first_name, last_name, email, mobile, phone, status, address1, address2, city, county, postcode, country, latitude, longitude, notes, record_created) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssssssssssssddss", $type, $title, $firstname, $lastname, $email, $mobile, $phone, $status, $address1, $address2, $city, $county, $postcode, $country, $latitude, $longitude, $notes, $now);
			$stmt->execute();
		} else if ($type === 'Pupil') {
			$stmt = $conn->prepare("INSERT INTO pupils (type, title, first_name, last_name, email, mobile, phone, status, address1, address2, city, county, postcode, country, latitude, longitude, notes, record_created) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssssssssssssddss", $type, $title, $firstname, $lastname, $email, $mobile, $phone, $status, $address1, $address2, $city, $county, $postcode, $country, $latitude, $longitude, $notes, $now);
			$stmt->execute();
		} else if ($type === 'Tutor') {
			$stmt = $conn->prepare("INSERT INTO tutors (type, title, first_name, last_name, email, mobile, phone, status, address1, address2, city, county, postcode, country, latitude, longitude, notes, record_created) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssssssssssssssddss", $type, $title, $firstname, $lastname, $email, $mobile, $phone, $status, $address1, $address2, $city, $county, $postcode, $country, $latitude, $longitude, $notes, $now);
			$stmt->execute();
		}
	}
}

//*****SAVE JOB*****

function save_job($client, $title, $startdate, $enddate, $postcode, $description) {
	global $conn;
	date_default_timezone_set("Europe/London");
	$now = date('Y-m-d H:i:s');
	$stmt = $conn->prepare("INSERT INTO jobs (client, title, startdate, enddate, postcode, description, record_created) VALUES (?,?,?,?,?,?,?)");
	$stmt->bind_param("sssssss", $client, $title, $startdate, $enddate, $postcode, $description, $now);
	$stmt->execute();
}

//*****SAVE SCHOOL*****

function save_school($name, $website, $phone, $type, $notes, $address1, $address2, $city, $county, $postcode, $country) {
	global $conn;
	date_default_timezone_set("Europe/London");
	$now = date('Y-m-d H:i:s');
	$stmt = $conn->prepare("INSERT INTO schools (name, website, phone, type, notes, address1, address2, city, county, postcode, country, record_created) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("ssssssssssss", $name, $website, $phone, $type, $notes, $address1, $address2, $city, $county, $postcode, $country, $now);
	$stmt->execute();
}
?>