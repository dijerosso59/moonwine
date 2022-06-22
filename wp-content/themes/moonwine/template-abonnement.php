<?php
/**
 * Template Name: Page Abonnement
 * Template Post Type: page, post
 */
get_header();
$data = get_fields()
?>

<section class="description">
    <div class="container">
        <h1><?= $data['titre_abonnement'] ?></h1>
        <div class="description-content">
            <div class="all">
                <h4><?= $data['description_abonnement'] ?></h4>
                <div class="text">
                    <?= $data['texte_abonnement'] ?>
                </div>
            </div>
            <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/subscription/green-group.svg"
                     alt="green group">
            </div>
        </div>
    </div>
</section>

<section class="box">
    <div class="container">
        <div class="moment-box">
            <h2><?= $data['titre_box'] ?></h2>
            <div class="box-element">
                <div>
                    <img src="<?= $data['image_box'] ?>" alt="">
                </div>
                <div class="box-descr">
                    <h4><?= $data['titre_image_box'] ?></h4>
                    <p><?= $data['description_image_box'] ?></p>
                    <?php $text = "Acheter la box"; $link = "/test"; include 'include/button.php'; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="list-subscription">
    <div class="container">
        <h2><?= $data['titre_grid_abonnement'] ?></h2>
        <div class="grid-subscription">
            <?php foreach ($data['element_grid_abonnement'] as $block) : ?>
            <div class="element-subscription">
                <div id="<?= $block['id_abonnement'] ?>">
                    <p class="title-subscription"><?= $block['titre_element_abonnement'] ?></p>
                    <h4><?= $block['description_element_abonnement'] ?></h4>
                    <div class="descr-subscription">
                        <h1><?= $block['prix_element_abonnement'] ?></h1>
                        <p><?= $block['par_mois_element_abonnement'] ?></p>
                    </div>
                    <ul class="advantages-subscription">
                        <?php foreach ($block['advantages_element_abonnement'] as $advantages) : ?>
                        <li><?= $advantages['titre_advantages_abonnement'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
                <?php $text = "S'abonner"; $link = "/produit/abonnement-premium"; include 'include/button.php'; ?>
            </div>
            <?php endforeach ?>
        </div>
        <div class="unit-subscription">
        <?php foreach ($data['liste_boxes'] as $block) : ?>
            <div class="element-subscription">
                <div>
                    <p class="title-subscription"><?= $block['titre_list_boxes'] ?></p>
                    <div class="descr-subscription">
                        <h1><?= $block['prix_list_boxes'] ?></h1>
                    </div>
                    <ul class="advantages-subscription">
                    <?php foreach ($block['list_advantages_boxes'] as $advantages) : ?>
                        <li><?= $advantages['titre_advantages_boxes'] ?></li>
                    <?php endforeach ?>
                    </ul>
                    <?php $text = "Acheter"; $link = "/test"; include 'include/button.php'; ?>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<section class="product-review">
        <div class="container">
            <h2 class="text--title">Découvrez les saveurs de notre cave à vin... </h2>
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
                                                <p class="product-price_abonne_price">17,00 €</p>
                                                <p class="product-price_abonne_title">Prix abonné</p>
                                            </div>
                                            <div class="product-price_public">
                                                <p class="price"><span class="woocommerce-Price-amount amount"><bdi><?php echo $product->get_price_html(); ?></bdi></span></p>
                                                <p class="product-price_public_title">Prix public</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo $product->add_to_cart_url(); ?>" class="product-panier" alt="ajout panier">
                                <svg width="22" height="24" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.0029 6H15.5029V4.5C15.5029 2.0625 13.4404 0 11.0029 0C8.51855 0 6.50293 2.0625 6.50293 4.5V6H2.00293C1.15918 6 0.50293 6.70312 0.50293 7.5V19.5C0.50293 22.0312 2.47168 24 5.00293 24H17.0029C19.4873 24 21.5029 22.0312 21.5029 19.5V7.5C21.5029 6.70312 20.7998 6 20.0029 6ZM8.00293 4.5C8.00293 2.85938 9.31543 1.5 11.0029 1.5C12.6436 1.5 13.9561 2.85938 13.9561 4.5V6H8.00293V4.5ZM20.0029 19.5C20.0029 21.1875 18.6436 22.5 17.0029 22.5H5.00293C3.31543 22.5 2.00293 21.1875 2.00293 19.5V7.5H6.50293V11.25C6.50293 11.6719 6.83105 12 7.25293 12C7.62793 12 8.00293 11.6719 8.00293 11.25V7.5H13.9561V11.25C13.9561 11.6719 14.2842 12 14.7061 12C15.0811 12 15.4561 11.6719 15.4561 11.25V7.5H20.0029V19.5Z" fill="black"/>
                                </svg>
                            </a>
                        </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
            </div>
            <a href="/categorie-produit/cave-a-vin/" class="btn">
                Voir toutes les saveurs
                <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M36.9924 7.06247C37.303 6.75183 37.303 6.24817 36.9924 5.93753L31.9301 0.875287C31.6195 0.564643 31.1158 0.564643 30.8052 0.875287C30.4945 1.18593 30.4945 1.68959 30.8052 2.00023L35.305 6.5L30.8052 10.9998C30.4945 11.3104 30.4945 11.8141 30.8052 12.1247C31.1158 12.4354 31.6195 12.4354 31.9301 12.1247L36.9924 7.06247ZM0 7.29545H36.4299V5.70455H0V7.29545Z" fill="#343434"></path>
                </svg>
            </a>
        </div>
</section>

<?php get_footer(); ?>