<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<title>Gerenciador de tarefas</title>
</head>
<body>
	<div>
	</div>
	<div id="centro"class="forms">
		<form>
			<fieldset>
				<legend>Nova Tarefa</legend>
						<label for="nome">
							Tarefa:
						</label>
						<input type="text" id="nome"name="nome"/>
						<label for ="descricao">
							Descrição(opcional):
						</label>
							<textarea id="descricao"name="descricao"/></textarea>
						<label for ="prazo">
							Prazo(opcional):
						</label >
							<input type = "text" id="prazo"name="prazo"/>
					<fieldset id="prioridade">
						
						
						<legend>Prioridade:</legend>
						
						<label >Baixa
							<input type="radio" id ="pr_baixa"name="prioridade" value= "baixa" checked />
						</label>
						<label for ="pr_media">Média
							<input type="radio" id="pr_media"name="prioridade" value="media"/>
						</label>
						<label >Alta
							<input type="radio" id="pr_alta"name="prioridade" value ="Alta"/>
						</label>
						
					</fieldset>
					<label>
						Tarefa concluída:
						<input type="checkbox" name="concluida" value="sim" />
					</label>
					<input class="botao"type="submit" value="cadastrar"/>
			</fieldset>
		</form>
		</div>
	<div id="outra" class="forms">
		<fieldset>
			<legend>Tarefas</legend>
			<table>
				 <!-- <caption>Tarefas</caption> -->
		<!-- 		<th> -->
				<tr>
					<th>nome</th>
					<th>descrição</th>
					<th>prazo</th>
					<th>prioridade</th>
					<th>concluida</th>
				</tr>
				<!-- </th> -->
				<?php	foreach ($lista_tarefas as $tarefas) :?>
				<tr>
					 <td> <?php	echo $tarefas['nome'];	?></td>
					 <td> <?php	echo $tarefas['descricao'];?></td>
					 <td> <?php	echo $tarefas['prazo'];	?></td>
					 <td><?php	echo $tarefas['prioridade'];?></td>
					 <td><?php	echo $tarefas['concluida'];?></td>
				 </tr>
				<?php endforeach?>
			</table>
		</fieldset>
	</div><!---->
</body>
</html>