<?php
require 'Usuario.php';
require 'mensagens.php';


    // Instanciando novo usuário
$usuario = new Usuario();
$editar = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['ID']) && $_POST['ID']) {
        $usuario->update($_POST['ID'], $_POST['nomecompleto'], $_POST['email'], $_POST['senha']);
        recebermensagem("Os dados do Usuário foram alterados com sucesso!!");
    } else {
        $usuario->create($_POST['nomecompleto'], $_POST['email'], $_POST['senha']);
        recebermensagem("Os dados do Usuário foram adicionados com sucesso!!");
    }
    header('Location: index.php');
    exit();
}

if (isset($_GET['editar'])) {
    $editar = true;
    $usuariodados = $usuario->find($_GET['editar']);
}

if (isset($_GET['deletar'])) {
    $usuario->delete($_GET['deletar']);
    recebermensagem("Os dados do Usuário foram deletados com sucesso!!");
    header('Location: index.php');
    exit();
}
?>

    <!-- Formulário e CSS -->
<!DOCTYPE html>
<html>
<head>
    <title>Gestão de Usuários</title>
</head>
<style type="text/css">
    body{
        background-color: silver;
        color: black;
    }
    {
        font-family: verdana;
    }
    fieldset{
        width: 60%;
        margin:0 auto;
        border-radius:15px;
        background-color:white;
        box-shadow:2px 2px 2px gray;
    }
    input,select,textarea{
        border-radius:4px;
        padding:5px;
        margin:5px;
    }
</style>
<body>
    <h2><?php echo $editar ? 'Editar' : 'Adicionar'; ?> Usuário</h2>
    <form method="POST" action="formulario.php">
        <?php if ($editar): ?>
            <input type="hidden" name="ID" value="<?php echo $usuariodados['ID']; ?>">
        <?php endif; ?>
        <label for="nomecompleto">Nome Completo:</label>
        <input type="text" name="nomecompleto" value="<?php echo $editar ? $usuariodados['nomecompleto'] : ''; ?>" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $editar ? $usuariodados['email'] : ''; ?>" required><br><br>
        <label for="senha">Senha:</label>
        <input type="password" name="senha" <?php echo $editar ? '' : 'required'; ?>><br><br>
        <button type="submit"><?php echo $editar ? 'Editar' : 'Adicionar'; ?> Usuário</button>
    </form>
</body>
</html>