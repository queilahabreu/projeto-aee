<?php session_start();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center" style="padding-top:100px; min-height:500px;">
            <div class="efeito">
                <h1 style="text-shadow: 1px 1px 1px #111111; color: red;">ShowMeRepeat</h1>
                <p style="color: #7d09E3;text-shadow: 1px 1px 1px #111111; font-size: 28px; margin-top: 50px;">Insira o arquivo, formato texto, que você deseja receber de volta apenas as palavras/números que estão sendo repetidas e a quantidade de valores que estão sendo repetidos.</p>
            </div>        
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="control/processa_prog3.php" enctype="multipart/form-data">
                <div class='input-wrapper'>
                    <input id='input-file' type='file' name='arquivo' >
                    <label for='input-file'>Envie arquivo de texto</label>
                    <span id='file-name'></span>
                </div>
                    
                <button type="submit" class="btn btn-primary" style="margin-top:10px; margin-left: 10px;">Enviar</button>
                    
            </form> 
        </div>
    </div>
   
    <p style="margin-top: 10px;">
        <?php 
           
            if(isset($_SESSION['total']) && isset($_SESSION['rodando']) &&  $_SESSION['rodando'] == 1){?>
            A quantidade de valores repetidos é: <?php echo $_SESSION['total']; ?>
            <br>
            <a href="arquivo_texto/valores_duplicados.txt" download>Clique aqui para fazer o download</a>
            
            <?php }
            $_SESSION['rodando'] = 0;
        ?>
    </p>

</div>