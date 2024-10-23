<?php

return [
    '/' => function () {
        echo '<h1> Home Page </h1>';
    },
    '/login' => function (array $params = []) {
        echo '<h1> Login Page </h1>';
        echo '<p> Welcome ' . ucfirst($params['name'] ?? 'Visitante') . '!</p>';
        echo '<pre>' . htmlspecialchars(print_r($params, true)) . '</pre>';

    }
];