<?php
    get_header();
?>

<section class="error">
    <div>
        <img src="<?= get_template_directory_uri(); ?>/assets/img/bouteille.png" alt="Bouteille">
    </div>

    <div>
        <h1>404</h1>
        <p>La page que vous recherchez est introuvable</p>
        <a class="btn" href="<?php echo get_site_url(); ?>">
            Revenir à l'accueil
        </a>
    </div>
</section>

<?php get_footer() ?>