<?php
/**
 * Retourne le footer du site.
 * @return string retourne le footer du site
 */
function html_foot(): string
{
    ob_start();
    ?>
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Entreprise</h4>
                    <ul>
                        <li><a href="/rgpd">Confidentialité</a></li>
                        <li><a href="/conditions">Conditions générales de vente</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Demande d'aide</h4>
                    <ul>
                        <li><a href="/reparations">Nos réparations</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Nous contacter</h4>
                    <ul>
                        <li><a href="mailto:info@proxytech.be?subject=Renseignement">info@proxytech.be</a>
                        </li>
                        <li><a href="tel:+32474312579">0474/31.25.79</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Nous rejoindre</h4>
                    <div class="hm-foot-icon">
                        <a href="https://www.facebook.com/proxytech.be"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/proxytech_7090/"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <a href="/home"><img src="/resources/proxytech_white.webp" alt="Logo Proxytech" class="logo"></a>
                </div>
            </div>
            <div class="footer-copyright-mention">
                <p>Copyright ©2025 - Designed with love by Nathan & Ludovic</p>
            </div>
        </div>
    </footer>
    </body>
    </html>

    <?php
    return ob_get_clean();
}