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
  <li><a href="registration.php">Sign Up</a></li>
  <li><a href="login.php">Login</a></li>
</ul>
<?php
echo "Hello, Visitor" ;
?>

<?php
require_once 'user_logic.php';
view_all();
?>
</body>
</html>
