<?php
session_start();

$login = $_POST['login'];
$senha = $_POST['senha'];

$con = mysql_connect("localhost", "root", "") or die ("CONEXAO FALHOU");
$select = mysql_select_db("try") or die ("SEM ACESSO AO BD");

$result = mysql_query("SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA` = '$senha'");

if(mysql_num_rows ($result) > 0)
	{
		$_SESSION['login'] = $login;
		header('location:site.php');
	}else{
		unset ($_SESSION['login']);
		unset ($_SESSION['senha']);
		header('location:index.php');
	}
?>