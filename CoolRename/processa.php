<?php 

/*
    Renomear arquivos php -> pdf OK 
    CoolRename
    by: Queila Abreu (https://github.com/queilahabreu)
*/

include 'clearword.php';

echo "Feito!";
echo "<br> <br> <br>";

/* Mostrar caminho
#echo getcwd()."\n";
*/

#Informar pasta que se encontra os arquivos
chdir('arquivos');


##Obs: se for outra extensão é só trocar

foreach (glob("*.pdf") as $arquivo) {
    
    
    $nome = clearId(utf8_encode($arquivo));
    $nome = str_replace("pdf", "", $nome);
    
    rename($arquivo, $nome.'.pdf');

}

?>
