<?php

//inicio da sessão
session_start();

//pegando a variavel de RA
$ra = $_POST['ra'];
//conexão com o bd
$con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o banco de dados");
$select = mysql_select_db("try") or die ("Sem acesso ao banco de dados, se vira aí");

//a $result vai pegar td que tem no bd e ver se ele acha alguma coisa
$result = mysql_query("SELECT * from `alunos` WHERE `ra` = '$ra'");

//teste pra ver se achou hehe
if (mysql_num_rows($result)>0){
	$_SESSION['ra'] = $ra;
	while($row = mysql_fetch_array($result, MYSQL_NUM)){
		$_SESSION['nome'] = $row[2];
	}
	header('location:page.php');
}else{
	unset($_SESSION['ra']);
	header('location:failed.php');
}

?>