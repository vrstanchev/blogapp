<?php
session_start();
?>
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
	echo "Hello, " . $_SESSION['username'];
	 ?>
<ul>
  <li><a href="create_post.php">Create post</a></li>
   <li><a href="pagination.php">Try pagination</a></li>
      <li><a href="view_comments.php">View comments</a></li>
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
 if ($_SERVER["REQUEST_METHOD"] === "POST") {
 $search_word = $_POST['search'];
 $filter_type = $_POST['filter'];
require_once 'user_logic.php';
  search_by($search_word, $filter_type); 
  }
?>

</body>
</html>
