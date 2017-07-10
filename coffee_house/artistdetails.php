<!DOCTYPE html>
<!-- Student Name:   -->
<html lang="en"> 
  <head>
    <title>A Music Web Application</title>
	 <link href="<?php echo base_url(); ?>myfiles/CSS/javajam.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8"/>
    <script type="text/javascript" src="<?php echo base_url(); ?>myfiles/JS/music.js"></script>
  </head>
  
  <body>
  <div id="wrap">
	<div id="background">
		<img src="<?php echo base_url(); ?>myfiles\Images\background.gif" alt="bg" title="background" width=1065px height=15px/>
	</div>
	<div id="one"> 
		<img src="<?php echo base_url(); ?>myfiles\Images\javajamlogo.jpg" alt="logo" />
		<nav>	
			<a href="index_controller"><strong>Home</strong></a> <br/>
			<a href="menu_controller"><strong>Menu</strong></a> <br/>
			<a href="Welcome"><strong>Music</strong></a> <br/>
			<a href="jobs_controller"><strong>Jobs</strong></a> <br/> 
		</nav>
	</div>
	<div id="main">
	
		<header>
		<h1>JavaJam Coffee House</h1>
		</header>
  
    <form>
                    <!--<label>Artist name: <input type="text" id="form-input"/></label>-->
                    <input type='hidden' id ='artist_id' value="<?php echo $artist_name ?>"/>
                </form>
				<div id="output">&nbsp;</div>
                <div id="output1">&nbsp;</div>
                <div id="output2">&nbsp;</div>
    <footer>
			<p>
				Copyright &copy 2016 JavaJam Coffee House <br/>
				<a href="bhavana@shah.com"><i>bhavana@shah.com</i> </a>
			</p>
		</footer>
  </body>
</html>
