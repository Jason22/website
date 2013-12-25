<!DOCTYPE html>

<html>
	<head>

		<title>Portfolio for Jason Truesdale</title>
		<link rel="shortuct icon" type="image/x-icon" href="Images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="Javascript/jquery-2.0.2.min.js"></script>
		<script type="text/javascript" src="Javascript/jquery.flexslider-min.js"></script>
		<script type="text/javascript" src="Javascript/flexslider_work.js"></script>



	</head>

	<body>
		<div class="wrapper">
			<?php include("header.php")
			?>

			<?php 

			$file_handle = fopen("list.txt", r);
			while (!feof($file_handle)) {
				$line = fgets($file_handle);
				$project = explode(",", $line);

				?>

				<div class="projectImageGrid">
					<a href="project_page.php?project=<?php echo "$project[0]";?>" class="projectThumb"><img src="images/works/<?php echo "$project[0]";?>.png" class="projectimg"></a>
				</div>

				<!-- <p>

					<?php echo "$project[0]";?>

				</p>
 -->
				<?php
			}

			fclose($file_handle);

			?>
			
		</div>





	</body>
</html>
