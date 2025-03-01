<?php
/**
 * Affiche la page d'accueil du site.
 * @return string : le contenu html de la page d'accueil.
 */
function main_home(): string
{

    return join("\n", [
        html_head(),
        html_main_body(),
        html_foot(),
    ]);

}



