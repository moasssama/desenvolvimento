<form method="POST">
	<input type="hidden" name="id" value="<?php echo $tarefa['id'] ;?>"/>
	<fieldset>
		<legend>Nova Tarefa	</legend>
			<label>
						
			Tarefa:
            <?php if ($tem_erros && isset($erros_validacao['nome'])) : ?>
                <span  class="erro"><strong><?php echo $erros_validacao['nome']; ?></strong></span>
            <?php endif; ?>
            <input type="text" name="nome" value="<?php echo $tarefa['nome']; ?>" />
			
			</label>
			<label>
				Descrição:(opcional)
				<textarea name="descricao"/><?php echo $tarefa['descricao']; ?> </textarea>
			</label>
			<label>
				Prazo (Opcional):
            Prazo (Opcional):
            <?php if ($tem_erros && isset($erros_validacao['prazo'])) : ?>
                <span class="erro"><?php echo $erros_validacao['prazo']; ?></span>
            <?php endif; ?>
            <input type="text" name="prazo" value="<?php echo traduz_data_paraexibir($tarefa['prazo']); ?>" />
	</fieldset>
	<fieldset>
		<legend>Prioridade</legend>
		<input type="radio" name="prioridade" value="1" checked 
		<?php echo ($tarefa['prioridade'] == 1) ? 'checked' : ''; ?> />
		Baixa
		<input type="radio"  name="prioridade" value="2"
		<?php echo ($tarefa['prioridade'] == 2 )? 'checked' : '';?> />
		Média
		<input type="radio" name="prioridade" value="3"
		<?php echo($tarefa['prioridade'] == 3) ? 'checked' : '';?> />
		Alta
	</fieldset>
	<label>
		Tarefa concluída:
		<input type="checkbox" name="concluida" value="1"<?php echo($tarefa['concluida'] == 1) ? 'checked' : ''; ?> />

		
		
	</label>
	<input type="submit" value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar' ; ?>" class="botao"/>
</form>
