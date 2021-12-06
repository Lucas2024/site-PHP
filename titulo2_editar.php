<?php
include 'conexao.php';

$id="";
$titulo2="";
$mensagem="";


    // verifica se foi postado e for uma alteração
    if ( isset($_POST['titulo2']) && $_GET['op'] =='alt' ){
        $alterar = $con->prepare("update inserir2 set "
                . " titulo2=?"
                . "where id =? ");
        $alterar->bindParam(1,$_POST['titulo2']);       
        $alterar->bindParam(2,$_GET['id']);
        
        
        if (!$alterar->execute()){
            print_r($alterar->errorInfo());
        } else {
            header("Location: titulo2.php");
        }
    }
    
    // busca os dados do fornecedor no banco e alimenta as
    // variáveis que estão no "value"
    if ($_GET['op']=='alt') {
        $consulta = $con->prepare("select * from inserir2 "
                . " where id = ?");
        $consulta->bindParam(1,$_GET['id']);
        $consulta->execute();
        $registro = $consulta->fetch(PDO::FETCH_OBJ);

        $id   = $registro->id;
        $titulo2 = $registro->titulo2;
        
    }
    
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        

    </head>
    <body>
    <div class="container">
        <form name="frm" method="POST">
            
            <?php 
                if (strlen($mensagem)>0) {
                    echo '<div class="alert alert-warning" role="alert">';
                    echo $mensagem;  
                    echo '</div>';
                }
            ?>
            <table>
                <tr>
                    <td>Código</td>
                    <td><?php echo $id; ?></td>
                </tr>
                <tr>
                    <td>Titulo 2</td>
                    <td><input required="true" class="form-control" type="text" size="60" name="titulo2" value="<?php echo $titulo2; ?>" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input class="btn btn-success" type="submit" value="Gravar" /></td>
                </tr>
            </table>
            
        </form>
    </div>
    </body>
</html>