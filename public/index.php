<?php
// begin session
session_start();

// control const
const CONTROL = true;

// verify if there's a logged user
$user = $_SESSION['user'] ?? null;

// verify which url route
if (empty($user)) {
    $route = 'login';
} else {
    $route = $_GET['route'] ?? 'home';
}

// if user logged, but route is login, redirect to home
if (!empty($user) && $route === 'login') {
    $route = 'home';
}

// update routes
$routes = [
        'login' => 'login.php',
        'home' => 'home.php',
        'logout' => 'logout.php',
];

if (!array_key_exists($route, $routes)) {
    die('Route not found');
}

require_once $routes[$route];

