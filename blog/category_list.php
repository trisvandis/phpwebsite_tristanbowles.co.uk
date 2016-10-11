<?php include_once('resources/init.php');
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

            <h2>Category List</h2>
       
            
            <?php
            
            foreach( get_categories() as $category ) {
                
            ?> 
            <p><a href="category.php?id=<?php echo $category['id'];?>"><?php echo $category['name'];?></a> - <a href="delete_category.php?id=<?php echo $category['id']; ?>">Delete</a></p>
            <?php
                
            }  
            ?>
            
		</div> <!--end content-->
		
		</div> <!--end main container class-->
	</div> <!--end main-->	
<div class="container">	
<?php include '../includes/footer.php';?>
</div>
</body>
</html>
