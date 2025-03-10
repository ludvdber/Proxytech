<?php
/**
 * Affiche la page des condtions générales de vente.
 * @return string : le contenu html de la page condtions générales de vente.
 */
function main_conditions(): string
{

    return join("\n", [
        html_head(),
        html_conditions_general(),
        html_foot(),
    ]);

}