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
                <th>Titulo 2</th>               
                <th></th>
            </tr>
        
        <?php
        
            $consulta = $con->query("select * from inserir2");    
            while ($registro = $consulta->fetch(PDO::FETCH_OBJ)){
                echo "<tr>";
                echo "<td>".$registro->id."</td>";
                echo "<td>".$registro->titulo2."</td>";
               
                
                ?>
                    <td>
                        <a href="titulo2_editar.php?op=alt&id=<?php echo $registro->id; ?>">
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
