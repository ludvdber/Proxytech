<?php
/**
 * Affiche la page d'erreur 404.
 * @return string : le contenu html de la page 404.
 */
function main_404(): string
{

    return join("\n", [
        html_head(),
        html_404(),
        html_foot(),
    ]);

}