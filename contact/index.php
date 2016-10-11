<?php

session_start();

require_once '../helpers/security.php';


$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
$fields= isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
?>

<?php $thisPage="Contact"; ?>
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

        <?php if(!empty($errors)): ?> 
            <div class="panel">
                <ul>
                <li><?php echo implode('</li><li>', $errors); ?></li>
                </ul>    
            </div>  <!--end panel--> 
        <?php endif; ?>
            
        <form action="contact.php" method="post">
            <label>
                Your name *
                <input type="text" name="name" autocomplete="off"<?php echo isset($fields['name']) ? ' value="' . e($fields['name']) . '"': '' ?>>
            </label>
            <label>
                Your email address *
                <input type="text" name="email" autocomplete="off"<?php echo isset($fields['email']) ? ' value="' . e($fields['email']) . '"': '' ?>>
            </label>            
            <label>
                Your message *
                <textarea name="message" rows="8"><?php echo isset($fields['message']) ?  e($fields['message']) : '' ?></textarea>
            </label>            
            
            <input type="submit" value="Send">
            
        </form>
            
         <p class="muted">* required fields</p> 
            
		</div> <!--end content-->
		
		</div> <!--end main container class-->
	</div> <!--end main-->	
<div class="container">	
<?php include '../includes/footer.php';?>
</div>
<script src="../js/active.js"></script>   
</body>
</html>

<?php
unset($_SESSION['errors']);
unset($_SESSION['fields']);
?>
