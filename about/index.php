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
        
        <div class="row">
        <div class="col-xs-7 col-sm-5 col-md-4 col-lg-3">
        
        <a href="http://www.tristanbowles.co.uk/about/trispic.jpg"><img align="right" id="mypic" alt="Tristan Bowles" longdesc="Tris in Berlin" src="trispic.jpg" width="450px" height="450px"  class="img-thumbnail"/></a>
        </div>
        <br>
        

		<p>I started coding about 6 years ago after getting a taste for it when doing my MSc at the University of York. Since then I have dipped in and out of a number of languages, from objective C (I had a brief stint making iPhone applications), web development langauages such as html, css, php and jquery, up to more recently where I have been developing using python / Django on a Raspberry Pi. I have a passion for writing code, developing ideas and working with new technologies.</p>
            
            
        <p>In my day job, I have led a number of process and service improvement projects looking to enchance processes, making them more efficent and reducing business costs. I have delivered a number of projects, such as an email and attachment saving macro, that has significantly reduced the time it takes to save individual emails to specified work folders.</p>
        
        <p>I try to balance my development hobby with working full time, which can be challenging at times, but I dream of one day being able to get some commerical development experience and being able to code full time, essentially earning a living doing something I really enjoy.</p>
        
        <p>I am a hard-worker and able to grasp new things really fast, which makes me very adaptable to changing working enviroments. Most of what I have learned has been self-taught, relying on manuals, online tutorials and forums, and my own analytical brain to overcome obstacles and problems encountered during the development process.</p>
        
        <p>In my spare time (when I'm not coding) I enjoy watch films and comedy, PC gaming, socialising with friends either in the pub or by playing a board game, travelling to different cities around the world, playing guitar and listening to music or reading novels.</p>
        
		<p>Please <a href="http://www.tristanbowles.co.uk/contact/">get in touch</a> if you'd like to ask a question or if you'd like to talk about collborating on future projects.</p>

	</div> <!--end content-->
 </div>
	
	</div> <!--end main container class-->
</div> <!--end main-->	

<div class="container">
<?php include '../includes/footer.php';?>
</div>
<script src="../js/blog.js"></script>
</body>
</html>
