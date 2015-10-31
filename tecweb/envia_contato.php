<?php

	 $nome = $_POST["nome_completo"];
	 $email = $_POST["email"];
	 $telefone = $_POST["telefone"];
	 $assunto = $_POST["assunto"];
	 $mensagem = $_POST["mensagem"];

	$conexao = mysql_connect("localhost", "root", ""); 
	$database = mysql_select_db("tecweb_trabalho");
	$sql = "INSERT INTO contato(id, nome,email,assunto,telefone,mensagem) 
	values (null,'$nome','$email','$assunto','$telefone','$mensagem')"; 
	
	$resultado = mysql_query($sql) or die(mysql_error());
	mysql_free_result($resultado);
	mysql_close($conexao);
	
		if(ISSET($_POST["contato"])){
		 $contato  = $_POST["contato"];
		  
		  foreach( $contato  as $pos => $valor) {
				$mensagem=$mensagem.$valor;
			if ($valor== "telefone"){
				$mensagem=$mensagem." (".$telefone.")"." ou ";
			}
			if ($valor== "email"){
				$mensagem=$mensagem." (".$email.")   ";
			}
		 } 
	  } else {
		 echo "Nenhum metodo de retorno foi selecionado";
			 }
	$resultado = substr($mensagem,0,-3);
	
	echo "Usuário cadastrado com Sucesso!<br/>"
	."<br/>Nome:".$nome."<br/>E-mail: ".$email."<br/>Telefone: ".$telefone."<br/>Assunto: ".$assunto."<br/>Mensagem: ".$mensagem; 

	echo "<br/> Obrigada!!!<br/>"
	."<br/>Nome:".$nome."<br/> retornaremos o contato via <br/> ".$resultado."<br/>  "; 
	echo "<br/> <a href='index.php'>Clique Aqui para Retornar à Página Inicial</a>"
?>

