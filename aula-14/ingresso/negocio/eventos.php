<?php

function eventos_listar()
{
    return repo_eventos_all();
}

function eventos_adicionar($input)
{
    if (! isset($input['nome'])){
        return false;
    }
    
    if (! isset($input['data']) && validar_data($input['data'])){
        return false;
    }
    
    return repo_eventos_add(
        $input['nome'],
        preparar_data($input['data'])
    );    
}

function eventos_detalhe($id){
    if (! is_numeric($id)){
        return false;
    }
   
    return repo_eventos_get($id);
}