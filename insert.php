<?php
include 'db.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$roll = $_POST['roll'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$contact = $_POST['contact'];

// Validation
if ($pass != $cpass) {
    die("Passwords do not match!");
}

if (!preg_match("/^[0-9]{10}$/", $contact)) {
    die("Invalid contact number!");
}

// Hash password
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

// Insert
$sql = "INSERT INTO students (first_name, last_name, roll_no, password, contact)
VALUES ('$fname', '$lname', '$roll', '$hashed_pass', '$contact')";

if ($conn->query($sql) === TRUE) {
    echo "Student Registered Successfully!";
    echo "<br><a href='index.php'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}
?>