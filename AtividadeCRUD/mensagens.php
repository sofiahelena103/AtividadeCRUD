<?php
session_start();

function recebermensagem($message) {
    $_SESSION['mensagem'] = $message;
}

function exibirmensagem() {
    if (isset($_SESSION['mensagem'])) {
        echo "<div class='mensagem'>{$_SESSION['mensagem']}</div>";
        unset($_SESSION['mensagem']);
    }
}