<?php
/**
 * Retourne le corps de la page "À propos".
 *
 * @return false|string Retourne le code HTML de la page "À propos".
 */
function html_about(): false|string
{
    ob_start();
    ?>

    <main class="main_about">
        <section class="about_us">
            <div class="container_about">
                <div class="about_text">
                    <h2>Notre Histoire</h2>
                    <p>Bienvenue chez Proxytech ! Nous sommes Ludovic et Nathan, deux passionnés d'informatique et
                        d'électronique. Nos chemins se sont croisés lors de nos études en informatique, et depuis, nous
                        n'avons cessé de bricoler et de perfectionner nos compétences. De cette passion commune est née
                        l'idée de Proxytech.</p>
                    <h2>Notre Mission</h2>
                    <p>Chez Proxytech, nous croyons en une technologie durable. À une époque où la surconsommation est
                        monnaie courante, nous nous engageons à prolonger la durée de vie de vos appareils. Notre
                        objectif est de promouvoir une économie circulaire tout en offrant des services rapides, de
                        qualité et conviviaux.</p>
                    <p class="signature">Ludovic & Nathan</p>
                </div>
                <div class="about_photo">
                    <img src="https://img-9gag-fun.9cache.com/photo/amPM0VV_460s.jpg" alt="Ludovic et Nathan">
                    <div class="cv_links">
                        <a href="#" target="_blank">Site web de Ludovic</a>
                        <a href="#" target="_blank">Site web de Nathan</a>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <?php
    return ob_get_clean();
}

