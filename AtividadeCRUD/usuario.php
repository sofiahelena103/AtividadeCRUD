<?php
require 'bd.php';

class Usuario {
    private $bd;

    // Construtor
    public function __construct() {
        $this->bd = DB::getInstance()->getConnection();
    }

    // Criar novo usuário
    public function create($nomecompleto, $email, $senha) {
        $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);
        $stmt = $this->bd->prepare("INSERT INTO usuarios (nomecompleto, email, senha) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nomecompleto, $email, $hashedPassword);
        return $stmt->execute();
    }

    // Exibir na tela
    public function read() {
        $result = $this->bd->query("SELECT * FROM usuarios");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // Editar
    public function update($id, $nomecompleto, $email, $senha = null) {
        if ($senha) {
            $hashedPassword = password_hash($senha, PASSWORD_DEFAULT);
            $stmt = $this->bd->prepare("UPDATE usuarios SET nomecompleto = ?, email = ?, senha = ? WHERE id = ?");
            $stmt->bind_param("sssi", $nomecompleto, $email, $hashedPassword, $id);
        } else {
            $stmt = $this->bd->prepare("UPDATE usuarios SET nomecompleto = ?, email = ? WHERE id = ?");
            $stmt->bind_param("ssi", $nomecompleto, $email, $id);
        }
        return $stmt->execute();
    }

    // Deletar
    public function delete($id) {
        $stmt = $this->bd->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    // Procurar
    public function find($id) {
        $stmt = $this->bd->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>