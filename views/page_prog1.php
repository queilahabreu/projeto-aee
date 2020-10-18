<?php session_start();
?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center" style="padding-top:100px; min-height:500px;">
            <div class="efeito">
                <h1 style="text-shadow: 1px 1px 1px #111111; color: red;">ShowNumberDuplicate</h1>
                <p style="color: #7d09E3;text-shadow: 1px 1px 1px #111111; font-size: 28px; margin-top: 50px;">Insira o arquivo, formato texto, que você deseja saber quantas palavras/números estão sendo duplicadas.</p>
            </div>        
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="control/processa_prog1.php" enctype="multipart/form-data">
                <div class='input-wrapper'>
                    <input id='input-file' type='file' name='arquivo' >
                    <label for='input-file'>Envie arquivo de texto</label>
                    <span id='file-name'></span>
                </div>
                    
                <button type="submit" class="btn btn-primary" style="margin-top:10px; margin-left: 10px;  margin-bottom: 22px;">Enviar</button>
                    
            </form> 
        </div>
    </div>
   

    <p style="margin-top: 10px; margin-bottom: 50px;">
        <?php 
           
            if(isset($_SESSION['total']) && isset($_SESSION['rodando']) &&  $_SESSION['rodando'] == 1){?>
            A quantidade de duplicadas é: <?php echo $_SESSION['total']; }
            $_SESSION['rodando'] = 0;
        ?>
    </p>


</div>



