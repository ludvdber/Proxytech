<?php
require_once "../app/config/app.php";

/**
 * Inclure tous les fichiers du MVC
 */
function include_mvc_php_files(): void
{
    // inclure uniquement les fichiers en .php
    foreach (['model', 'view', 'controller'] as $dir) {
        $file_a = scandir(ROOT_DIR . $dir);

        foreach ($file_a as $file) {
            if (!str_ends_with($file, ".php")) continue;
            require_once(ROOT_DIR . $dir . DIRECTORY_SEPARATOR . $file);
        }
    }
}

// ROUTER
session_start();

include_mvc_php_files();

// Récupérer la partie utile de l'URL (ex: /home ou /contact)
$request_uri = trim($_SERVER['REQUEST_URI'], '/');

$base_path = 'proxytech/';
$page = str_replace($base_path, '', $request_uri);

// Si l’URL est vide ou "/"
if ($page == '' || $page == '/') {
    $page = 'home';
}

// Supprimer les éventuels paramètres GET
$page = explode('?', $page)[0];

// Construire le nom de la fonction
$main = "main_{$page}";

// Vérifier si la fonction existe et l'exécuter
if (function_exists($main)) {
    echo $main();
} else {
    http_response_code(404);
    echo "Page introuvable"; // faire la page 404
}
