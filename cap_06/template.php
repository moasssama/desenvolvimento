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
						
						Tarefa:
						<input type="text" name="nome"/>
						<label>
							Descrição(opcional):
							<textarea name="descricao"></textarea>
						</label>
						<label>
						Prazo(opcional):
						<input type = "text" name="prazo"/>
						</label>
					<fieldset id="prioridade">
						<legend>Prioridade:</legend>
						<input type="radio" name="prioridade" value= "baixa" checked />
						Baixa
						<input type="radio" name="prioridade" value="media"/>
						Média
						<input type="radio" name="prioridade" value ="Alta"/>
						Alta
						</label>
					</fieldset>
					<label>
						Tarefa concluída:
						<input type="checkbox" name="concluida" value="sim" />
					</label>
					<input type="submit" value="cadastrar"/>
			</fieldset>
		</form>
		</div>
	<div id="outra" class="forms">
		<fieldset>
			<legend>Tarefas</legend>
			<table>
				<caption>Tarefas</caption>
				<tr>
					<td colspan="5">Tarefas</td>
				</tr>
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