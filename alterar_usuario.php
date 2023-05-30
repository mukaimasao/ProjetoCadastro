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
    <h1>Cadastro de Usuários - IFSP</h1>
    <form action="alterar_usuario_exe.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']?>">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome_usuario']?>">
        </div>
        <div>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" value="<?php echo $row['email_usuario']?>">
        </div>
        <div>
            <label for="fone">Telefone</label>
            <input type="tel" name="fone" id="fone" 
            placeholder="Formato (99) 9999-9999"
            pattern="\([0-9]{2}\)([9]{1})?[0-9]{4}-[0-9]{4}" value="<?php echo $row['fone_usuario']?>">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" value="<?php echo $row['senha_usuario']?>">
        </div>
        <div>
            <img src="<?php echo $row['foto_usuario'] ?> " width='80' height='100'>
            <input type="file" name="foto" id="foto" accept="image/*" value="<?php  $row['foto_usuario'] ?>">
        </div>
        <input type="submit" value="Salvar">

    </form>
</body>
</html>