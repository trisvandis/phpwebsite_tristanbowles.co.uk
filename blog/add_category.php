<?php
$thisPage="Blog";
    
include_once('resources/init.php');

echo @mysql_ping() ? 'true' : 'false';

if(isset($_POST['name']) ) {
    
    $name = trim($_POST['name']);
    
    if( empty($name)) {
        $error = 'You must submit a category name.';
        
    } else if (category_exists('name', $name)) {
        
        $error = 'That category already exists';
    } else if ( strlen($name) > 24 ) {
        
        $error = 'category names can only be up to 24 characters';
    }
    
    if ( ! isset($error)) {
        
        add_category($name);
    }
    
}

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

            <h2>Add a Category</h2>
       
            
            <?php
            
            if( isset($error)) {
                echo "<p> {$error} </p>\n";
            }
            
            ?>
            
            
                <form action = "" method="post">
                    <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" value="">
                    </div>
                    <div>
                    <input type="submit" value="Add Category">
                    </div>
            
                </form>
            
		</div> <!--end content-->
		
		</div> <!--end main container class-->
	</div> <!--end main-->	
<div class="container">	
<?php include '../includes/footer.php';?>
</div>
</body>
</html>
