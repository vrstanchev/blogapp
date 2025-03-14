<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>Create post</title>
</head>
<body class="container">
<?php
echo "Hello, " . $_SESSION['username'];
?>
<ul>
<li><a href="admin.php">Back to Admin </a></li>
  <li><a href="logout.php">Logout</a></li>	
  </ul>
	<h1>Create post </h1>
<form method="POST" action="add_post.php">
<label for="title">Title</label>
<input type="text" name="title" placeholder=" Enter title"></br>
<label for="content">Content</label>
<textarea max="255" name="content" placeholder=" Enter post content"></textarea></br>
<label for="timestamp">Timestamp</label>
<input type="date" name="timestamp" value="2025-03-01" min="2025-01-01" max="2028-12-31" /> </br>
<input type="submit" name="submit" value="Create post">
</form>
</body>
</html>
