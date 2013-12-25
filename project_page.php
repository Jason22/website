<!DOCTYPE html>

<html>
	<head>

		<title>Portfolio for Jason Truesdale</title>
		<link rel="shortuct icon" type="image/x-icon" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="Javascript/jquery-2.0.2.min.js"></script>
		<script type="text/javascript" src="Javascript/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="Javascript/flexslider_work.js"></script>



	</head>

	<body>
		<div class="wrapper">
			<?php include("header.php");
			$project = htmlspecialchars($_GET["project"]);
			?>
			<h1 class="aboutHeader">
				<?php
				$title = fopen("Projects/$project/Title.txt", "r");
				$size = filesize($title);
				echo ($size);
				echo (fread($title, 10));
				?>
			</h1>
			<div class="projectimages">
				<div class="flexslider">
					  <ul class="slides">
				
				<?php
				$file_handle = fopen("Projects/$project/$project.txt", r);
				while (!feof($file_handle)) {
					$line = fgets($file_handle);
					$image = explode(",", $line);

				?>
				 
					    <li  data-thumb="Projects/<?php echo "$project/$image[0]";?>.png">
					      <img src="Projects/<?php echo "$project/$image[0]";?>.png"/>
					    </li>
					    <?php 
		}
		fclose($file_handle);
		?>
					  </ul>

				
			</div> 
			
		</div>
			<?php 
			$about = fopen("Projects/$project/discription.txt", "r");
			echo(fread($about, 100000));
			?>
	</div>





	</body>
</html>
