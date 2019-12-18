<?php
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', '', 'register-bd');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login', '$pass', '$name')");

    $mysql->close();

    header('Location: /');
    exit;
?>