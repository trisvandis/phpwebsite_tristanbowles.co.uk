
<?php $thisPage="Login"; ?>

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
        
        <h1>Login</h1><br>
        <form action='login.php' method='POST'>
            Username: <input type='text' name='username'><br>
            Password: <input type='password' name='password'><br>
            <input type='submit' name='Log in'><br>
        </form>
        
	</div> <!--end content-->

	
	</div> <!--end main container class-->
</div> <!--end main-->	

<div class="container">
<?php include '../includes/footer.php';?>
</div>
<script src="../js/blog.js"></script>
</body>
</html>




