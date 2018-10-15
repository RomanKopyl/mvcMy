<?php

$view = 'login';

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

if ($username) {
    if ($username === $user['username'] && $password === $user['password']) {
        $_SESSION['username'] = $username;
    } else {
        $vars['error'] = 'Username or Password are mismatch';
    }
}

if (isset($_SESSION['username'])) {
    $vars['username'] = $_SESSION['username'];
    $view = 'welcome';
}