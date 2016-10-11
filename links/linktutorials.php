<?php 

session_start();

$thisPage="LinkTutorials"; 

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
			<h2>Coding Tutorials</h2>
			<p>Here are some coding tutorials that you may find useful...</p>
			<h3>Web Development Tutorials</h3>
				<ul>
					<li><a href="https://www.codecademy.com/">Code Academy</a> - A really great website, full of well-written, comprehensive tutorials to get you up and running making websites and writing code. Most of the content is completly free and is a great learning resource.  Can't recommend this one enough!</li>
                </ul>
                <h3>Reference Guides</h3>
                <ul>
					<li><a href="http://www.w3schools.com/">w3schools</a> - A great reference site, packed fulls of html and css examples that you can play around with a tweak.
				</ul>
            &nbsp;
            &nbsp;
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
