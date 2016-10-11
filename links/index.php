<?php 

session_start();

$thisPage="Links"; 

?>

<!DOCTYPE html>
<html>
<?php include '../includes/head.php';?>
<body>
<?php include_once("../includes/analyticstracking.php") ?>
	<div id="main">
	<div class="container">
<?php include '../includes/header.php';?>
<?php include '../includes/menu.php';?>
	<div id="content">
		<div id="links">
			<h2>Links</h2>
			<p>This page is intended to be a reference library for any would-be web developers (like me) who want to learn more about html, css, php, javaScript, jQuery, Ruby and Python, as well as other coding blogs and useful tutorials.  I'll keep updating content as I learn more on my journey to becoming a website developer!</p>
			<h3>Coding Tutorials</h3>
				<ul>
					<li><a href="https://www.codecademy.com/">Code Academy</a> - A really great website, full of well-written, comprehensive tutorials to get you up and running making websites and writing code. Most of the content is completly free and is a great learning resource.  Can't recommend this one enough!</li>
					<li><a href="http://www.w3schools.com/">w3schools</a> - A great reference site, packed fulls of html and css exmamples that you can play around with a tweak.
				</ul>
			<p>If you have any sites you'd like to recommend, please <a href="http://www.tristanbowles.co.uk/contact/">get in touch</a>!</p>
		</div><!--end links-->		
	</div> <!--end content-->

	</div> <!--end container class-->		
</div> <!--end main-->
<div class="container">	
<?php include '../includes/footer.php';?>
</div>
</body>
</html>
