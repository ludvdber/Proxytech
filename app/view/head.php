<?php

/**
 * Retourne le head du site.
 * @return string retourne le header du site
 */
function html_head(): string
{
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>ProxyTech</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="apple-touch-icon" sizes="180x180" href="/resources/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/resources/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/resources/favicon/favicon-16x16.png">
        <link rel="manifest" href="/resources/favicon/site.webmanifest">
        <link rel="stylesheet" href="/css/internal/styleHeader.css">
        <link rel="stylesheet" href="/css/internal/styleFooter.css">
        <link href="/css/internal/style.css" rel="stylesheet">
        <link href="/css/internal/dynamique.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css"
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    </head>
    <body>
    <div class="container_nav">
        <nav class="navbar">
            <div class="container_icon">
                <a href="/home"><img src="/resources/proxytech_logo_couleur_nav.webp" alt="Logo Proxytech"
                                     class="logo"></a>
            </div>
            <ul class="nav-list" id="navi-list">
                <li class="list-item">
                    <a href="/home">Accueil</a>
                </li>
                <li class="list-item">
                    <a href="/about">À propos de nous</a>
                </li>
                <li class="list-item">
                    <a href="reparation">Réparation</a>
                </li>
                <li class="list-item">
                    <a href="/home#address">Contact</a>
                </li>
            </ul>
            <div class="menu_icon" id="toggleButton">
                <div class="menu_icon_line"></div>
                <div class="menu_icon_line"></div>
                <div class="menu_icon_line"></div>
            </div>
        </nav>
    </div>
    <script type="text/javascript" src="js/toggleButton.js"></script>

    <?php

    return ob_get_clean();
}