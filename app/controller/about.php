<?php
/**
 * Affiche la page à propos.
 * @return string : le contenu html de la page à propos.
 */
function main_about(): string
{

    return join("\n", [
        html_head(),
        html_about(),
        html_foot(),
    ]);

}