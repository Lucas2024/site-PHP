<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    include 'menu.php';
    include 'conexao.php';
    ?>
</head>
<body>

<?php $page = 'vantagens'; include 'navbar.php';?>

<!--Segunda Parte-->
<div class="jumbotron">
        <div class="container">
            <h2 class="text-center pt-5 pb-3"> Vantagens para você</h2>
            <div class="row justify-content-center text-center">
                <div class="col-10 col-md-4">
                    <div class="feature">
                        <img class="img" src="Imagens/verifica.png">
                        <h3>Risco zero</h3>
                        <p>A transferência bancária é um método de pagamento seguro, sem risco.</p>

                    </div>
                </div>
                <div class="col-10 col-md-4">
                    <div class="feature">
                        <img class="img" src="Imagens/verifica.png">
                        <h3>Comfirmação de Pagamento Rápida</h3>
                        <p>A confirmação de pagamento é efetuada em 1 dia útil.</p>
                    </div>
                </div>
                <div class="col-10 col-md-4">
                    <div class="feature">
                        <img class="img" src="Imagens/verifica.png">
                        <h3>Rápido e Simples</h3>
                        <p>Com o Easier Bank você transfere seu dinheiro de maneira rápida e simples.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Segunda Parte-->

    <!--Terceira Parte-->
    <div class="container py-3">
        <div class="row justify-content-center py-5">
            <div class="col-lg-6">
                <h3 class="fonte"><?php

                                    $consulta = $con->query("select * from inserir2");
                                    while ($registro = $consulta->fetch(PDO::FETCH_OBJ)) {
                                        echo $registro->titulo2;
                                    } ?></h3>
                <!-- <p>Teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste.</p>
                <p>Teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste.Teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste teste.</p><a class="btn btn-purple btn-lg" href="#">Arquivo teste</a> -->
            </div>
            <div class="col-lg-6"><img class="img-fluid" src="Imagens/App.png" width="500" height="500"></div>
        </div>
    </div>
    <!--Terceira Parte-->

    <?php include 'rodape.php'; ?>

    <?php include 'script.php'; ?>

</body>
</html>