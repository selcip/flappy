<html>
	<head><meta charset="utf-8">
		<title>FLAPPY RONALDO</title>
		<?php
			session_start();	
				if(!isset ($_SESSION['dev']) == true) {
					unset($_SESSION['dev']); 
					header('location:index.php'); 
				}		
				?>
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
			<link href='//fonts.googleapis.com/css?family=RobotoDraft:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en' rel='stylesheet' type='text/css'>
			
			<style>
			#screen canvas{
				margin: 0 auto;
				height: 100%;
			}
			body {
			background: black;
			}
			</style>
	</head>
	<body>
		<center><p class='teste'><?php
				echo "DEVELOPER";
		?></p></center>
		<div id="loading">carregando</div>
		<div id="screen"></div>
		<div id="github"></div>
		

		<script src="dev.min.js?v=02131824"></script>
	</body>
</html>