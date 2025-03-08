<?php
/**
 * Affiche la page des condtions générales de vente.
 * @return string : le contenu html de la page condtions générales de vente.
 */
function main_rgpd(): string
{

    return join("\n", [
        html_head(),
        html_rgpd(),
        html_foot(),
    ]);

}