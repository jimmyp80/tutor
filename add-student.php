<?php
include 'core/init.php';
protect_page();

if (empty($_POST) === false && empty($errors)) {
    if ($_POST['studentRegTitle'] === NULL) {
        $title = NULL;
    } else {
        $title = sanitize($_POST['studentRegTitle']);
    }

    if ($_POST['studentRegFirstName'] === NULL) {
        $firstName = NULL;
    } else {
        $firstName = sanitize($_POST['studentRegFirstName']);
    }

    if ($_POST['studentRegLastName'] === NULL) {
        $lastName = NULL;
    } else {
        $lastName = sanitize($_POST['studentRegLastName']);
    }

    if ($_POST['studentRegEmail'] === NULL) {
        $email = NULL;
    } else {
        $email = sanitize($_POST['studentRegEmail']);
    }

    if ($_POST['studentRegDOB'] === NULL) {
        $dob = NULL;
    } else {
        $dob = sanitize($_POST['studentRegDOB']);
    }
    
    if ($_POST['studentRegGender'] === NULL) {
        $gender = NULL;
    } else {
        $gender = sanitize($_POST['studentRegGender']);
    }
    
    if ($_POST['studentRegYear'] === NULL) {
        $academicYear = NULL;
    } else {
        $academicYear = sanitize($_POST['studentRegYear']);
    }
    
    if ($_POST['studentRegAddress1'] === NULL) {
        $address1 = NULL;
    } else {
        $address1 = sanitize($_POST['studentRegAddress1']);
    }
    
    if ($_POST['studentRegAddress2'] === NULL) {
        $address2 = NULL;
    } else {
        $address2 = sanitize($_POST['studentRegAddress2']);
    }
    
    if ($_POST['studentRegCity'] === NULL) {
        $city = NULL;
    } else {
        $city = sanitize($_POST['studentRegCity']);
    }
    
    if ($_POST['studentRegCounty'] === NULL) {
        $county = NULL;
    } else {
        $county = sanitize($_POST['studentRegCounty']);
    }
    
    if ($_POST['studentRegPostcode'] === NULL) {
        $postcode = NULL;
    } else {
        $postcode = sanitize($_POST['studentRegPostcode']);
    }
    
    if ($_POST['studentRegCountry'] === NULL) {
        $country = NULL;
    } else {
        $country = sanitize($_POST['studentRegCountry']);
    }
    
    if ($_POST['studentRegPhone1'] === NULL) {
        $phone1 = NULL;
    } else {
        $phone1 = sanitize($_POST['studentRegPhone1']);
    }
    
    if ($_POST['studentRegTimezone'] === NULL) {
        $timezone = NULL;
    } else {
        $timezone = sanitize($_POST['studentRegTimezone']);
    }
    
    if ($_POST['client'] === NULL) {
        $client = NULL;
    } else {
        $client = sanitize($_POST['client']);
    }
    
    if ($_POST['smsReceive'] === NULL) {
        $smsReceive = NULL;
    } else {
        $smsReceive = sanitize($_POST['smsReceive']);
    }
    
    if ($_POST['lessonReminder'] === NULL) {
        $lessonReminder = NULL;
    } else {
        $lessonReminder = sanitize($_POST['lessonReminder']);
    }
}

if (empty($_POST) === false && empty($errors)) {
    register_student($title, $firstName, $lastName, $email, $dob, $gender, $academicYear, $address1, $address2, $city, $county, $postcode, $country, $phone1, $timezone, $client, $smsReceive, $lessonReminder);
    header('Location: students.php?success');
    exit();
} else if (empty($errors) === false) {
    echo output_errors($errors);
}