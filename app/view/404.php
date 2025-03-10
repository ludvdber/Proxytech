<?php
/**
 * Le corps de la page 404. (page inexistante ou interdite)
 *
 * @return false|string Retourne le code html de la page d'erreur 404.
 */
function html_404(): false|string
{

    ob_start();
    ?>
    <main>
        <section class="main_section_404">
            <div class="container_404">
                <h2>Page non trouvée</h2>
                <p>Désolé, la page que vous cherchez n'existe pas ou a été déplacée.</p>
                <img src="/resources/404.webp" alt="Erreur 404 - Page non trouvée" class="image-404">
                <a href="/home">
                    <button>Retour à l'accueil</button>
                </a>
            </div>
        </section>
    </main>
    <?php
    return ob_get_clean();
}