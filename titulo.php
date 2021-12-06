<?php
    include 'conexao.php';    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <?php include 'script.php'; ?>
    </head>
    <body style="margin: 10px">
        
               
        <table border='1' class="table table-striped table-hover" >
            <tr class="table-dark">
                <th>Código</th>
                <th>Titulos</th>               
                <th></th>
            </tr>
        
        <?php
        
            $consulta = $con->query("select * from inserir");    
            while ($registro = $consulta->fetch(PDO::FETCH_OBJ)){
                echo "<tr>";
                echo "<td>".$registro->id."</td>";
                echo "<td>".$registro->titulos."</td>";
               
                
                ?>
                    <td>
                        <a href="titulo_editar.php?op=alt&id=<?php echo $registro->id; ?>">
                            <i class="bi bi-pencil-square" style="color: blue"></i>
                        </a>
                    </td>    
            
                <?php
                
                echo "</tr>"; 
            }
        
        ?>

        </table>
        <a href="index.php?op=inc" class="btn btn-success">Home</a>
        
    </body>
</html>
