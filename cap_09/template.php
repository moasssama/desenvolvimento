<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" href="css/style.css">
	<meta charset="utf-8">
	<title>Gerenciador de tarefas</title>
</head>
<body>
	
	<div id="centro"class="forms">
		<?php include ('formulario.php');?>
		
		</div>
	<div id="outra" class="forms">
		<?php if ($exibir_tabela) : ?>
		<?php include ('tabela.php');?>
		<?php endif;?>
	</div><!---->
	<div> </div>	
</body>
</html>