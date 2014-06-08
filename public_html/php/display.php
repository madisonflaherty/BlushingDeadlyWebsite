<?php
$con=mysqli_connect("someHost", "someUser", "somePassword", "someDatabase");
if(mysqli_connect_errno()) {
	echo "Failed to connect to MYSQL: " . mysqli_connect_error();
}
$query=mysqli_query($con, "SELECT * FROM newsStorer ORDER BY id DESC LIMIT 5");
while($info=mysqli_fetch_array ($query)){
	echo "<div class='blog-post'>";
	echo "<h3 class='blog-post-title'>" . $info['title'] . "</h3>";
	echo "<p class='blog-post-meta'>Posted on " . $info['month'] . " " . $info['day'] . ", " . $info['year'];
	echo " by " . $info['author'] . "</p>";
	echo "<div class='blog-content'>" . $info['content'] . "</div>";
	echo "</div>";
}

mysqli_close($con);
?>
