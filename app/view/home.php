<?php
/**
 * Le corps de la page principal du site.
 *
 * @return false|string Retourne le code html de la page d'accueil.
 */
function html_main_body(): false|string
{

    ob_start();
    ?>
    <main>
        <section class="hero">
            <div class="overlay"></div>
            <div class="hero-content">
                <h1>Des experts au service de vos appareils numériques</h1>
                <h4>De la réparation à la customisation, nos spécialistes en boutique maîtrisent votre tech et prennent
                    soin de vos appareils.</h4>
                <a href="#address">
                    <button type="button">Nous contacter</button>
                </a>
            </div>
        </section>
    </main>
    <section class="nos_reparations">
        <h1 class="titre_rep">Nos réparations</h1>
        <hr>
        <div class="container_article_rep reveal">
            <article class="art_rep first_left">
                <img alt="photo d'un smartphones" height="100em" src="resources/emoticone_phone.png"
                     width="100em">
                <header>
                    <h4>Smartphones</h4>
                </header>
                <p>Nous intervenons sur tout type de marques et modèles.</p>
            </article>
            <article class="art_rep">
                <img alt="photo d'un pc portable" height="100em" src="resources/emoticone_computer.png"
                     width="100em">
                <header>
                    <h4>Pc portables</h4>
                </header>
                <p>Réparation et intervention sur tout problèmes materiels et logiciels sur vos portables.</p>
            </article>
            <article class="art_rep">
                <img alt="photo d'un pc de bureau" height="100em" src="resources/emoticone_bureau.png"
                     width="100em">
                <header>
                    <h4>Ordinateurs</h4>
                </header>
                <p>Nous réparons les problèmes materiels et logiciels sur vos ordinateurs</p>
            </article>
            <article class="art_rep first_right">
                <img alt="phton d'une mannette" height="100em" src="resources/emoticone_controller.png"
                     width="100em">
                <header>
                    <h4>consoles de jeu</h4>
                </header>
                <p>Réparation et nettoyage sur tout type de console.</p>
            </article>
        </div>
        <a href="#" class="reveal">
            <button type="button">En savoir plus</button>
        </a>
    </section>
    <section class="nos_services">
        <h1 class="titre_rep_light">Nos autres services</h1>
        <hr>
        <div class="container_article_service reveal">
            <article class="art_service first_left">
                <img alt="photo du réseau" height="100em" src="resources/network.png" width="100em">
                <header>
                    <h5>Installation réseau</h5>
                </header>
                <p>Nous installons tout type de réseau domestique ou de PME.</p>
            </article>
            <article class="art_service">
                <img alt="photo du réseau" height="100em" src="resources/clean.png" width="100em">
                <header>
                    <h5>Dépoussiérage</h5>
                </header>
                <p>Éliminez les problèmes de surchauffe et faites durer vos appareils plus longtemps avec
                    notre nettoyage professionnel.</p>
            </article>
            <article class="art_service">
                <img alt="photo du réseau" height="100em" src="resources/gamingPC.png" width="100em">
                <header>
                    <h5>PC sur mesure</h5>
                </header>
                <p>Nous réalisons vos rêves en conceptionnant sur mesure vos tours, que ce soit pour le gaming ou le
                    professionnel.</p>
            </article>
            <article class="art_service first_right">
                <img alt="photo du réseau" height="100em" src="resources/windows.png" width="100em">
                <header>
                    <h5>Logiciel et données</h5>
                </header>
                <p>Nous configurons les logiciels et Windows. Nous sauvegardons aussi les données de vos appareils.</p>
            </article>
        </div>
        <a href="#" class="reveal">
            <button type="button">En savoir plus</button>
        </a>
    </section>
    <section class="Procedure">
        <h1 class="titre_rep">Comment procéder ?</h1>
        <hr>
        <div class="container_article_process reveal">
            <div class="case caseArticle_devis">
                <header>
                    <h4>Le devis</h4>
                </header>
                <p>Nous vous proposons un devis adapté à vos besoins, dés le devis validé, nous procedons à la
                    réparation.</p>
            </div>
            <div class="case caseArticle_dep">
                <header>
                    <H4>Déplacement</H4>
                </header>
                <p>Ne bougez pas le petit doigt ! Nous nous déplaçons chez vous pour la réparation.</p>
            </div>
            <div class="case caseArticle_inter">
                <header>
                    <h4>Intervention</h4>
                </header>
                <p>Nous intervenons à domicile ou dans notre atelier.</p>
            </div>
            <div class="case caseArticle_fin">
                <header>
                    <h4>Tout est bien qui finit bien !</h4>
                </header>
                <p>Nous avons un services après vente et une garantie pour toutes nos interventions.</p>
            </div>
        </div>
        <a href="#" class="reveal">
            <button type="button">En savoir plus</button>
        </a>
    </section>
    <section class="couleurdefond" id="address">
        <h1 class="titre_rep">Vous êtes interessé par nos services ?</h1>
        <hr>
        <div class="grid_contact_map">
            <address class="contact_col">
                <h6 class="info"><img alt="van_icon" height="30" src="resources/van_icon.png" width="30">
                    Intervention gratuite sur un rayon de 10 km de Braine-Le-Comte</h6>
                <h6 class="info"><img alt="clock_icon" height="30" src="resources/clock_icon.png" width="30"> Horaire
                    d'intervention : Lundi-Samedi 16-21h</h6>
                <h6 class="info"><img alt="phone_icon" height="30" src="resources/phone_icon.png" width="30">
                    Appelez-nous au <a href="tel:+32474312579">0474/31.25.79</a></h6>
                <h6 class="info"><img alt="mail_icon" height="30" src="resources/mail_icon.png" width="30">
                    Contactez-nous sur <a href="mailto:proxytech.be@gmail.com?subject=Renseignement">proxytech.be@gmail.com</a>
                </h6>
            </address>
            <aside class="contact_col">
                <iframe class="map" allowfullscreen="" loading="lazy"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d81009.63712905788!2d4.057702631224662!3d50.616877264641914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3b2d66c747c85%3A0xd25f42320ddba71b!2s7090%20Braine-le-Comte!5e0!3m2!1sfr!2sbe!4v1710880286922!5m2!1sfr!2sbe"></iframe>
            </aside>
        </div>
    </section>
    <script type="text/javascript" src="js/scrollReveal.js"></script>
    <?php
    return ob_get_clean();
}