<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Edit profile </title>
</head>
<body class="container">
	<ul>
  <li><a href="admin.php">Back to Admin </a></li>
  <li><a href="logout.php">Logout</a></li>
</ul></br>
<?php
session_start();
require_once 'conn.php';

echo "Hello, " . $_SESSION['username'];

$userID = $_GET['USER_ID'];

$profile_edit = $conn->prepare("SELECT username, role FROM users WHERE USER_ID=?");
$profile_edit->bind_param("i", $userID);
$profile_edit->execute();
$profile_edit->bind_result($username,  $role);
$profile_edit->fetch();
$profile_edit->close();
?>

<form method="POST" action="update_profile.php">
 <input type="hidden" name="USER_ID" value="<?php echo $userID; ?>">
<label for="username">Username</label>
<input type="text" name="username" id="username" value=" <?php echo $username; ?>" ></br>
<label for="role">Select blog plan</label>
<select id="role" id="role" name="role"value=" <?php echo $role; ?>" >
<option value="Basic">Basic</option>
  <option value="Premium">Premium</option>
</select></br>
<input type="submit" name="submit" value="Update profile" class="button">
</form>
</body>
</html>
