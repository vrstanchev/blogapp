<?php
session_start();
$comment = $_POST['comment'];
$author=$_SESSION['username'];
$post_title=$_SESSION['title'];
$postID = $_POST['POST_ID'];
require_once 'conn.php';
 $new_comment = $conn->prepare("INSERT INTO  comments (comment, comment_author, post_title) VALUES (?,?,?)");
  $new_comment->bind_param("sss", $comment, $author, $post_title);
$new_comment->execute();
header("Location: admin.php");
?>
