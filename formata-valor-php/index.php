<?php 

//declare(strict_types = 1);          //declara que as variáveis tem de receber apenas seu próprio tipo
//Foi comentado o strict_types para que recebendo um int ele converta em string automáticamente
require_once 'configuracao.php';    //once é para chamar apenas uma vez
include_once 'helpers.php';

echo 'R$ '.formatarValor(5000);

echo '<hr>';

echo formatarNumero(100000);