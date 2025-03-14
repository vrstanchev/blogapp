<?php
session_start();
require_once 'conn.php';
$username = $_POST['username'];
$password = $_POST['password'];
$encrypt_pass=md5($password);
 $auth_user = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
$auth_user->execute([ $username, $encrypt_pass ]); 
$userlogged = $auth_user->fetch();
$_SESSION['username'] = $username;
if ($userlogged) {
header("Location: admin.php");
} else { header("Location: index.php");}	
	
