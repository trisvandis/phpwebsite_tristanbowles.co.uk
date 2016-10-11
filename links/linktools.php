<?php 

session_start();

$thisPage="LinkTools"; 

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
			<h2>Web Development Tools</h2>
			<p>Here are some of links to programmes and tools I use when I'm web developing.</p>
			<h3>Managing your website</h3>
				<ul>
					<li><a href="http://brackets.io/">Brackets</a> - One of the best editors I've found for editing the website content, and it's free to use as well.  The 'live preview' function makes CSS styling a lot less fiddly. Recommend you use it with Ampps if you want to edit content offline. </li>
					<li><a href="http://www.ampps.com/">AMPPS</a> - Can be used to simulate the backend of your website offline, with no monlthy subscription.
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
