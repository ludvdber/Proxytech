<?php
/**
 * Le corps de la page Conditions générales de vente.
 *
 * @return string Retourne le code HTML de la page des Conditions Générales.
 */
function html_conditions_general(): string
{
    ob_start();
    ?>
    <main class="grid_contact_map">
        <article class="conditions-generales">
            <header class="conditions-header">
                <h1>Conditions Générales de Vente et de Réparation</h1>
            </header>

            <section class="condition-section">
                <h2>1. Objet</h2>
                <p>
                    Les présentes conditions générales de réparation et d'intervention (ci-après les "Conditions
                    Générales")
                    régissent la relation contractuelle entre <strong>PROXYTECH</strong>, dont le siège est situé à
                    <em>ADRESSE</em> et immatriculée à la BCE sous le n° BE 123456789, et ses clients.
                </p>
            </section>

            <section class="condition-section">
                <h2>2. Application</h2>
                <p>
                    Toute intervention de la Société sur un appareil (smartphone, tablette, PC, etc.), qu'il s'agisse
                    d'une réparation, d'un diagnostic, d'une récupération de données ou de la pose d'une vitre de
                    protection,
                    fait l'objet d'un devis préalable. L'acceptation de ce devis implique l'adhésion pleine et entière
                    du Client
                    aux présentes Conditions Générales. Toute dérogation à ces conditions doit être formulée par écrit
                    et ne sera
                    valable que pour l'intervention concernée.
                </p>
            </section>

            <section class="condition-section">
                <h2>3. Propriété intellectuelle</h2>
                <p>
                    Tous les contenus présents sur ce site sont protégés par le droit d’auteur et les droits de
                    propriété intellectuelle.
                    L’ensemble des droits d’utilisation, de reproduction et de propriété intellectuelle en relation avec
                    ce site
                    appartiennent exclusivement à <strong>PROXYTECH</strong>. La reproduction totale ou partielle des
                    documents est
                    autorisée uniquement à des fins d’information pour un usage personnel et privé. Toute autre
                    utilisation est
                    interdite et peut donner lieu à des poursuites judiciaires.
                </p>
            </section>

            <section class="condition-section">
                <h2>4. Paiement</h2>
                <p>Les factures sont payables comptant, sauf accord contraire.</p>
                <p>
                    Si la prestation inclut la fourniture de matériel ou une demande de livraison, le paiement est exigé
                    à l’avance
                    si le montant des pièces excède 150 €.
                </p>
            </section>

            <section class="condition-section">
                <h2>5. Garanties</h2>
                <p>
                    Si l’appareil réparé est encore sous garantie constructeur, le Client reconnaît qu’il a été informé
                    que toute intervention
                    de <strong>PROXYTECH</strong> annule cette garantie. Toutefois, la Société offre une garantie sur
                    ses réparations de 12 mois
                    (6 mois pour les batteries).
                </p>
                <p>
                    La garantie couvre les défauts techniques directement liés à la réparation effectuée. Dans ces cas,
                    <strong>PROXYTECH</strong>
                    s'engage à réparer gratuitement l'appareil, sous réserve de présentation de la facture
                    correspondante.
                </p>
                <h3>Exclusions de garantie :</h3>
                <ul>
                    <li>Réparations non effectuées par <strong>PROXYTECH</strong></li>
                    <li>Nouveaux dommages ou défauts techniques postérieurs à l’intervention</li>
                    <li>Domages causés par une mauvaise utilisation, une négligence ou une modification de l’appareil
                    </li>
                    <li>Usure normale des composants, notamment des batteries</li>
                    <li>Domages esthétiques (rayures, écaillage, bosses)</li>
                    <li>Oxydation de l’appareil</li>
                </ul>
            </section>

            <section class="condition-section">
                <h2>6. Réclamations et contestations</h2>
                <p>
                    Toute réclamation doit être adressée par écrit à <strong>PROXYTECH</strong>, à l'adresse
                    <em>ADRESSE</em>, dans un délai de 10 jours ouvrables suivant l’objet du litige.
                </p>
                <p>
                    Le présent contrat est régi par le droit belge et rédigé en français. En cas de litige, seuls les
                    tribunaux
                    belges sont compétents.
                </p>
            </section>

            <section class="condition-section">
                <h2>7. Responsabilité</h2>
                <p>
                    Si un appareil confié à <strong>PROXYTECH</strong> est endommagé ou perdu sous sa garde, la
                    responsabilité de la Société
                    se limite au coût de la réparation ou du remplacement de l’appareil. <strong>PROXYTECH</strong> ne
                    saurait être tenu
                    responsable des pertes de données, de la non-conformité, des incompatibilités logicielles ou de
                    toute dégradation
                    éventuellement consécutive à son intervention. Il appartient au Client de sauvegarder ses données
                    avant toute intervention.
                </p>
            </section>
        </article>
    </main>
    <?php
    return ob_get_clean();
}
