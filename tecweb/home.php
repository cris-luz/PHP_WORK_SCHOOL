<?php
	// recupera a sessao
	session_start();
	
	// verifica se esta autenticado
	if(!ISSET($_SESSION["username"])) {
		header("location:index.php?msg=Acesso negado");
	}
	echo "Olá, "
	echo "<br/> <a href='logout.php'>Sair</a>"

?>
