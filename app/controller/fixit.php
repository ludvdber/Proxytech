<?php
/**
 * Affiche la page des condtions générales de vente.
 * @return string : le contenu html de la page réparation.
 */
function main_reparations(): string
{

    return join("\n", [
        html_head(),
        html_reparation(),
        html_foot(),
    ]);

}