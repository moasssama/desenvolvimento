<?php session_start()?>
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
				<label>
					Tarefa:
					<input type="text" name="nome"/>
				</label>
				<input type="submit" value="cadastrar"/>
		</fieldset>
	</form>
	<?php
		if(isset($_GET['nome'])){
			$_SESSION['lista_tarefas'][] = $_GET['nome'];
		} 
		$lista_tarefas  = array();
		
		if(isset($_SESSION['lista_tarefas'])){
			$lista_tarefas = $_SESSION['lista_tarefas'];
		}
	?>
	</div>
	<div id="outra" class="forms">
	<fieldset>
		<legend>Tarefas</legend>
		<table>
			<tr>
				<th>Tarefas</th>
			</tr>
			<?php
				foreach ($lista_tarefas as $tarefas) :
			?>
			<tr>
				 <td> <?php	echo $tarefas;	?></td>
			</tr>
			<?php endforeach?>
		</table>
	</fieldset>
	</div><!---->
<!---->
</body>
</html>