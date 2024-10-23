<?php

return [
    '/' => function () {
        echo '<h1> Home Page </h1>';
    },
    '/login' => function (array $params = []) {
        echo '<h1> Login Page </h1>';
        if (!empty($params['logged_out'])) {
            echo '<p>You have been successfully logged out.</p>'; // Mensagem fixa
            return;
        }
        echo '<p> Welcome ' . ucfirst($params['name'] ?? 'Visitante') . '!</p>';
        if (!empty($params['message'])) {
            echo '<p>' . htmlspecialchars($params['message']) . '</p>';
        }
    },

    '/logout' => function () {
    header('location: /login?logged_out=true');
    }
];