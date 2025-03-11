<?php
require_once 'conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$_SESSION['role']=$role;
$encrypt_pass=md5($password);
 $add_user = $conn->prepare("INSERT INTO users (username, password,role)
  VALUES (?,?,? )");
  $add_user->bind_param("sss", $username, $encrypt_pass, $role);
$add_user->execute();
header("Location: index.php");
