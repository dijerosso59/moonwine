<?php
    get_header();
    global $product;
    $data = get_fields()
?>

<section class="home-slide">
    <div class="container">
        <div class="flex-slide-home">
            <div class="description-slide">
                <h1><?= $data['titre_slide'] ?></h1>
                <div class="text">
                    <p><?= $data['texte_slide'] ?></p>
                    <ul class="list-moonwine">
                        <?php foreach ($data['liste_slide'] as $block) : ?>
                        <li><?= $block['texte_list'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <?php $text = $data['lien_slide']['title']; $link = $data['lien_slide']['url']; include 'include/button.php'; ?>
            </div>
            <div class="splide" aria-label="Custom Arrows Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php foreach ($data['slider_home'] as $block) : ?>
                        <li class="splide__slide">
                            <img src="<?= $block['images_slide'] ?>" alt="">
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/front-page/slide/arrow-left.png"
                            alt="arrow">
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <img src="<?= get_template_directory_uri(); ?>/assets/img/front-page/slide/arrow-right.png"
                            alt="arrow">

                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reassurance">
    <div class="container">
        <div class="grid">
            <?php foreach ($data['list_reassurance'] as $block) : ?>
            <div>
                <h1><?= $block['titre_reassurance'] ?></h1>
                <p><?= $block['texte_reassurance'] ?></p>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="about-content">
            <div>
                <h1><?= $data['texte_1_about'] ?></h1>
            </div>
            <div class="border"></div>
            <div class="info">
                <p><?= $data['texte_2_about'] ?></p>
                <?php $text = $data['lien_about']['title']; $link = $data['lien_about']['url']; include 'include/button.php'; ?>
            </div>
        </div>
    </div>
</section>

<section class="subscription">
    <div class="container">
        <div class="element mobile">
            <h1>
                moonwine club
            </h1>
            <h2>
                Abonnements boxs<br>?? partir de <span>19,99???/mois</span>
            </h2>
            <p>Une box Moonwine c???est :</p>
            <ul>
                <li>Un packaging con??u par un artiste diff??rent ?? chaque fois</li>
                <li>
                    Une cuv??e exclusive d???un vigneron que ???tu n???as JAMAIS pu gouter !
                </li>
            </ul>
        </div>
        <div class="content">
            <div>
                <img src="http://moonwine.lan/wp-content/uploads/2022/06/img-abonement.png" alt="">
            </div>
            <div>
                <div class="element desktop">
                    <h1>
                        moonwine club
                    </h1>
                    <h2>
                        Abonnements boxs<br>?? partir de <span>19,99???/mois</span>
                    </h2>
                    <p>Une box Moonwine c???est :</p>
                    <ul>
                        <li>Un packaging con??u par un artiste diff??rent ?? chaque fois</li>
                        <li>
                            Une cuv??e exclusive d???un vigneron que ???tu n???as JAMAIS pu gouter !
                        </li>
                    </ul>
                </div>
                <ul class="advantages">
                    <li>
                        6 boxs de s??rie
                    </li>
                    <li>
                        Facilit??s de paiement
                        (en 1, 3 ou 12 fois)
                    </li>
                    <li>
                        Livraison offerte en point relais
                        si paiement en une fois
                    </li>
                </ul>
                <div class="btn-desk">
                    <?php $text = $data['lien_subscription']['title']; $link = $data['lien_subscription']['url']; include 'include/button.php'; ?>
                </div>
            </div>
        </div>
        <div class="btn-mobile">
            <?php $text = $data['lien_subscription']['title']; $link = $data['lien_subscription']['url']; include 'include/button.php'; ?>
        </div>
    </div>
</section>

<section class="product-review">
    <div class="container">
        <h2 class="text--title">D??couvrez les saveurs de notre cave ?? vin... </h2>
        <div class="product-review--content">
            <?php
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 4,
                    'orderby' => 'asc',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'product_cat',
                            'field' => 'slug',
                            'terms' => 'cave-a-vin',
                        ),
                    ),
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) :
                    while ($loop->have_posts()) : $loop->the_post(); ?>
            <?php // lien vers single product woocommerce?>
            <div class="product-items">
                <a href="<?php echo the_permalink() ?>">
                    <div class="product-item">
                        <div class="product-item-image">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="product-item-content">
                            <h2><?php the_title(); ?></h2>
                            <p class="product-desc product-single-desc"> <?php the_field('short_desc'); ?></p>
                            <?php
                                        $tags = wp_get_post_terms(get_the_ID(), 'product_tag');
                                        if (!empty($tags)) {
                                            echo '<div class="product_meta">';
                                            foreach ($tags as $tag) {
                                                echo '<span>' . $tag->name . '</span>';
                                            }
                                            echo '</div>';
                                        }
                                        ?>
                            <div class="product-price">
                                <div class="product-price_abonne">
                                    <p class="product-price_abonne_price">17,00 ???</p>
                                    <p class="product-price_abonne_title">Prix abonn??</p>
                                </div>
                                <div class="product-price_public">
                                    <p class="price"><span
                                            class="woocommerce-Price-amount amount"><bdi><?php echo $product->get_price_html(); ?></bdi></span>
                                    </p>
                                    <p class="product-price_public_title">Prix public</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="<?php echo $product->add_to_cart_url(); ?>" class="product-panier" alt="ajout panier">
                    <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.0029 6H15.5029V4.5C15.5029 2.0625 13.4404 0 11.0029 0C8.51855 0 6.50293 2.0625 6.50293 4.5V6H2.00293C1.15918 6 0.50293 6.70312 0.50293 7.5V19.5C0.50293 22.0312 2.47168 24 5.00293 24H17.0029C19.4873 24 21.5029 22.0312 21.5029 19.5V7.5C21.5029 6.70312 20.7998 6 20.0029 6ZM8.00293 4.5C8.00293 2.85938 9.31543 1.5 11.0029 1.5C12.6436 1.5 13.9561 2.85938 13.9561 4.5V6H8.00293V4.5ZM20.0029 19.5C20.0029 21.1875 18.6436 22.5 17.0029 22.5H5.00293C3.31543 22.5 2.00293 21.1875 2.00293 19.5V7.5H6.50293V11.25C6.50293 11.6719 6.83105 12 7.25293 12C7.62793 12 8.00293 11.6719 8.00293 11.25V7.5H13.9561V11.25C13.9561 11.6719 14.2842 12 14.7061 12C15.0811 12 15.4561 11.6719 15.4561 11.25V7.5H20.0029V19.5Z"
                            fill="black" />
                    </svg>
                </a>
            </div>
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>
        <?php $text = $data['lien_product']['title']; $link = $data['lien_product']['url']; include 'include/button.php'; ?>

    </div>
