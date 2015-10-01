<table>
	 <tr>
		<th>Tarefa</th>
		<th>Descrição</th>
		<th>Prazo</th>
		<th>Prioridade</th>
		<th>Concluída</th>
		<th>Opções</th>
		<th>Apagar</th>
	 </tr>

</tr>
	<?php foreach ($lista_tarefas as $tarefa) : ?>
<tr>
	<td>	<?php echo $tarefa['nome']; ?></td>
	<td> <?php echo $tarefa['descricao']; ?></td>
	<td><?php echo traduz_data_paraexibir($tarefa['prazo']); ?></td>
	<td><?php echo traduz_prioridade($tarefa['prioridade']); ?></td>
	<td><?php echo traduz_concluida($tarefa['concluida']); ?></td>
	<td><a href="editar.php?id=<?php echo $tarefa['id']; ?> ">Editar</a></td>
	<td><a href="remover.php?id=<?php echo $tarefa['id'];?>"><span class="erro">X</span></a></td>
</tr>
<?php endforeach; ?>
</table>