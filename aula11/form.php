<?php

//conexão com o banco de dados
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'clientes';

//cria uma conexão com o banco de dados
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

//verifica se a conexão foi bem-sucedida
if ($conexao) {
	// recupera os dados do formulario
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$data_nascimento = $_POST['data_nascimento'];
	$endereco = $_POST['endereco'];

	// insere os dados na tabela do banco
	$sql = "INSERT INTO cliente (nome, email, dataNasc, endereco) VALUES ('$nome', '$email', '$data_nascimento', '$endereco')";
	mysqli_query($conexao, $sql);

	// verifica se a inserção foi bem-sucedida
	if (mysqli_affected_rows($conexao) > 0) {

		// redireciona para uma página de sucesso
		header('Location: sucesso.php');
	}else{
		//redireciona para uma página de erro
		header('Location: erro.php');
	}
	}else{
		//redireciona para uma página de erro
		header('Location: erro.php');
	
}