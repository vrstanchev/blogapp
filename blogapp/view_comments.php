<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>View comments</title>
</head>
<body class="container">
	<ul>
  <li><a href="admin.php">Back to Admin </a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>



<?php
require_once 'user_logic.php';
view_comments();
?>
</body>
</html>
