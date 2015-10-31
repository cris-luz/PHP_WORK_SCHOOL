<?php
     /*recebdo os dados via post*/
	 $nome = $_POST["nome_completo"];
	 $idade = $_POST["idade"];
	 $sexo = $_POST["ButtonSexo"];
	 $eCivil = $_POST["EstadoCivil"];
	 $cpf = $_POST["cpf"];
	 $data = $_POST["data"];
	 
	$conexao = mysql_connect("localhost", "root", "");
	$database = mysql_select_db("tecweb_trabalho",$conexao)or die("erro na base de dados: ".mysql_error());
	

	$sql = "INSERT INTO usuario( nome,idade,sexo,ecivil,cpf,data) 
	values ('$nome',$idade,'$sexo','$eCivil',$cpf,$data)"; 
	
	$resultado = mysql_query($sql) or die(mysql_error());
	
	mysql_close($conexao);
	
	echo 'Usuário cadastrado com Sucesso!<br/>'
	.$nome.'<br/>Idade: '.$idade.'<br/>Sexo: '.$sexo.'<br/>Estado Civil: '.
	$eCivil.'<br/>CPF: '.$cpf.'<br/>Nascido em: '.$data.'<br/>'; 
     
	echo '<a href="index.php">Clique Aqui para Retornar à Página Inicial</a>';

?>


