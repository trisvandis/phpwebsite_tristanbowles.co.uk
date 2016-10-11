<?php 

session_start();

$thisPage="About"; 

?>

<!DOCTYPE html>
<html>

<!--about page-->

<?php include '../includes/head.php';?>

<body>
<?php include_once("../includes/analyticstracking.php") ?>
	<div id="main">
	<div class="container">

<?php include '../includes/header.php';?>
<?php include '../includes/menu.php';?>

	<div id="content">
		<h2>About me:</h2>
		<p>Tristan Bowles is training to be a web developer. He is completely self-taught and is building this site from scratch.</p>
		<a href="http://www.tristanbowles.co.uk/about/trispic.jpg"><img id="mypic" alt="Tristan Bowles" longdesc="Tristan Bowles Web Developer" src="trispic.jpg" width="240" height="240" class="img-thumbnail"/></a>
		<p>Tristan has a passion for writing code, developing ideas and working with new technologies.</p>
		<p>Please <a href="http://www.tristanbowles.co.uk/contact/">get in touch</a> if you'd like to ask a question or if you'd like to talk about collborating on future projects.</p>
	</div> <!--end content-->

	
	</div> <!--end main container class-->
</div> <!--end main-->	

<div class="container">
<?php include '../includes/footer.php';?>
</div>
<script src="../js/blog.js"></script>
</body>
</html>
