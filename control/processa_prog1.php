<?php session_start();

##Programa que informa o número de duplicadas (apenas duplicadas)
## ShowNumberDuplicate

//Receber os dados do formulário
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];


//ler todo o arquivo para um array
$dados = file($arquivo_tmp);



$guardar_linhas = [];
//armazenar a quantidade de linhas
$i= 0;

foreach($dados as $linha){
    $guardar_linhas[$i] = $linha; 
    $i++; 
}

/*Confirmação de que as linhas estão sendo guardadas
for($x=0; $x < $i; $x++){
    echo $guardar_linhas[$x]; 
    echo "<br>"; 

}*/


$duplicadas = 0;


for($x=0; $x < $i; $x++){
      
    for($y = 0; $y < $i; $y++){
        if($guardar_linhas[$x] == $guardar_linhas[$y] && $x != $y){
            $duplicadas++;
        }
  
    }

}

if($duplicadas <= 2){
	$total_duplicadas = $duplicadas;	
}
else{
	
	$total_duplicadas = $duplicadas/2; 

}
/*var_dump($total_duplicadas);
die();*/
$_SESSION['total'] = $total_duplicadas;
$_SESSION['rodando'] = 1;


header("location: ../index.php?p=prog1");

?>