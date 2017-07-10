<!DOCTYPE html>
<title> jobs.html </title>
<html>
	<body>
	<link rel="stylesheet" href="<?php echo base_url(); ?>myfiles\CSS\javajam.css"/>
	<meta name="viewport" content="width=device-width" />
	
	
	<div id="wrap">
	
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
		<script type= "text/JavaScript" src="validation.js">
		</script>
		<h1>JavaJam Coffee House</h1>
		
		</header>
		<section>
		<h2>Jobs at JavaJam</h2>
		<p> Want to work at JavaJam? Fill out the form below to start your application. Required fields are marked with an asterisk (*) </p> 		
		<form name="form1" onsubmit="return validation()" method="post">
		<p>*Name:      
		<input type= "text" name= "EnterName"/></p><br/>
		<p>*Email:     
		<input type= "email" name= "EnterEmail"/></p><br/>
		<p>*Experience: 
		<textarea name= "Experience"></textarea></p><br/>
		<input type= "submit" value= "Apply now" />
		</form>
		</section>
		</div>
		<footer>
			<p>
				Copyright &copy 2016 JavaJam Coffee House <br/>
				<a href="bhavana@shah.com"><i>bhavana@shah.com</i> </a>
			</p>
		</footer>
		
	</div>
	</body>
</html>