<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'menu.php';?>
   
</head>

<nav class="navbar navbar-light bg-light navbar-expand-md fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="Imagens/Logo1.png"></a>
                <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span> </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a class="nav-link <?php if($page=='home'){echo 'active';}?>" href="index.php">Página inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=='transferencia'){echo 'active';}?>" href="transferencia.php">Transferência</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=='easierBank'){echo 'active';}?>" href="vantagens.php">Vantagens</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page=='contato'){echo 'active';}?>" href="login.php">Editar Site</a>
                    </li>

                    </ul>
                </div>
        </div>
   </nav>
