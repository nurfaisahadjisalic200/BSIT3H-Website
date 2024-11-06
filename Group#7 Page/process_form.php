<?php
session_start();

$host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "coffee";

$conn = new mysqli($host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
$remember_me = isset($_POST['remember_me']);


$hashed_password = password_hash($password, PASSWORD_BCRYPT);


$sql = "INSERT INTO users (name, username, password, phone) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $username, $hashed_password, $phone);

if ($stmt->execute()) {
  echo "Registration successful!<br>";
  $_SESSION['username'] = $username;

  
  if ($remember_me) {
    setcookie("username", $username, time() + (86400 * 30), "/"); // 30 days
  }
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>