<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<title>Gerenciador de tarefas</title>
</head>
<body>
	
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
							<input type = "date" id="prazo"name="prazo"/>
					<fieldset id="prioridade">
						
						
						<legend>Prioridade:</legend>
						
						<label >Baixa
							<input type="radio" id ="pr_baixa"name="prioridade" value= "1" checked />
						</label>
						<label for ="pr_media">Média
							<input type="radio" id="pr_media"name="prioridade" value="2"/>
						</label>
						<label >Alta
							<input type="radio" id="pr_alta"name="prioridade" value ="3"/>
						</label>
						
					</fieldset>
					<label>
						Tarefa concluída:
						<input type="checkbox" name="concluida" value="1" />
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
					 <td> <?php	echo traduz_data_paraexibir($tarefas['prazo']);?></td>
					 <td><?php		echo traduz_prioridade ($tarefas['prioridade']);?></td>
					 <td><?php		echo tradus_concluida($tarefas['concluida']);?></td>
				 </tr>
				<?php endforeach?>
			</table>
		</fieldset>
	</div><!---->
</body>
</html>