<?php
$bdServidor = 'mysql16.000webhost.com';
$bdUsuario = 'a8033372_mo';
$bdSenha = '131415mo';
$bdBanco = 'a8033372_mo';
$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
echo "Problemas para conectar no banco. Verifique os dados!";
die();
}

function buscar_tarefas($conexao){
	$sqlBusca = 'SELECT * FROM 	tarefas';
	$resultado = mysqli_query($conexao, $sqlBusca);
	
	$tarefas = array();
	
	while ($tarefa = mysqli_fetch_assoc ($resultado)){
		$tarefas[] = $tarefa;
	}
	
	return $tarefas;
}