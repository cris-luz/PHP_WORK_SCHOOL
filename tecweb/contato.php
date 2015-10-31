
<?php

	include "funcoes.php"; 
	 
	echo iniciaPagina();
	echo criaCabecalho();
	echo criaMenu();
	?>
	
	<div class='regiao3'><h2 align='center'>Formulário de Contato</h2>
	<?php
	// Inicia a sessão
	session_start();
	 
	if ( ! isset( $_SESSION['login'] ) && ! isset( $_SESSION['senha'] ) ) {
		exit('Você tem que está logado, para ter acesso a esse dados');
	}
	 
	if ( empty( $_SESSION['login'] ) && empty( $_SESSION['senha'] ) ) {
		exit('Sessão terminada, faça login novamente');
	}
	 
	if ( $_SESSION['nome'] != $logado ) {
		exit('Você não é o usuário correto.');
	}
	 
	 echo 'Olá ' . $_SESSION['login']; 
	?>
	
	<htlml>
	<form action="envia_contato.php" 
	method="POST"
	enctype="multipart/form-data" >
	Nome Completo:&nbsp<input type="text" 
	name="nome_completo" maxlength="30" 
	size="30"/>
	<br/>	
		
	Email:&nbsp<input type="text" 
	name="email" maxlength="30" 
	size="30"/>
	<br/>					
	Telefone:&nbsp<input type="text" 
	name="telefone" maxlength="15" 
	size="30"/>
	<br/>	
	Assunto:&nbsp
	<br/>	
	<select name="assunto" multiple size="4">
			<option value='Reclamacoes'>Reclamações</option>
			<option value='Dúvidas'>Dúvidas</option>
			<option value='Sugestoes'>Sugestões</option>
			<option value='Outros'>Outros</option>
		</select>
	<br/>			
	Preferência para contato:&nbsp
	<input type="checkbox" name="contato[]" 
		value="telefone"/> Telefone
		<input type="checkbox" name="contato[]" 
		value="email"/> E-mail
	<br/>	
	Mensagem:
	<br/>
	<textarea name="mensagem" cols="60" rows="5">
	</textarea>	
	<br/>
	
	<input type="image" value="Enviar" src="botao.png"/>
		<a href='contatos_enviados.php'>contatos enviados</a>
				
	</div>
	</html>";
	
	<?php
	echo finalizaPagina();
?>
