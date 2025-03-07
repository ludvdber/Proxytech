<?php
/**
 * Affiche la page des condtions générales de vente.
 * @return string : le contenu html de la page condtions générales de vente.
 */
function main_condition(): string
{

    return join("\n", [
        html_head(),
        html_condition_general(),
        html_foot(),
    ]);

}