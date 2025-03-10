<?php
require_once 'conn.php';
$postID = $_GET['POST_ID'];
 $delete_post = $conn->prepare("DELETE FROM posts WHERE POST_ID=?");
  $delete_post->bind_param("i", $postID);
$delete_post->execute();
header("Location: admin.php");
