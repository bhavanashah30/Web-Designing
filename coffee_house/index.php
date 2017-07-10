<!DOCTYPE html>
<title> index.html </title>
<html>
	<body>
	<link rel="stylesheet" href="<?php echo base_url(); ?>myfiles\CSS\javajam.css"/>
	<meta name="viewport" content="width=device-width" />
	
	
	<div id="wrap">
	<div id="background">
		<img src="<?php echo base_url(); ?>myfiles\Images\background.gif" alt="bg" title="background" width=1065px height=15px/>
	</div>
	<div id="one"> 
		<img src="<?php echo base_url(); ?>myfiles\Images\javajamlogo.jpg" alt="logo" width=100px height=100px />
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
		<figure>
		<img src="<?php echo base_url(); ?>myfiles\Images\windingroad.jpg" alt="Winding Road" title="Winding Road" width="850px" />
		</figure>
		</header>
		<section>
		<h2>Follow the Winding Road to JavaJam</h2>
		<p> We're a little out of the way, but take a drive down route 42 to JavaJam today. Indulge in our locally roasted free-trade
		coffee and home-made pastries. You'll feel right at home at JavaJam. </p> 		
		<h3> JavaJam Coffee House Features </h3>
		<ul>
			<li>Speciality Coffee and tea</li>
			<li>Bagels, Muffins, and Organic Snacks</li>
			<li>Music and Poetry Readings</li>
			<li>Open Mic Night</li>
		</ul>

		<p>
			54321 Route 42<br/>
			Ellison Bay, WI 54210 <br/>
			<a href="888-555-5555"><u>888-555-5555</u></a>
		</p>
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