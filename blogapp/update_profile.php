<?php
require_once 'conn.php';
$postID = $_POST['POST_ID'];
$username = $_POST['username'];
$password = $_POST['password'];
$encrypt_password=md5($password);
$role = $_POST['role'];

$update_profile = $conn->prepare("UPDATE users SET username=?,password=?,role=? WHERE POST_ID=?");
  $update_profile->bind_param("sssi", $username, $encrypt_password, $role,$postID);
$update_profile->execute();
header("Location: admin.php");
