<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>Home</title>
</head>
<body class="container">
	<ul>
  <li><a href="admin.php">Back to Admin </a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>
<?php
echo "Try pagination" ;
?>

<form method="POST" action="">
<select  name="limitresults">
<option value="3">3</option>
  <option value="5">5</option>
  <option value="10">10</option>
</select></br>
<input type="submit" value="Limit">
</form>
<?php
require_once 'user_logic.php';
pagination();
?>
</body>
</html>
