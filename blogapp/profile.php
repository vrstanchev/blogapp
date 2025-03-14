<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
<title>Profile</title>
</head>
<body class="container">
	<?php
echo "Hello, " . $_SESSION['username'];
	 ?>
<ul>
  <li><a href="admin.php">Back to Admin </a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>
<?php
require_once 'user_logic.php';
profile_details();
?>

</body>
</html>
