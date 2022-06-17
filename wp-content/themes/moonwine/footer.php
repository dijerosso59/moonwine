        <footer class="container">
            <div class="contenu">
                <div class="flex">
                    <div class="space">
                        <div class="socials">
                            <a class="logo" href="<?php echo get_site_url(); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-footer.svg"
                                    alt="Logo Footer">
                            </a>

                            <h2>Suivez-nous sur les réseaux</h2>
                            <div>
                                <a href="https://www.facebook.com/moonwineclub/">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm3 8h-1.35c-.538 0-.65.221-.65.778v1.222h2l-.209 2h-1.791v7h-3v-7h-2v-2h2v-2.308c0-1.769.931-2.692 3.029-2.692h1.971v3z" />
                                    </svg>
                                </a>
                                <a href="https://www.youtube.com/channel/UCeV6svnb-s6jt_PYvXKvKZQ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                                    </svg>
                                </a>
                                <a
                                    href="https://www.instagram.com/moonwineclub/?fbclid=IwAR0C4n3SMUO5pLdVVrR9WqKgQAMNGIQ2bqYFx9bNVIWvO568LhhT8czxXyE">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="newsletter">
                            <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                        </div>
                    </div>
                    <div class="footer-menu">
                        <div>
                            <h3>Services</h3>
                            <ul>
                                <li>
                                    <a href="">Accueil</a>
                                </li>
                                <li>
                                    <a href="">Abonnements</a>
                                </li>
                                <li>
                                    <a href="">Cave à vin</a>
                                </li>
                                <li>
                                    <a href="">Carte cadeau</a>
                                </li>
                                <li>
                                    <a href="">A propos</a>
                                </li>
                                <li>
                                    <a href="">Blog</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3>Services</h3>
                            <ul>
                                <li>
                                    <a href="">Accueil</a>
                                </li>
                                <li>
                                    <a href="">Abonnements</a>
                                </li>
                                <li>
                                    <a href="">Cave à vin</a>
                                </li>
                                <li>
                                    <a href="">Carte cadeau</a>
                                </li>
                                <li>
                                    <a href="">A propos</a>
                                </li>
                                <li>
                                    <a href="">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="copyright">
                    <p>Copyright © 2022 Moonwine - Tous droits réservés.</p>
                </div>
                <div class="alcool">
                    <h1>L’abus d’alcool est dangereux pour la santé.<br>
                        À consommer avec modération</h1>
                </div>
                <div class="loi">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/republique_francaise.png"
                        alt="République francaise">
                    <div>
                        <h2>
                            Interdiction de vente de boissons alcooliques aux mineurs de moins de 18 ans.
                        </h2>
                        <p class="detail">
                            La preuve de majorité de l'acheteur est exigé au moment de la vente en ligne.
                        </p>
                        <p class="code">Code de la santé publique, ART. L 3342-1 et L. 3353-3</p>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer() ?>
        </body>

        </html>