<?php

/**
 * Resume um texto
 * 
 * @param string $texto - texto para resumir
 * @param int $limite - quantidade de caracteres
 * @param string $continue (opcional) - o que deve ser exibido ao final do resumo 
 * @return string texto resumido
 */

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textolimpo = trim(strip_tags($texto));         //strip_tags para remover tags de html

    if(mb_strlen($textolimpo) <= $limite)
    {
        return $textolimpo;
    }

    $resumirTexto = mb_substr($textolimpo, 0, mb_strrpos(mb_substr($textolimpo,0, $limite), ''));
    
    return $resumirTexto.$continue;
}
