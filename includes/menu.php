

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://www.tristanbowles.co.uk"><img src="../includes/images/Drawing.png"  alt="Tris logo" height="20" width="20"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($thisPage=="Home") echo " class=\"active\""; ?>><a href="http://www.tristanbowles.co.uk">Home<span class="sr-only">(current)</span></a></li>
        <li <?php if($thisPage=="About") echo " class=\"active\""; ?>><a href="http://www.tristanbowles.co.uk/about/index.php">About</a></li>
        <li <?php if($thisPage=="Contact") echo " class=\"active\""; ?>><a href="http://www.tristanbowles.co.uk/contact/index.php">Contact</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Links <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li <?php if($thisPage=="LinkTools") echo " class=\"active\""; ?> ><a href="http://www.tristanbowles.co.uk/links/linktools.php">Web Development Tools</a></li>
            <li <?php if($thisPage=="LinkTutorials") echo " class=\"active\""; ?> ><a href="http://www.tristanbowles.co.uk/links/linktutorials.php">Coding Tutorials</a></li>
            <li role="separator" class="divider"></li>
            <li <?php if($thisPage=="OtherLinks") echo " class=\"active\""; ?> ><a href="http://www.tristanbowles.co.uk/links/otherlinks.php">Other Links</a></li>
          </ul>
        </li>
      </ul>
    <ul class="nav navbar-nav navbar-right">
        <?php
        if ($_SESSION['username'])
        {
        
         echo '<li><a href="http://www.tristanbowles.co.uk/logout/index.php">Logout<span class="sr-only">(current)</span></a></li>';  
        }
        else
        {
        echo '<li><a href="http://www.tristanbowles.co.uk/login/index.php">Login<span class="sr-only">(current)</span></a></li>';
        echo '<li><a href="http://www.tristanbowles.co.uk/register/index.php">Register<span class="sr-only">(current)</span></a></li>';
        }
        ?>
        
       <!-- <li <?php if($thisPage=="Login") echo " class=\"active\""; ?>><a href='../login/index.php'>Login<span class="sr-only">(current)</span></a></li>  -->
    </ul>
        
      <!--<ul class="nav navbar-nav navbar-right">
    <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

      </ul>-->
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>