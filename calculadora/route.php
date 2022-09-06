<?php

require_once 'src/sections.php';
require_once 'src/operaciones.php';
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
//lee parametro ACCION
$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}
// parsea la accion Ej: about/juan --> ['about', 'juan']
$params = explode('/', $action); // genera un arreglo

switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'pi':
        showPi();
        break;
    case 'sumar':
    case 'restar':
    case 'dividir':
    case 'multiplicar':
        showOperaciones($params[1], $params[2], $params[0]);
        break;

    case 'about':
        if (isset($params[1])) {
            showAbout($params[1]); 
        } else {
            showAbout(); 
        }
        break;

    
}
