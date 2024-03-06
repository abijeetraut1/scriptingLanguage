<?php
include 'db.php';

$name = $_POST["name"];
$phone = $_POST["phone"];

$sql = "INSERT INTO info (name, phone) VALUES ('$name', '$phone')";

$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: form.php");
} else {
    echo mysqli_error($conn);
}
?>;
