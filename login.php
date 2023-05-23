<?php
    include('conexao.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "select * from usuario where email_usuario = '$email' and senha_usuario = '$senha'";
    $result = mysqli_query($con, $sql);
    $rowcount = mysqli_num_rows($result);
    if($rowcount>0){
        include('criasessao.php');
        $_SESSION['login'] = mysqli_fetch_array($result); // array com todos os dados que estao no banco
        header('Location: index.php');
    }else{
        echo "<h1>Usuário não encontrado!</h1>";
    }
?>