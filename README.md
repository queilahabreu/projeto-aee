# Relatório #

    *Projeto*: AAE -> Ajuda Aê (estágiarios)
    *Autora*: Queila Abreu
     
        [![logo do projeto](imagens/logo_final.png)]

1. ## Descrição do Programa ## 

    Site criado para ajudar em tarefas, que geralmente são solicitadas para estagiários, que levariam o dia todo para serem feitas. 

2. ## Operação do Programa ## 

    Conforme solicitado pelo sistema a usuária deve escolher que tipo de tarefa quer que seja feita, sendo que algumas tarefas é necessário fornecer fornecer um arquivo. O arquivo é solicitados através de uma caixa upload e tem que ser em formato texto. 
    As tarefas que irão precisar de um arquivo formato texto são: descobrir a quantidade de palavras/números que estão sendo duplicadas, desejar receber de volta sem palavras/números repetidos e sem valores que contenha "NULL" ou desejar receber de volta apenas as palavras/números que estão sendo repetidas e a quantidade de valores que estão sendo repetidos. 
    E a tarefa que não solicita o arquivo é a que renomeia os arquivos tirando palavras com acentos e espaços. Para a usuária realizar vai ser indicado um link para o github contendo o programa que pode ser baixado.

3. ## Descrição das Tarefas ##  

    1)processa.php 
        Programa que informa o número de duplicadas (apenas duplicadas)
        **ShowNumberDuplicate**
    2)processa3.php 
            Programa que mostra arquivo sem números/palavras repetidas (e remove o NULL)
            **ShowNotRepeat**
    3)processa4.php 
            Mostrar quais foram os valores que estavam sendo repetidos e a quantidade desses valores 
            **ShowMeRepeat**
    4)processa5.php 
            Renomear arquivos
            **CoolRename** 

4. ## Testes ## 

    As tarefas que necessitam de arquivo de texto foram testadas com 3 arquivos de textos diferentes(todos os arquivos continham palavras repetidas): 
        * Arquivo com 15 linhas e sem null
        * Arquivo com 1235 linhas e com null 
        * Arquivo com 20 linhas e com null

5. ## Alguns sites que me ajudaram na criação frontend e backend ##
    
    *Backend
        *  https://celke.com.br/artigo como-ler-arquivo-txt-com-php-e-salvar-no-banco-de-dados-com-mysqli#:~:text=Nesta%20vídeo%20aula%20será%20apresentado,salvar%20no%20banco%20de%20dados.
        *  https://qastack.com.br/programming/4526273/what-does-enctype-multipart-form-data-mean
        *  https://www.php.net/manual/pt_BR/function.array-intersect-assoc.php
        *  https://stackoverflow.com/questions/307650/how-to-remove-duplicate-values-from-an-array-in-php
        *  https://pt.stackoverflow.com/questions/176291/excluir-palavras-repetidas-de-um-array-e-ordena-lo
        * http://www.mauricioprogramador.com.br/posts/como-remover-valores-duplicados-do-array-com-php
        * http://www.mauricioprogramador.com.br/posts/renomear-arquivo-ou-pasta-php#:~:text=Alterando%20Nome%20de%20Pasta&text=%24pasta_antigo%20%3D%20"pasta1"%3B,(%24pasta_antigo%2C%20%24pasta_novo)%3B
        * http://phpbrasil.com/phorum/read.php?11,174043
        * https://pt.stackoverflow.com/questions/33029/como-remover-acento-no-upload-com-php/33052
        * http://www.bosontreinamentos.com.br/php-programming/trabalhando-com-sessoes-em-php-e-variavel-_session/
        * https://www.youtube.com/watch?reload=9&v=ZXswSqVzXw4&t=33s
        * https://www.php.net/manual/pt_BR/function.require-once.php

    *Frontend
        *  https://getbootstrap.com/docs/4.5/components/forms/
        *  https://getbootstrap.com

6. ## Comentários ## 

    O site pode ser melhorado no frontend, o programa CoolRename esta atualizado apenas nesse repositório, mas no repositório do próprio CoolRename ainda ta com o bug de renomear colocando a palavra "pdf" antes da extensão e precisa melhorar a responsividade do site. 

7. ## Código Cores Utilizadas ##
    FFEF1C
    E37F09
    FA0403
    7D09E3
    0A7AFB







    
