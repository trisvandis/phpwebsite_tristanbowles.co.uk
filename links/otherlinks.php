
<?php 

session_start();

$thisPage="OtherLinks"; 

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
			<h2>Other Links</h2>
			<p>Here are some other links that you might find useful...</p>
			<h3>Tracking visitors to your site</h3>
				<ul>
					<li><a href="https://www.google.co.uk/analytics/">Google Analytics</a> - If you want to track the performance of your site, and have better insights of who's been looking at your pages, step this way!</li>

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
