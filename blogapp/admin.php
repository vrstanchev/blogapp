<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>Admin</title>
</head>
<body class="container">
	<?php
	session_start();
echo "Hello, " . $_SESSION['username'];
	 ?>
<ul>
  <li><a href="create_post.php">Create post</a></li>
   <li><a href="pagination.php">Try pagination</a></li>
    <li><a href="profile.php">Profile page </a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>
<form method="POST" action="">
<input type="text" name="search" placeholder="Search">
<select  name="filter">
  <option value="title">By title</option>
  <option value="content">By Content</option>
</select></br>
<input type="submit" value="Search">
</form>
<?php
require_once 'user_logic.php';
search_by();
?>

</body>
</html>
