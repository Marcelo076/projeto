<?php
require 'config.php'; 
$lista = [];
$sql = $pdo->query("SELECT * FROM nomes");
if ($sql->rowCount() > 0 ){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC); 
}



foreach ($lista as $nomes): 

?>

<table border="1" width = "100%">
<tr>

   
    <td><?php  echo $nomes['nome'] ?></td>
    <td><?php  echo $nomes['cidade'] ?></td>
    <td><?php  echo $nomes['inf'] ?></td>
    <td><?php  echo $nomes['cat'] ?></td>
    <td>
        <a href="excluir.php?id=<?=$nomes['id'];?>"> EXCLUIR</a>
    </td>
</tr>
</table>
<?php endforeach; ?>


<a href="index.php"> Inicio</a>