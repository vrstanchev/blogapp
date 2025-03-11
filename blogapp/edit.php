<?php
session_start();
require_once 'conn.php';
$postID = $_POST['POST_ID'];
$title = $_POST['title'];
$content = $_POST['content'];
$timestamp = $_POST['timestamp'];
$author=$_SESSION['username'];

$update_post = $conn->prepare("UPDATE posts SET author=?,title=?,content=?,timestamp=? WHERE POST_ID=?");
  $update_post->bind_param("ssssi", $author, $title, $content, $timestamp,$postID);
$update_post->execute();
header("Location: admin.php");
