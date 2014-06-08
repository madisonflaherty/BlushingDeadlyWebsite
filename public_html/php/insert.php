<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> Blushing Deadly Games&nbsp;|&nbsp;Indie Game Development Team </title>
		<!-- Bootstrap core CSS -->
		<link href="http://blushingdeadly.com/bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="http://blushingdeadly.com/bootstrap-3.1.1-dist/css/offcanvas.css" rel="stylesheet">
		<link href="http://blushingdeadly.com/bootstrap-3.1.1-dist/css/blog.css" rel="stylesheet">	
	</head>
<body>
	<div class="myWrapper">
		<!-- Following used to make the floating navbar for desktop version -->
		<div class="row">
			<div class="col-xs-3 sidebar-offcanvas" id="sidebar" role="navigation">
				<img src="/images/transparentWebsiteLogo.png" alt="Logo" width="100%">
				<div class="spacer"></div>
				<div class="aboutBox">
					<b>What is Blushing Deadly Games?</b>  An independent game development team based in Eastern Pennsylvania.
				</div> 
				<div class="spacer"></div>
				<div class="list-group">
					<a href="/" class="list-group-item active">Home</a>
					<a href="/games.html" class="list-group-item">Games</a>
					<a href="/about.html" class="list-group-item">About</a>
					<a href="/contact.html" class="list-group-item">Contact</a>
				</div>
				<div class="aboutBox" id="sidebar" role="navigation">
					<h4>Connect</h4>
					<ol class="list-unstyled">
						<li><a href="#" target="_blank">GitHub</a></li>
						<li><a href="https://twitter.com/BlushingDeadly" target="_blank">Twitter</a></li>
						<li><a href="#" target="_blank">Facebook</a></li>
					</ol>	
				</div>
			</div><!-- End of floating nav bar -->
			<div class="col-xs-9" id="notSidebar">
				<div class="myContent">
					<div class="blog-main" >
						<div class="row" id="buffered">
							<div class="blog-main"><!-- used for more than just blog-->
								<!--Start of Mobile Only Section -->
								<div class="upperMobileBar" id="upperMobile">
									<img class="mobileLogo" src="/images/transparentMobileLogo.png" alt="mobileLogo" width=100%>
									<div class="spacer"></div>
									<div class="aboutBox" id="mobileOnly">
										<b>What is Blushing Deadly Games?</b>  An independent game development team based in Eastern Pennsylvania.
									</div> 
									<div class="spacer"></div>
									<div id="mobileOnly">
										<ul class="nav nav-pills btn-xs" id="mobileOnly">
											<li class="active"><a href="/">Home</a></li>
											<li><a href="/games.html">Games</a></li>
											<li><a href="/about.html">About</a></li>
											<li><a href="/contact.html">Contact</a></li>
										</ul>
									</div>
									<div class="spacer"></div>
								</div><!-- End of mobile only section -->
								<!-- CONTENT -->
								<div class="col-xs-12">
									<!--content goes in this div! -->
									<div class="blog-post">
										<?php
										$con=mysqli_connect("someHost", "someUser", "somePassword", "someDatabase");
										if (mysqli_connect_errno()) {
											echo "Failed to connect to MYSQL: " . mysqli_connect_error();
										}

										//escape variables
										$blog_post_title = mysqli_real_escape_string($con, $_POST['blog-post-title']);
										$day = mysqli_real_escape_string($con, $_POST['day']);
										$month = mysqli_real_escape_string($con, $_POST['month']);
										$year = mysqli_real_escape_string($con, $_POST['year']);
										$blog_post_author = mysqli_real_escape_string($con, $_POST['author']);
										$blog_post_content = mysqli_real_escape_string($con, $_POST['blog-content']);

										$sql="INSERT INTO newsStorer (title, day, month ,year, content, author) VALUES ('$blog_post_title', '$day', '$month', '$year', '$blog_post_content', '$blog_post_author')";
										if(!mysqli_query($con,$sql)){
											die('Error: ' .mysqli_error($con));
										}
										echo "<div class='blog-post-title'>";
										echo "	Your entry was added successfully.";
										echo "</div>";
										echo "<div class='blog-content'>";
										echo "	You may now either make <a href= '/someLink.html'>another post</a> or return to <a href='/'>Blushing Deadly's Index</a>.";

										mysqli_close($con);
										?>
									</div>
								</div><!-- END PAGE CONTENT -->
							</div>
						</div>
					</div>
				<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- END CONTENT -->
	<!-- Footer start -->
	<div class="spacer"></div>
	<div id ="footer">
		<p class = "text-muted">Copyright 2014 Blushing Deadly Games - All Rights Reserved</p>
	</div><!-- end footer -->
</body>
</html>
