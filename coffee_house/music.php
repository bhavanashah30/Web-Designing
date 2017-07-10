<!DOCTYPE html>
<title> music </title>
<html>
	<body>
	<link rel="stylesheet" href="<?php echo base_url(); ?>myfiles\CSS\javajam.css"/>
	<meta name="viewport" content="width=device-width" />
	
	
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
		<figure>
		<img src="<?php echo base_url(); ?>myfiles\Images\guitar.jpg" alt="Guitar" title="Guitar" width="850px" />
		</figure>
		</header>
		<section>
		<h2>Music at JavaJam</h2>
		<p> The first friday night each month at JavaJam is a special night. 
		Join us from 8pm to 11pm for some Music you won't want to miss!</p> 	
		
		<?php 
		 $count_month = 0;
         foreach ($query1->result() as $monthvalue) {
         $montharray[] = $monthvalue->month_distinct_name;
         }
         foreach ($query2->result() as $musdet) {
         $musicianname[] = $musdet->name;
         $musiciangenre[] = $musdet->genre;
         $musicianmonth[] = $musdet->month_name;
                    }
                    
		  while ($count_month < count($montharray)) {
                        echo "<header><h3 class='month'>" . $montharray[$count_month] . "</h3></header>";
                        echo "<ul>";
                        for ($i = 0; $i < count($musicianmonth); $i++) {
                            if ($montharray[$count_month] == $musicianmonth[$i]) {
                                echo "<li><a href = 'Welcome/Artist/" . $musicianname[$i] . "'>" . $musicianname[$i] . "</a></li>";
                                $_SESSION ['artist_name']= $musicianname[$i];
                                echo "<ul>";
                                echo "<li>" . $musiciangenre[$i] . "</li>";
                                echo "</ul>";
                            }
                        }
                        echo "</ul>";
                        $count_month++;
                    }
                    ?>
		
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