<?php
    get_header();
?>

<h1>Front page</h1>

<section class="splide" aria-label="Custom Arrows Example">
    <div class="splide__arrows">
        <button class="splide__arrow splide__arrow--prev">
            Prev
        </button>
        <button class="splide__arrow splide__arrow--next">
            Next
        </button>
    </div>

    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <img src="https://splidejs.com/images/slides/image-slider/01.jpg" alt="">
            </li>
            <li class="splide__slide">
                <img src="https://splidejs.com/images/slides/image-slider/02.jpg" alt="">
            </li>
            <li class="splide__slide">
                <img src="https://splidejs.com/images/slides/image-slider/03.jpg" alt="">
            </li>
        </ul>
    </div>
</section>

<section class="reassurance">
    <div class="grid">
        <div>
            <h1>120 clients satisfaits</h1>
            <p>L’avis de nos clients en toute transparence</p>
        </div>
        <div>
            <h1>Paiement sécurisé</h1>
            <p>Leading Edge and Strategic Par</p>
        </div>
        <div>
            <h1>Service client</h1>
            <p>Contactez-nous via notre chatbox
                ou par email : moonwine@mail.com</p>
        </div>
        <div>
            <h1>Livraison rapide</h1>
            <p>Deux moyens de livraison. À domicile
                ou via Chronopost</p>
        </div>
    </div>
</section>

<section class="about">
    <div>
        <h1>Quatre copains assis autour d’une table, une bouteille de vin blanc naturel et
            les forces gravitationnelles entrent
            en action. Voici l’histoire de Moon Wine !
        </h1>
    </div>
    <div class="border"></div>
    <div>
        <p>
            Chaque mois, nous proposons une box contenant deux cuvées d’un même vigneron. L’une sera existante, l’autre
            exclusive. Des artistes de tout horizon travailleront sur le design des box et les étiquettes des
            bouteilles, sans aucune limite et avec toute leur liberté d’expression. Notre objectif est simple :
            transmettre une expérience à tout le monde.
        </p>

        <?php $text = "En savoir plus sur moonwine"; $link = "/test"; include 'include/button.php'; ?>
    </div>
</section>

<section class="newsletter">
    <div class="flex">
        <div class="descr">
            <h1>Recevez nos offres !</h1>
            <p>Abonnez- vous à notre newsletter pour recevoir nos offres en avant-première et toute notre actualité ! Au
                programme : des interviews inspirants des artistes de nos boxes et des témoignages engagés de nos
                vignerons.
            </p>
        </div>
        <div class="form">
            <?= do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
        </div>
    </div>
</section>

<section class="post container">
    <h1>Nos articles de blog</h1>
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
</section>

<?php get_footer() ?>