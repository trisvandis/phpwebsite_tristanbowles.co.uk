
<?php $thisPage="Logout"; ?>

<?php 

session_start();

session_destroy();

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
        
        <h1>Coming soon...</h1><br>
        <p>Register for exclusive content!</p>
        
	</div> <!--end content-->

	
	</div> <!--end main container class-->
</div> <!--end main-->	

<div class="container">
<?php include '../includes/footer.php';?>
</div>
<script src="../js/blog.js"></script>
</body>
</html>