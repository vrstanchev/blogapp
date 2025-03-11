<?php
require_once 'conn.php';
$userID = $_POST['USER_ID'];
$username = $_POST['username'];
$password = $_POST['password'];
$encrypt_password=md5($password);
$role = $_POST['role'];

$update_profile = $conn->prepare("UPDATE users SET username=?, password=?, role=? WHERE USER_ID=?");
  $update_profile->bind_param("sssi", $username, $encrypt_password,  $role,$userID);
$update_profile->execute();
header("Location: admin.php");
