<?php
/**
 * Le corps de la page Politique de Confidentialité.
 *
 * @return string Retourne le code HTML de la page de Politique de Confidentialité.
 */
function html_rgpd(): string
{
    ob_start();
    ?>
    <main class="privacy-policy">
    <article>
        <header class="policy-header">
            <h1>Politique de Confidentialité et de Protection des Données</h1>
        </header>

        <section class="policy-section">
            <h2>Introduction</h2>
            <p>
                Cette Politique de Confidentialité explique comment <strong>PROXYTECH</strong> collecte, utilise, conserve et protège les données personnelles de ses utilisateurs, en conformité avec le Règlement Général sur la Protection des Données (RGPD) de l'Union Européenne.
            </p>
        </section>

        <section class="policy-section">
            <h2>Données Collectées</h2>
            <p>
                Nous recueillons des informations telles que le nom, l'adresse e-mail, le numéro de téléphone, ainsi que d'autres données nécessaires lors de vos commandes ou interactions avec nos services.
            </p>
        </section>

        <section class="policy-section">
            <h2>Utilisation des Données</h2>
            <p>
                Vos données personnelles sont utilisées pour :
            </p>
            <ul>
                <li>Améliorer et personnaliser nos services</li>
                <li>Gérer les commandes et les services fournis</li>
                <li>Vous informer sur nos offres, promotions et mises à jour</li>
                <li>Assurer la sécurité et la conformité de nos services</li>
            </ul>
            <p>
                Nous nous engageons à ne jamais vendre ni partager vos informations avec des tiers sans votre consentement préalable.
            </p>
        </section>

        <section class="policy-section">
            <h2>Vos Droits</h2>
            <p>
                Conformément au RGPD, vous disposez des droits suivants concernant vos données personnelles :
            </p>
            <ul>
                <li>Accès à vos données</li>
                <li>Rectification des données inexactes</li>
                <li>Suppression de vos données</li>
                <li>Limitation du traitement</li>
                <li>Opposition au traitement</li>
                <li>Portabilité de vos données</li>
            </ul>
            <p>
                Pour exercer ces droits, veuillez nous contacter à l'adresse indiquée ci-dessous.
            </p>
        </section>

        <section class="policy-section">
            <h2>Sécurité</h2>
            <p>
                Nous mettons en œuvre des mesures techniques et organisationnelles appropriées afin de protéger vos données contre toute perte, accès non autorisé ou divulgation.
            </p>
        </section>

        <section class="policy-section">
            <h2>Contact</h2>
            <p>
                Pour toute question concernant cette politique ou pour exercer vos droits, veuillez nous écrire à :
                <a href="mailto:info@proxytech.be">info@proxytech.be</a>.
            </p>
        </section>
    </article>
    </main>
    <?php
    return ob_get_clean();
}
?>
