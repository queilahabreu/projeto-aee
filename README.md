
![Logo AEE](imagens/logo_final.png)

# Relatório #

    *Projeto*: AAE -> Ajuda Aê (estágiarios)
    *Autora*: Queila Abreu

1. ## Descrição do Programa ## 
    <p>Site criado para ajudar em tarefas, que geralmente são solicitadas para estagiários, que levariam o dia todo para serem feitas.</p> 

2. ## Operação do Programa ## 

    <p>Conforme solicitado pelo sistema a usuária deve escolher que tipo de tarefa quer que seja feita, sendo que algumas tarefas é necessário fornecer fornecer um arquivo. O arquivo é solicitados através de uma caixa upload e tem que ser em formato texto.</p> 
    <p>As tarefas que irão precisar de um arquivo formato texto são: descobrir a quantidade de palavras/números que estão sendo duplicadas, desejar receber de volta sem palavras/números repetidos e sem valores que contenha "NULL" ou desejar receber de volta apenas as palavras/números que estão sendo repetidas e a quantidade de valores que estão sendo repetidos.</p> 
    <p>E a tarefa que não solicita o arquivo é a que renomeia os arquivos tirando palavras com acentos e espaços. Para a usuária realizar vai ser indicado um link para o github contendo o programa que pode ser baixado.</p>

3. ## Descrição das Tarefas ##  

    1)processa.php<br/> 
        Programa que informa o número de duplicadas (apenas duplicadas)<br/>
        **ShowNumberDuplicate** <br/>
    2)processa3.php <br/>
            Programa que mostra arquivo sem números/palavras repetidas (e remove o NULL)<br/>
            **ShowNotRepeat**<br/>
    3)processa4.php <br/>
            Mostrar quais foram os valores que estavam sendo repetidos e a quantidade desses valores <br/> 
            **ShowMeRepeat**<br/>
    4)processa5.php <br/>
            Renomear arquivos<br/>
            **CoolRename** <br/>

4. ## Testes ## 

    As tarefas que necessitam de arquivo de texto foram testadas com 3 arquivos de textos diferentes(todos os arquivos continham palavras repetidas):<br/> 
        * Arquivo com 15 linhas e sem null<br/>
        * Arquivo com 1235 linhas e com null <br/>
        * Arquivo com 20 linhas e com null<br/>

5. ## Alguns sites que me ajudaram na criação frontend e backend ##
    
    *Backend<br/>
        *  https://celke.com.br/artigo como-ler-arquivo-txt-com-php-e-salvar-no-banco-de-dados-com-mysqli#:~:text=Nesta%20vídeo%20aula%20será%20apresentado,salvar%20no%20banco%20de%20dados.<br/>
        *  https://qastack.com.br/programming/4526273/what-does-enctype-multipart-form-data-mean<br/>
        *  https://www.php.net/manual/pt_BR/function.array-intersect-assoc.php<br/>
        *  https://stackoverflow.com/questions/307650/how-to-remove-duplicate-values-from-an-array-in-php<br/>
        *  https://pt.stackoverflow.com/questions/176291/excluir-palavras-repetidas-de-um-array-e-ordena-lo<br/>
        * http://www.mauricioprogramador.com.br/posts/como-remover-valores-duplicados-do-array-com-php<br/>
        * http://phpbrasil.com/phorum/read.php?11,174043 <br/>
        * https://pt.stackoverflow.com/questions/33029/como-remover-acento-no-upload-com-php/33052<br/>
        * http://www.bosontreinamentos.com.br/php-programming/trabalhando-com-sessoes-em-php-e-variavel-_session/ <br/>
        * https://www.youtube.com/watch?reload=9&v=ZXswSqVzXw4&t=33s
        * https://www.php.net/manual/pt_BR/function.require-once.php <br/>

    *Frontend<br/>
        *  https://getbootstrap.com/docs/4.5/components/forms/<br/>
        *  https://getbootstrap.com<br/>

6. ## Comentários ## 

    <p>O site pode ser melhorado no frontend, o programa CoolRename esta atualizado apenas nesse repositório, mas no repositório do próprio CoolRename ainda ta com o bug de renomear colocando a palavra "pdf" antes da extensão e precisa melhorar a responsividade do site.</p> 

7. ## Código Cores Utilizadas ##
    FFEF1C
    E37F09
    FA0403
    7D09E3
    0A7AFB







    