</section>

<section class="newsletter">
    <div class="container">
        <h1><?= $data['titre_newsletter'] ?></h1>
        <div class="flex">
            <div class="descr">
                <p><?= $data['texte_newsletter'] ?></p>
            </div>
            <div class="form">
                <?= do_shortcode( $data['formulaire_newsletter'] ); ?>
            </div>
        </div>
    </div>
</section>

<section class="post">
    <div class="container">
        <h2>Nos articles de blog</h2>

        <a href="/blog" class="btn" title="Voir tous les articles">
            Voir tous les articles
            <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M36.9924 7.06247C37.303 6.75183 37.303 6.24817 36.9924 5.93753L31.9301 0.875287C31.6195 0.564643 31.1158 0.564643 30.8052 0.875287C30.4945 1.18593 30.4945 1.68959 30.8052 2.00023L35.305 6.5L30.8052 10.9998C30.4945 11.3104 30.4945 11.8141 30.8052 12.1247C31.1158 12.4354 31.6195 12.4354 31.9301 12.1247L36.9924 7.06247ZM0 7.29545H36.4299V5.70455H0V7.29545Z"
                    fill="#343434"></path>
            </svg>
        </a>
        <?php
            $args = array(
                'post_status' => 'publish',
                'posts_per_page'=>4,
                'order'=>'ASC',
            );

            $query = new WP_Query($args);
            echo '<ul>';
            while($query -> have_posts()) : $query->the_post();
        ?>

        <li>
            <a href="<?= get_the_permalink() ?>">
                <img src="<?php the_post_thumbnail_url() ?>" alt="">
                <div>
                    <h2><?= get_the_title() ?></h2>
                    <p>
                        <?php the_content() ?>
                    </p>
                </div>
            </a>
        </li>

        <?php
            endwhile; wp_reset_postdata();
            echo '</ul>';
        ?>
    </div>
</section>

<section id="faq-section" class="faq-section">
    <div class="container">
        <div class="faq-section--content">
            <h2 class="text--title"><?= $data['titre_faq'] ?></h2>
            <div class="faq-section--content_column">
                <div class="shadowed-block">
                    <?php foreach ($data['liste_faq'] as $block) : ?>
                    <div class="card">
                        <div class="card-body">
                            <input class="single-toggle-input" type="checkbox" name="singletab"
                                id="<?= $block['id_list_faq'] ?>" data-com.bitwarden.browser.user-edited="yes">
                            <label class="single-toggle-label"
                                for="<?= $block['id_list_faq'] ?>"><?= $block['titre_list_faq'] ?></label>
                            <div class="single-toggle-content">
                                <p class="card-text"><?= $block['reponse_list_faq'] ?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <?php $text = $data['lien_faq']['title']; $link = $data['lien_faq']['url']; include 'include/button.php'; ?>
            </div>
            <div class="faq-section--content_column">
                <img class="img-responsive" src="<?= $data['image_faq'] ?>" alt="">
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>