<?php
session_start();
$title = $_POST['title'];
$content = $_POST['content'];
$timestamp = $_POST['timestamp'];
$author=$_SESSION['username'];
$_SESSION['title']=$title;
require_once 'conn.php';
 $new_post = $conn->prepare("INSERT INTO posts (author, title,content,timestamp)
  VALUES (?,?,?,? )");
  $new_post->bind_param("ssss", $author, $title, $content, $timestamp);
$new_post->execute();
header("Location: admin.php");
