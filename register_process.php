<?php
require 'db.php';
$name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$query = "INSERT INTO khach_hang (ten, email, mat_khau) VALUES (?, ?, ?)";
$stmt = $db->prepare($query);
$stmt->bind_param('sss', $name, $email, $password);

if ($stmt->execute()) {
    header("Location: login.php");
} else {
    echo "Đăng ký thất bại: " . $stmt->error;
}
?>