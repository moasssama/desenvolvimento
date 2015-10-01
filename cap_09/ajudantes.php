<?php

function traduz_concluida($concluida){
	if($concluida == 1){
		return 'Sim';
		}
		return  'Não';
		
}
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


function traduz_data_para_banco($data)
{
if ($data == "") {
return "";
}
$dados = explode("/", $data);

if (count($dados) != 3) {
return $data;
}
$data_mysql = "{$dados[2]}-{$dados[1]}-{$dados[0]}";
return $data_mysql;
}



function traduz_data_paraexibir($data){
	if ($data == "" OR $data == "0000-00-00"){
		return "";
	}
$dados = explode("-",$data);
if(count($dados) !=3){
	return $data;
}
$dataexibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";
return $dataexibir;
}





function tem_post(){
	if (count($_POST) > 0){
return true;
}
	return false;
}



function validar_data($data)
{
$padrao = '/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/';
$resultado = preg_match($padrao, $data);
if (! $resultado) {
	return false;
}
$dados = explode ('/', $data);
$dia = $dados[0];
$mes = $dados[1];
$ano = $dados[2];
$resultado = checkdate($mes, $dia, $ano);
return $resultado;
}


?>