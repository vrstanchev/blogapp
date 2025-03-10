<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit post</title>
</head>
<body class="container">
<?php
session_start();
require_once 'conn.php';

echo "Hello, " . $_SESSION['username'];

$postID = $_GET['POST_ID'];

$post_edit = $conn->prepare("SELECT title, content, timestamp FROM posts WHERE POST_ID=?");
$post_edit->bind_param("i", $postID);
$post_edit->execute();
$post_edit->bind_result($title, $content, $timestamp);
$post_edit->fetch();
$post_edit->close();
?>

<h1>Edit post</h1>
<form method="POST" action="edit.php">
	 <input type="hidden" name="POST_ID" value="<?php echo $postID; ?>">
    <label for="title">Title</label>
    <input type="text" name="title" value="<?php echo $title; ?>"><br>

    <label for="content">Content</label>
    <textarea name="content"><?php echo $content; ?></textarea><br>

    <label for="timestamp">Timestamp</label>
    <input type="date" name="timestamp" value=<?php echo $timestamp; ?>" min="2025-01-01" max="2028-12-31"><br>

    <input type="submit" name="submit" value="Apply Edit">
</form>
</body>
</html>
