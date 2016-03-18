<?php
$bdServidor = '127.0.0.1';
$bdUsuario = 'eu';
$bdSenha = '';
$bdBanco = 'tarefas';
$conexao = mysql_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);
if (mysqli_connect_errno($conexao)) {
echo "Problemas para conectar no banco. Verifique os dados!";
die();
}

