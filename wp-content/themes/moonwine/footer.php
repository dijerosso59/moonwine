        <footer>
            <div class="container">
                <div class="flex">
                    <div class="space">
                        <div class="socials">
                            <a class="logo" href="<?php echo get_site_url(); ?>">
                                <img src="<?= the_field('logo_footer', 'option') ?>" alt="Logo Footer">
                            </a>

                            <h2><?= the_field('texte_reseaux_options', 'option') ?></h2>
                            <div>
                                <?php $variable = get_field('liste_des_reseaux_options', 'option');
                                foreach ($variable as $block) : ?>
                                <a href="<?= $block['lien'] ?>">
                                    <img src="<?= $block['logo'] ?>" alt="">
                                </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="newsletter-footer">
                            <h2><?= the_field('titre_newsletter_footer', 'option') ?></h2>
                            <p><?= the_field('texte_newsletter_footer', 'option') ?></p>
                            <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                            <!-- <?= do_shortcode(the_field('formulaire_newsletter_footer', 'option')); ?> -->
                        </div>
                    </div>
                    <div class="footer-menu">
                        <div>
                            <h3>Services</h3>
                            <?php

                                wp_nav_menu(
                                    array(
                                        'container'  => '',
                                        'theme_location' => 'footer-1',
                                        'name' => 'footer-col-1'
                                    )
                                );

                            ?>
                        </div>
                        <div>
                            <h3>A propos</h3>
                            <?php

                                wp_nav_menu(
                                    array(
                                        'container'  => '',
                                        'theme_location' => 'footer-2',
                                    )
                                );

                            ?>
                        </div>
                        <div>
                            <h3>Légal</h3>
                            <?php

                                wp_nav_menu(
                                    array(
                                        'container'  => '',
                                        'theme_location' => 'footer-3',
                                    )
                                );

                            ?>
                        </div>
                    </div>
                </div>

                <hr>

                <div class="copyright">
                    <p><?= the_field('copyright_options', 'option') ?></p>
                </div>
                <div class="alcool">
                    <p><?= the_field('avertissement_options', 'option') ?></p>
                </div>
                <div class="loi">
                    <img src="<?= the_field('image_loi_options', 'option') ?>" alt=" République francaise">
                    <div>
                        <p class="text-loi">
                            <?= the_field('titre_loi_options', 'option') ?>
                        </p>
                        <p class="detail">
                            <?= the_field('texte_loi_options', 'option') ?>
                        </p>
                        <p class="code"><?= the_field('code_loi_options', 'option') ?></p>
                    </div>
                </div>
            </div>
        </footer>
        <?php wp_footer() ?>
        </body>

        </html>