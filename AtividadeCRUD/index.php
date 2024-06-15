<?php
require 'usuario.php';
require 'mensagens.php';


    // Instanciando novo usuário
$usuario = new Usuario();
$usuarios = $usuario->read();
?>

    <!-- Formulário e CSS -->
<!DOCTYPE html>
<html>
<head>
    <title>Gestão de Usuário</title>
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
    .message {
        background-color: #d4edda;
        border: 1px solid #c3e6cb;
        color: #155724;
        padding: 10px;
        margin-bottom: 15px;
    }
</style>
<body>
<h2>Lista de Usuários</h2>
<?php exibirmensagem(); ?>
<a href="formulario.php"><img src="figuras/adicionar.png" height="40" width="40" class="media-object img-responsive img-thumbnail" title="Adicionar Usuário"></a>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome Completo</th>
        <th>Email</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($usuarios as $us): ?>
        <tr>
            <td><?php echo $us['ID']; ?></td>
            <td><?php echo $us['nomecompleto']; ?></td>
            <td><?php echo $us['email']; ?></td>
            <td>
                <a href="formulario.php?editar=<?php echo $us['ID']; ?>"><img src="figuras/editar.png" height="40" width="40" class="media-object img-responsive img-thumbnail"  title="Editar Usuário"></a>
                <a href="formulario.php?deletar=<?php echo $us['ID']; ?>" onclick="return confirm('Você tem certeza?');"><img src="figuras/deletar.png" height="40" width="40" class="media-object img-responsive img-thumbnail"  title="Deletar Usuário"></a
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>