<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php session_start(); if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)) { unset($_SESSION['login']); unset($_SESSION['senha']); header('location:index.php'); } $logado = $_SESSION['login']; ?>

		<nowiki>
		<?php
		if (empty($_SESSION['counter']))
			$_SESSION['counter'] = 1;
		else
			$_SESSION['counter']++;
		?>
		
		<?php if($_SESSION['counter'] > 3){
			if (isset($_COOKIE[session_name()])) {
				setcookie(session_name(), '', time()-42000, '/');
			}	
			header("Refresh:0");
			session_destroy();
		}else{
			echo $_SESSION['counter']; }
		?> 
		
		</nowiki>
		
        <title>SISTEMA WEB</title>
    </head>
    <body>
		tentativa
		
		<div id="loading">carregando</div>
		<div id="screen"></div>
		<div id="github"></div>
	<script src="index.min.js?v=02131824"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			if(document.domain === 'hyspace.io'){
				ga('create', 'UA-21699184-3', 'hyspace.io');
				ga('send', 'pageview');
			}
	</script>
    </body>
</html>