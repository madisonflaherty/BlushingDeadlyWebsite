<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name = "viewport" content="width=device-width, initial-scale=1.0">
		<title> Blushing Deadly Games&nbsp;|&nbsp;Indie Game Development Team </title>
		<!-- Bootstrap core CSS -->
		<link href="bootstrap-3.1.1-dist/css/bootstrap.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="bootstrap-3.1.1-dist/css/offcanvas.css" rel="stylesheet">
		<link href="bootstrap-3.1.1-dist/css/blog.css" rel="stylesheet">	
	</head>
<body>
	<div class="myWrapper">
		<!-- Following used to make the floating navbar for desktop version -->
		<div class="row">
			<div class="col-xs-3 sidebar-offcanvas" id="sidebar" role="navigation">
				<a href="/"><img src="/images/transparentWebsiteLogo.png" alt="Logo" width="100%"></a>
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
						<li><a href="https://www.facebook.com/blushingdeadly" target="_blank">Facebook</a></li>
						<li><a href="https://twitter.com/BlushingDeadly" target="_blank">Twitter</a></li>
						<li><a href="https://www.youtube.com/channel/UC7u2hjBgN59HAAtEUZTCcbw/" target="_blank">YouTube</a></li>
                                                <li><a href="https://github.com/madisonflaherty/BlushingDeadlyWebsite" target="_blank">GitHub</a></li>
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
									<a href="/"><img class="mobileLogo" src="/images/transparentMobileLogo.png" alt="mobileLogo" width=100%></a>
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
									<!--content goes in this div! -->
										<?php
                                                                                include 'display.php';
                                                                                ?>
								<!-- END PAGE CONTENT -->
							</div>
						</div>
					</div>
				<div class="clear"></div>
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
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">
	</script>
	<script>
		//Forces the page to wait until the php has finished loading so that everything loads
		//together. 
		$(document).ready(function() {
			$("#outerWrapper").hide();
		});
		$(window).load(function() {
			$("#outerWrapper").show();
		});
	</script>
</body>
</html>
