<!DOCTYPE HTML>
<html>
 <head>
  <title> Gerenciador de Tarefas </title>
  <link rel="shortcut icon" href="css/index.ico">
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css"/>

 </head>
 <body>
	 <div>
	  <div class="forms">
		<h1><?php echo $tarefa['nome'];?></h1>
		<p> <a href="tarefas.php">Voltar para lista de tarefas</a></p>
		<p> <strong>Concluída</strong>
		<?php echo traduz_concluida($tarefa['concluida']); ?>
		</p> <strong>Descrição</strong>
		<?php echo nl2br ($tarefa['descricao']); ?>
		<p><strong>Prazo</strong>
		<?php echo traduz_data_paraexibir($tarefa['prazo']); ?>
		</p>
		<p><strong>Prioridade</strong>
		<?php echo traduz_prioridade($tarefa['prioridade']); ?>
		</p>	
		<h2>Anexos</h2>
		<!-- lista de anexos -->
		<?php if (count($anexos) > 0) :?>
			<table>
				<tr>
					<th>Arquivo</th>
					<th>Opções</th>
				</tr>
				<?php foreach ($anexos as $anexo): ?>
					<tr>
						<td><?php echo $anexo['nome']?></td>
						!<td><a href="anexos/<?php echo $anexo['arquivo']?>">Download</a></td>*
					</tr>
				<?php endforeach;?>
			</table>
		<?php else :?>
			<p>Não há anexos para esta tarefa.</p>
			<?php endif?>

		<!-- formulário para um novo anexo -->
		
		<form action="" method="post" enctype="multipart/form-data">
			<fieldset> 
				<legend>Novo Anexo</legend>
					<input type="hidden" name="tarefa_id" value="<?php echo $tarefa['id']; ?>" />	
					
					<label> <?php if ($tem_erros && isset($erros_validacao['anexo'])):?>
						<span class="erro">
							<?php echo $erros_validacao['anexo']; ?>
						</span>
						<?php endif; ?>
						<input type="file" name="anexo" />
					</label>
					<input class="botao"type="submit" value="enviar"/>
			</fieldset>
		</form>
	</div>
 
 </body>
</html>
