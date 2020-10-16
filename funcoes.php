<?php   



function carrega_pagina(){
    #Para indicar qual página será carregada, dependendo de se foi setada ou não. Se não foi, a página carregada será a home.
   
    
    
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';

    


    if(file_exists('views/page_'.$pagina.'.php')):
        require_once('views/page_'.$pagina.'.php');
        
    else:
        require_once('views/page_home.php');
    endif;
}


function gera_titulos(){
    (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';
    
    
    switch($pagina):
        case 'home':
            $titulo = 'AEE - Ajuda Aê (estágiarios)';
            break;
        case 'sobre':
            $titulo = 'Sobre - AEE';
            break;
        case 'prog1':
            $titulo = 'ShowNumberDuplicate - AEE';
            break;
        case 'prog2':
            $titulo = 'ShowNotRepeat - AEE';
            break;
        case 'prog3':
            $titulo = 'ShowMeRepeat - AEE';
            break;
        case 'prog4':
            $titulo = 'CoolRename - AEE';
            break;
       

        default:
            $titulo = 'AEE - Ajuda Aê (estágiarios)';
            break;
    endswitch;
    return $titulo; 
}



?>

