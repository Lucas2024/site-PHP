<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'menu.php';?>
    <link href="login.css" rel="stylesheet">

</head>
<?php
    
    $login = "admin";
    $senha = "1234";

    if(isset($_POST["login"])){
        
        if($_POST["login"] == $login and $_POST["senha"] == $senha){
            $_SESSION['login'] = $login;
            header("Location: botoes.php");
        }else{
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Atenção!</strong> Login ou senha inválido
          </div>';
        }
        
    }
    
    ?>

<body>
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="POST">
                            <h3 class="text-center">Login</h3>
                            <div class="form-group">
                                <label for="username" class="">Usuario:</label><br>
                                <input type="text" name="login" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="">Senha:</label><br>
                                <input type="password" name="senha" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="botao" value="Entra">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
