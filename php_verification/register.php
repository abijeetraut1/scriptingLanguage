<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);

    $errors = [];
    if (strlen($fullname) > 40) {
        $errors[] = "Full name must be up to 40 characters.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }
    if (!preg_match("/^[a-zA-Z]+[0-9]+$/", $username)) {
        $errors[] = "Username must start with a letter and be followed by a number.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        // No validation errors, insert data into the database
        $sql = "INSERT INTO users (fullname, email, username) VALUES ('$fullname', '$email', '$username')";
        if ($conn->query($sql) === TRUE) {
            echo "User registered successfully.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>;
