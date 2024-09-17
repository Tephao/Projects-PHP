<?php

/**
 * Conta o tempo decorrido de uma data
 * 
 * @param string $data - recebe a data da postagem
 * @return string  - com a diferença formatada em seg,min,hor,dia,sem,mes ou anos
 */

function contarTempo(string $data):string
{
    $agora = strtotime(date('Y/m/d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;
    
    $segundos = $diferenca;
    $minutos = round($diferenca/60);
    $horas = round($diferenca/3600);
    $dias = round($diferenca/86400);
    $semanas = round($diferenca/604800);
    $meses = round($diferenca/2419200);
    $anos = round($diferenca/29030400);
    
    if($segundos<=59)
    {
        return'agora';
    }
    
    else if($minutos<=59)
    {
        return $minutos == 1 ? 'há 1 minuto' :
                'há '.$minutos.' minutos';
    }
    
    else if($horas<=23)
    {
        return $horas == 1 ? 'há 1 hora' :
                'há '.$horas.' horas';
    }
    
    else if($dias<=6)
    {
        return $dias == 1 ? 'há 1 dia' :
                'há '.$dias.' dias';
    }
    
    else if($semanas<=3)
    {
        return $semanas == 1 ? 'há 1 semana' :
                'há '.$semanas.' semanas';
    }
    
    else if($meses<=11)
    {
        return $meses == 1 ? 'há 1 mês' :
                'há '.$meses.' meses';
    }
    
    else
    {
        return $anos == 1 ? 'há 1 ano' :
                'há '.$anos.' anos';
    }
}