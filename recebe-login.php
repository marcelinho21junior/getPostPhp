<?php

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    echo "<p>Seu email: $email</p>";
    echo "<p>Sua senha: $senha</p>";

    var_dump($_POST);