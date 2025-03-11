<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Create comment</title>
</head>
<body class="container">
<li><a href="admin.php">Back to Admin </a></li>
  <li><a href="logout.php">Logout</a></li>	
<form method="POST" action="add_comment.php">
    <label for="commrent" >Comment</label>
    <textarea name="comment" id="comment"></textarea><br>

    <input type="submit" name="submit" value="Create comment">
</form>
</body>
</html>
