<?php

function saudacao(): string
{
    $hora = date('H');
    $saudacao = 'Hora inválida';


    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'Boa madrugada';
    } elseif ($hora >= 6 && $hora <= 12) {
        $saudacao = 'Bom dia';
    } elseif ($hora >= 13 && $hora <= 18) {
        $saudacao = 'Bom tarde';
    } else {
        $saudacao = 'Boa noite';
    }

    return $saudacao;
}

function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{
    $textolimpo = trim($texto);

    if(mb_strlen($textolimpo) <= $limite)
    {
        return $textolimpo;
    }

    $resumirTexto = mb_substr($textolimpo, 0, mb_strrpos(mb_substr($textolimpo,0, $limite), ''));
    
    return $resumirTexto.$continue;
}
