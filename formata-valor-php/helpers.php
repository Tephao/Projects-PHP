<?php

/**
 * Formata um valor com ponto e virgula
 * 
 * @param float $valor - valor a ser formatado
 * @return string - valor formatado, é string para concatenar com R$ no retorno
 */

function formatarValor(float $valor = null): string     //:string diz que a função tem de retornar uma string
{
    return number_format(($valor ? $valor : 0), 2,',','.');     //Operador ternário com chaves e inserindo valor
}

/**
 * Formata um numero com pontos
 * 
 * @param string $numero - numero a ser formatado
 * @return string - numero formatado
 */
function formatarNumero(string $numero = null): string
{
    return number_format($numero ?: 0, 0,'.','.');             //Operador ternário sem chaves e não inserindo valor
}