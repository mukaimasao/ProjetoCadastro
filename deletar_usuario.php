<?php
    include('conexao.php');
    $id_usuario = $_GET['id_usuario'];
    $sql = "select * from usuario where id_usuario = $id_usuario";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Deletar Usuários - IFSP</h1>
    <form action="deletar_usuario_exe.php" method="POST">
        <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']?>">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome_usuario']?>"  disabled="">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" value="<?php echo $row['email_usuario']?>"  disabled="">
        </div>
        <div>
            <label for="fone">Telefone</label>
            <input type="tel" name="fone" id="fone" 
            placeholder="Formato (99) 9999-9999"
            value="<?php echo $row['fone_usuario']?>"  disabled="">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" value="<?php echo $row['senha_usuario']?>"  disabled="">
        </div>
        <input type="submit" value="Deletar">

    </form>
</body>
</html>