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
                <th>Paragrafo</th>               
                <th></th>
            </tr>
        
        <?php
        
            $consulta = $con->query("select * from inserir1");    
            while ($registro = $consulta->fetch(PDO::FETCH_OBJ)){
                echo "<tr>";
                echo "<td>".$registro->id."</td>";
                echo "<td>".$registro->paragrafo."</td>";
               
                
                ?>
                    <td>
                        <a href="paragrafo_editar.php?op=alt&id=<?php echo $registro->id; ?>">
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
