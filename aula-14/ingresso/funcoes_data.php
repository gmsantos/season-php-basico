<?php 

function formatar_data($data, $formato = 'd/m/Y'){
    return date($formato, strtotime($data));
}

/**
 * Valida uma data no formato DD/MM/AAAA
 */
function validar_data($data){
    $data_parts = explode('/', $data);
    
    return checkdate($data_parts[1], $data_parts[0], $data_parts[2]); 
}

/**
 * Valida uma data no formato DD/MM/AAAA para ser inserina no banco
 */
function preparar_data($data){
    $data_parts = explode('/', $data);
   
    return sprintf(
        '%s-%s-%s', 
        $data_parts[2], 
        $data_parts[1], 
        $data_parts[0]
    ) ;   
}
