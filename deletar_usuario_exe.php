<?php
    include('conexao.php');
    $id_usuario = $_POST['id_usuario'];
    echo "<h1>Deletar dados</h1>";

    $sql = "delete from usuario where id_usuario = '$id_usuario'";
    echo $sql ."<br>";
    $result = mysqli_query($con, $sql);
    if($result){
        echo "Dados deletados com sucesso! <br>";
    }else{
        echo "Erro ao deletar dados:  ".mysqli_error($con)."!";
    }
?>
<a href="index.php">Voltar</a>