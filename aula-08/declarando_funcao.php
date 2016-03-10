<?php

// Arquivo A
namespace {

    function minha_funcao()
    {
       echo 'minha funcao original';
    }
    
    function fn2()
    {
        echo 'teste';
    }

}

// Arquivo B
namespace meuApp {

    function minha_funcao()
    {
        echo 'minha funcao modificada';
    }
    
    if (! function_exists('minha_funcao'))
    {
        function minha_funcao()
        {
            echo 'minha funcao modificada';
        }
    }
    
    function fn2()
    {
        echo 'teste2';
    }

}

// Aquivo index.php
namespace meuApp {

    \meuApp\minha_funcao();
    
    echo '<br>';
    
    \meuApp\fn2();

}