<?php
function pagination(){
	echo "Set results limit"; 
require_once 'conn.php';
$page_limit=$_POST['limitresults'];
$limit_posts = "SELECT title, author, content, timestamp FROM posts LIMIT $page_limit";
$limited_results = $conn->query($limit_posts);

if ($limited_results->num_rows > 0) {
    while ($row = $limited_results->fetch_assoc()) {
        echo "<table>";
        echo "<tr><td>Title:</td><td>" . $row["title"] . "</td></tr>";
        echo "<tr><td>Author:</td><td>" . $row["author"] . "</td></tr>";
        echo "<tr><td>Content:</td><td>" . $row["content"] . "</td></tr>";
        echo "<tr><td>Timestamp:</td><td>" . $row["timestamp"] . "</td></tr>";
        echo "</table>";
    }
} else {
    echo "No results";
}
	}

function search_by(){
echo "Filtered results" ;
require_once 'conn.php';
$search_query=$_POST['search'];
$filter_type=$_POST['filter'];
$by_filter = $conn->prepare("SELECT * FROM posts WHERE $filter_type LIKE ?;");
$search_query = "%" . $search_query . "%";
$by_filter->bind_param("s", $search_query);
$by_filter->execute();

$by_title_results = $by_filter->get_result(); 

if ($by_title_results->num_rows > 0) {
    while ($row = $by_title_results->fetch_assoc()) {
        echo "<table>";
        echo "<tr><td>Title:</td><td>" . $row["title"] . "</td></tr>";
        echo "<tr><td>Author:</td><td>" . $row["author"] . "</td></tr>";
        echo "<tr><td>Content:</td><td>" . $row["content"] . "</td></tr>";
        echo "<tr><td>Timestamp:</td><td>" . $row["timestamp"] . "</td></tr>";
         echo "<tr><td colspan='2'>";
		echo   " <button> <a href='create_comment.php?POST_ID=" . $row["POST_ID"] . "'>Add Comment</a> </button> "; 
		echo   " <button> <a href='edit_post.php?POST_ID=" . $row["POST_ID"] . "'>Edit</a> </button>"; 
		echo   "   <button>  <a href='delete_post.php?POST_ID=" . $row["POST_ID"] . "'>Delete</a><button>" ; 
		echo   "</td></tr>";
        echo "</table>";
    }
} else {
    echo "No results";
}
}
function view_all(){
require_once 'conn.php';
$all_posts = "SELECT title, author, content, timestamp FROM posts";
$take_posts = $conn->query($all_posts);

if ($take_posts->num_rows > 0) {

  while($row = $take_posts->fetch_assoc()) {
    echo "<table>";
echo "<tr><td>Title:</td><td>" . $row["title"] . "</td></tr>";
echo "<tr><td>Author:</td><td>" . $row["author"] . "</td></tr>";
echo "<tr><td>Content:</td><td>" . $row["content"] . "</td></tr>";
echo "<tr><td>Timestamp:</td><td>" . $row["timestamp"] . "</td></tr>";
echo "</table>";
  }
} else {
  echo "0 results";
}	
	
	}
	
	
function profile_details(){
$username=$_SESSION['username'];	
require_once 'conn.php';
$user_details = $conn->prepare("SELECT USER_ID, username, password, role FROM users WHERE username = ?");
$user_details->bind_param("s", $username);
$user_details->execute();

$current_details = $user_details->get_result(); 
if ($current_details->num_rows > 0) {

  while($row = $current_details->fetch_assoc()) {
    echo "<table>";
echo "<tr><td>Current username:</td><td>" . $row["username"] . "</td></tr>";
echo "<tr><td>Current password:</td><td>" . $row["password"] . "</td></tr>";
echo "<tr><td>Current role:</td><td>" . $row["role"] . "</td></tr>";
echo   "   <button>  <a href='profile_info.php?USER_ID=" . $row["USER_ID"] . "'>Update profile</a><button>" ; 
echo "</table>";
  }
} else {
  echo "0 results";
}	
	
	}
function view_comments(){
	$current_title=$_SESSION['title'];	
require_once 'conn.php';
$post_comments = $conn->prepare("SELECT comment_author, comment FROM comments WHERE post_title = ?");
$post_comments->bind_param("s", $current_title);
$post_comments->execute();

$current_details = $post_comments->get_result(); 
if ($current_details->num_rows > 0) {

  while($row = $current_details->fetch_assoc()) {
    echo "<table>";
echo "<tr><td>Comment author:</td><td>" . $row["comment_author"] . "</td></tr>";
echo "<tr><td>Comment:</td><td>" . $row["comment"] . "</td></tr>";
echo "</table>";
  }
} else {
  echo "0 results";
}	
	
	}
