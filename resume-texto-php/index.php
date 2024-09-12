<?php 

declare(strict_types = 1);          //declara que as váriáveis tem de receber apenas seu próprio tipo
require_once 'configuracao.php';    //once é para chamar apenas uma vez
include_once 'helpers.php';

$texto = 'texto para resumir vindo de uma variavel';

$total = strlen(trim($texto));        //retorna o tamanho da string
$resumo = mb_substr($texto,2,15);     //diminui o tamanho da string ,começa em,quant de chars
$ocorrencia = mb_strrpos($texto,'e'); //procura a ultima ocorrencia do caractere expecifico

//echo saudacao();
//echo '<hr>';
echo resumirTexto($texto,10);
