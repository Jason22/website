<!DOCTYPE HTML>
<html>
	<link rel="stylesheet" type="text/css" href="style.css">
	<head>
		<meta charset="urf-8">
		<title>Portfolio for Jason Truesdale</title>
		<link rel="shortuct icon" type="image/x-icon" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="Javascript/jquery-2.0.2.min.js"></script>
		<script type="text/javascript" src="Javascript/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="Javascript/flexslider_about.js"></script>
		<script type="text/javascript" src="Javascript\jquery.flexslider.js"></script>

	</head>

	<body>
		<div class="wrapper">
			<!-- Universal Header -->
			<div>
				<?php
				include("header.php")
				?>
			</div>

			<!-- General Information About Me -->
			<div class="content" id="aboutmeblock">
				<!-- <h1 class="aboutHeader">Architecture | Design | Technology</h1> -->
					
				<div class="subBlock">
					<h1 class="aboutHeader">Architecture | Design | Technology</h1>
					<!-- <h1 class="aboutHeader">Technology</h1> -->
					<!-- <p class="aboutMeP">Welcome, my name is Jason.</p> -->
					<p class="aboutMeP">
						<?php 
						$aboutme = file_get_contents("aboutme.txt");
						echo "$aboutme";
						?>


					</p>	
					  	<?php 
					  		$i = 1;
					  		echo "hello";
					  		while (fgets("images/aboutme/" . $i . ".txt") !==FALSE) {
					  			echo "$i";
					  			echo "World";
					  			$i++;
					  		}
					    ?>
				</div>
				<!-- Flexslide Jquery Plugin -->
				<div class="imageBlock" id="aboutMeImage">
					<div class="flexslider">
					  <ul class="slides">
					    <li>
					      <img src="images\About Me\D20_6219.JPG" />
					    </li>
					    <li>
					      <img src="images\About Me\D20_6840.JPG" />
					    </li>
					    <li>
					      <img src="images\About Me\D20_6879.JPG" />
					    </li>
					    <li>
					      <img src="images\About Me\D20_6914.JPG" />
					    </li>
					  </ul>
					</div>
				</div>
				<div class="subBlock">
					<div class="subHeader">
						<!-- Skills -->
					</div>
					<div class="subBlock">

					</div>
				</div>
			</div>

		</div>
		

	</body>

</html>