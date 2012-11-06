<?php require 'functions.php' ?>
<!doctype html>
<html>
<head>
	<title>Tumblr With JSON</title>
</head>
<body>

<?php
	$tumblrs = getTumblrFromJSON();
	//print_r($tumblrs);
	//echo $tumblrs->meta->status;
	//echo $tumblrs->response->blog->posts;
	// echo $tumblrs->response->posts->id;
	$i=0;
	// echo $tumblrs->response->posts->blog_name;
	 echo '<ul>';
	

	foreach($tumblrs->response->posts as $post) {

		echo "<li> {$post->post_url} </li>";
	}

	echo '</ul>';
	
?>

</body>
</html>