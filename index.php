<?php 

session_start();

$thisPage="Home"; 

?>

<!DOCTYPE html>
<html>

<!-- ?php include '/includes/head.php';?> -->

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Tristan Bowles is a Web Developer from York who is building his first website from scratch."/>
	<meta name="keywords" content="Tristan Bowles, web development, York, Tristan, Bowles, design, north yorkshire, leeds, portfolio, about, self, profile, website, web"/>
	<meta name="author" content="Tristan Bowles"/>
    <!-- Bootstrap -->
    <title>Tristan Bowles</title>
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet" type="text/css" media="screen">	
    <script src="./js/jquery-2.1.4.min.js"></script> 
    <script src="./bootstrap/js/bootstrap.js"></script> 
</head>

<body>
<?php include_once("./includes/analyticstracking.php") ?>
<div id="main">
	<div class="container">
    <?php include 'includes/header.php';?>
<!--menu bar--> 

    <?php include 'includes/menu.php';?>
		
		<div id="content">
            <h2>Welcome</h2>
			<p>A very warm welcome to my site!</p>
			<p>This site is currently very much in development and forms part of my on-going efforts to become a fully fledged web developer. It's completley organic; I'm building it completely from scratch. </p>
			<p>To learn more about me, please visit the <a href="http://www.tristanbowles.co.uk/about/">about</a> page or to view my recommended links head straight to the <a href="http://www.tristanbowles.co.uk/links/">links</a> page. Finally, get in touch via the <a href="http://www.tristanbowles.co.uk/contact/">contact</a> page...I'd love to hear from you if you have any thoughts, suggestions or feedback or want to get in touch regarding working on a project together.</p>	
			<p>Keep checking back for future content.</p>
			<h2>Temporary blog</h2>
			<p>Until I get a blog set up, I'll be posting updates on this page.</p>
            <div class="borderline">10/10/16 - First update in ages!</div>
            <p>So I've not made any updates in a while...what have I been up too?</p>
            <p>Well a few months ago I got my hands on a Raspberry Pi and have spent the past few months learning Django and Python. So much so, I rebuilt my site in Django, along with a fully working blog! I'm hoping to make some improvements and launch it online some time in the future.</p>
            <p>In the mean time, I'm back to learning php, as I really keen to secure my first junior developer role and I want to show that I'm capable of building a fully working site in php. I'm hoping to apply the principles I learned building my Django blog when putting together my php one.</p>
			<div class="borderline">24/12/15 - Merry Chritsmas and time to boot(strap) the old skin!</div>
			<p>I've been working offline for the past few days to deliver a major reskin to the site; and some tweaking behind the scenes!  I have restructured the site using <a href="http://getbootstrap.com/">BootStrap</a> an incredibly useful open source framework for developing fully responsive websites. Yes, my site should now be fully responsive, so if you resize the browser to a smaller width, the elements contained within will respond to the change in size.  This means if you're accessing the site from a tablet or smart phone, the content may look different as if you were acessing it on a Desktop.</p>
			<p>I have also spent sometime in PhotoShop reskinning the site.  To make it look a bit nicer.  For anyone wondering what the site used to look like before this update, here's a screenshot:</p>
           <div class="col-xs-3 col-sm-4 col-md-4 col-lg-5"> </div>
            <a href="http://www.tristanbowles.co.uk/includes/images/screen%2024.12.15.png">
              <img src="../includes/images/screen 24.12.15.png" alt="Old Site skin" width="200" height="100" class="img-thumbnail"/>
            </a>
			<p>Hopefully you will agree the new skin is a vast improvement!</p>
			<p>Anyway, that's it for this update. Hope you all have a good Christmas!</p>
			<!--<div class="borderline">08/12/15 - Progress bars</div>
			<p>Made some 'progress' with progress bars.  Following this <a href="https://youtu.be/3IYmTnmDj80?list=PLfdtiltiRHWH69ba6OSNydn0XhPXmJrbB">css progress bar</a> tutorial from the <a href="https://www.youtube.com/user/phpacademy/featured">Code Course channel</a> on YouTube, I then used some jQuery to parse the css property "width" in order to create an if / else statement that responds to the click of the "Start Progress" button. The results are below:</p>-->
			<?php // include 'includes/progress.php';?>
			<!--<p>&nbsp</p>
			<input type="button" class="button" id="progressButton" value="Start Progress"/>
			<p>&nbsp</p>
			<p>Pretty neat!</p>-->
			<div class="borderline">07/12/15 - Sidebar tweaking</div>
			<p>Have worked a lot on tweaking and getting used to CSS elements and how to position things around the page.</p>
			<p>Finally got my Sidebar widget working right so that it scales with the page when you zoom in and out of the browser. </p>
			<p>Made several tweaks to the layout. Looks a lot less "beginner", but need to get some professional designs made soon to make it look super nice!</p>
			<div class="borderline">03/12/15 - PHP and site management</div>
			<p>Been learning more about php. Have broken up my html into various php sections, to make them easier to reference the code across multiple pages on my site and to cut down on the amount of html listed on one page.</p>
			<p>Have restructured the back end of my site, so that it's organised and makes more sense.</p>
			<div class="borderline">01/12/15 - More pages added!</div>
			<p>First day of opening my Star Wars lego advent calender and only 17 days until the Force Awakens is released in the UK! Website wise, I've begun fleshing out the 'About', 'Links' and 'Contact' pages with content. </p>
			<p>Menu links now work. So many things I want to fix, but don't have time as I have a day job to go to as well. </p>
			<p>Will just chip away a bit at a time!</p>
			<div class="borderline">30/11/15 - The Beginning!</div>
			<p>This is my first page.  Currently getting to grips with HTML, CSS and jQuery.</p>	
			<h3>jQuery at work...</h3>
			<p>Here's some basic jQuery...</p>
		<button class="button" id="hide">Hide</button>
		<button class="button" id="show">Show</button>
			<p>More to come soon!</p>
		<div id="borderline"></div>
		
		</div> <!--end content-->


			<div style="clear:both"></div>
	</div> <!--end main container class-->
	</div> <!--end main-->
	
<?php include './includes/footer.php';?>

<script src="../js/blog.js"></script>
<script src="../js/active.js"></script>
</body>
</html>
