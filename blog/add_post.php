<?php include_once('resources/init.php');

if ( isset($_POST['title'], $_POST['contents'], $_POST['category'])){
    $title = trim($_POST["title"]);
    $contents = trim($_POST["contents"]);
    
        if( empty($title)){
        $errors[] = "You need to add a tile";
        
        } else if (strlen($title) > 255) {
            $errors[] = "The title cannot be longer than 225 characters!";
        }
    
    
        if( empty($contents)){
        $errors[] = "You need to add some text in contents section";
        }
        
        if (! category_exists('id', $_POST['category'])){
            $errors[] = "Category does not exist";
        }
    
        if ( empty($errors)) {
            
            add_post($title, $contents, $_POST['category']);
            
            $id = mysql_insert_id();
            header("Location: index.php?id={$id}");
            die();
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

            <h2>Add A Post</h2>
            
            <?php
            if (isset($errors) && ! empty($errors)){
                echo '<ul><li>', implode('</li><li>', $errors), '</li></ul>';     
            }
            ?>
       
            <form action="" method="post">
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" value="<?php if (isset($_POST['title'])) echo $_POST['title']; ?>">
                </div>
                <div>
                    <label for="contents">Contents</label>
                    <textarea name="contents" rows="15" cols="50"><?php if (isset($_POST['title'])) echo $_POST['contents']; ?></textarea>
                </div>
                <div>
                    <label for="category">Category</label>
                    <select name="category">
                    <?php 
                        foreach (get_categories() as $category) {
                        ?>
                        <option value="<?php echo $category['id']; ?>"> <?php echo $category['name'];?></option>
                        <?php
                        }
                    ?>
                    </select>    
                </div>
                <div>
                    <input type="submit" value="Add Post">
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