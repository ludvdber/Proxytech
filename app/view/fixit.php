<?php
/**
 * Le corps de la page réparation
 *
 * @return string Retourne le code html de la page réparation.
 */
function html_reparation(): string
{
    ob_start();
    ?>
    <main class="main_fixit">
        <section class="fixit-section" id="reparation">
            <div class="container_fixit">
                <div class="about_text">
                    <h1>Réparation</h1>
                    <h2>Comment nous procédons</h2>
                    <p>
                    <ul>
                    <li>Nous vous proposons un devis adapté à vos besoins, dés le devis validé, nous procedons à la
                    réparation.</li>
                    
                    <li>Ne bougez pas le petit doigt ! Nous nous déplaçons chez vous pour la réparation. Ou si vous avez 
                    l'envie d'une petite balade, vous pouvez déposer le matériel dans notre atelier.</li>

                    <li>Nous avons un services après vente et une garantie pour toutes nos interventions, ou produits vendus.</li>
                    </p>
                    <h2>Ce que nous réparons chez Proxtech</h2>
                    <div class="logo-grid">
                        <img src="resources/Apple_logo_black.svg" alt="Apple">
                        <img src="resources/Samsung_logo.png" alt="Samsung">
                        <img src="resources/Google-pixel-logo.png" alt="Google">
                        <img src="resources/Xiaomi_logo.png" alt="Xiaomi">
                        <img src="resources/Huawei-Logo.png" alt="Huawei">
                        <img src="resources/oneplus-logo.png" alt="OnePlus">
                        <img src="resources/nintendo-logo.png" alt="Nintendo">
                        <img src="resources/Playstation.png" alt="PlayStation">
                        <img src="resources/Acer_logo.png" alt="Acer">
                        <img src="resources/Asus-Logo.png" alt="Asus">
                        <img src="resources/Dell-Logo.png" alt="Dell">
                        <img src="resources/Hewlett-Packard-Logo.png" alt="HP"> 
                        <img src="resources/Lenovo-logo.png" alt="Lenovo">
                        <img src="resources/MSI-Logo.png" alt="MSI">
                        <img src="resources/custom.jfif" alt="Tour Custom">
                    </div>
                    <h2>Nos services digitaux</h2>
                    <p>Nous installons tout type de réseau domestique ou de PME. Éliminez les problèmes de surchauffe et faites durer vos appareils plus longtemps avec notre nettoyage professionnel.
                    Nous réalisons vos rêves en conceptionnant sur mesure vos tours, que ce soit pour le gaming ou le professionnel. Nous configurons les logiciels et Windows. Nous sauvegardons aussi les données de vos appareils.
                    Nous réparons les problèmes materiels et logiciels sur vos ordinateurs
                    </p>
                    <h2>Nos Avantages chez Proxytech</h2>
                    <div class="cells-container">
                        <div class="cell-benefit">
                            <img src="resources/OEM.png" alt="Logo 1">
                            <h3>Qualité OEM</h3>
                            <p>La qualité de nos pièces sont une priorité</p>
                        </div>
                        <div class="cell-benefit">
                            <img src="resources/garantie.jfif" alt="Logo 2">
                            <h3>Garantie 2 ans</h3>
                            <p>Une garantie de 2 ans est offert sur nos réparations</p>
                        </div>
                        <div class="cell-benefit">
                            <img src="resources/ecologie.jfif" alt="Logo 3">
                            <h3>Ecologique</h3>
                            <p>des réparation qui ralonge la durée de vie de vos appareil et diminue votre impact carbon</p>
                        </div>
                        <div class="cell-benefit">
                            <img src="resources/experience.jpg" alt="Logo 4">
                            <h3>+ 5 ans d'expérience</h3>
                            <p>Chez proxytech, la technologie va de paire, de même pour nos réparations</p>
                        </div>
                    </div>
                    <section class="contact-fixit">
                    <p> Un doute concernant un appareil que vous désirez réparer ?
                    </p>
                    <a href="/home#address" class="contact-button">Contactez-nous</a>
                    </section>
                </div>
            </div>
        </section>
    </main>
    <?php
    return ob_get_clean();
}