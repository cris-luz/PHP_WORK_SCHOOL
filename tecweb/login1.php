<?php 
 	session_start();
	 $login = $_POST['login'];
	 $senha = $_POST['senha'];
 	 $con = mysql_connect("localhost", "root", "") or die ("Sem conexão com o servidor");
 	 $select = mysql_select_db("tecweb") or die("Sem acesso ao DB, Entre em contato com o Administrador, contato@cristec.com.br");
         $result = mysql_query("SELECT * FROM `USUARIO` WHERE `NOME` = '$login' AND `SENHA`= '$senha'");

	 if(mysql_num_rows ($result) > 0 ) {
		 $_SESSION['login'] = $login; 
		 $_SESSION['senha'] = $senha;
		 header('location:site.php'); 
		 } 
		 else{ unset ($_SESSION['login']);
		 unset ($_SESSION['senha']);
		 header('location:index.php'); } 
?>

