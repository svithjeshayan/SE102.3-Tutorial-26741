<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial 13";

$conn = new mysqli($servername, $username, $password, $dbname);

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO students (id, name, email, password) VALUES ('$id', '$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful! Data inserted into the database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
