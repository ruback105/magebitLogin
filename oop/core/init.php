<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'user_db'
    ),
    'remember' => array(
        'cookie' => 'hash',
        'cookie_expiry' => 86400,
    ),
    'session' => array(
        'session_name' => 'user'
    )
);

spl_autoload_register(function ($class) {
    require_once 'C:/xampp/htdocs/project/oop/classes/' . $class . '.php';
});

require_once 'C:/xampp/htdocs/project/oop/functions/sanitize.php';
