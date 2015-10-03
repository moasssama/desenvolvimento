<!DOCTYPE HTML>
<html>
 <head>
  <title> Gerenciador de Tarefas </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css" />
 </head>
 <body>
  <div class="form">
	<h1><?php echo $tarefa['nome'];?></h1>
	<p> <a href="tarefas.php">Voltar para lista de tarefas</a></p>
	<p> <strong>Concluída</strong>
	<?php echo traduz_concluida($tarefa['concluida']) ; ?>
	</p> <strong>Descrição</strong>
	<?php echo n12br $tarefa['descricao']; ?>
	<p><strong>Prazo</strong>
	<?php echo traduz_data_paraexibir($tarefa['prazo']); ?>
	</p>
	<p><strong>Prioridade</strong>
	<?php echo traduz_prioridade($tarefa['prioridade']); ?>
	</p>	
	<h2>Anexos</h2>
	<!-- lista de anexos -->
	<!-- formulário para um novo anexo -->
	</div>
    
 
 </body>
</html>