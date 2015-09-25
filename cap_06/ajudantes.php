<?php
function traduz_prioridade($codigo){
	$prioridade ='';
	switch ($codigo){
		case 1:
			$prioridade = "baixa";
			break;
		case 2:
			$prioridade ="media";
			break;
		case 3:
			$prioridade ="alta";
			break;
	}
	return $prioridade;
}

function traduz_data_para_banco($data){
	if ($data==""){
	return "";
	}
	$dados = explode("/",$data);
	$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
	return $data_mysql;
}
function traduz_data_paraexibir($data){
	if ($data == "" OR $data == "0000-00-00"){
	
		return "";
	}
$dados = explode("-",$data);
$dataexibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
return $dataexibir;
}

function tradus_concluida($concluida){
	if($concluida == 1){
		return 'Sim';
		}
		return  'Não';
		
}


?>