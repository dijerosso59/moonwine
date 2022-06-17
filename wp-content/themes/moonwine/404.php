<?php
    get_header();
?>

<section class="error">
    <div>
        <img src="<?= get_template_directory_uri(); ?>/assets/img/404/bouteille.png" alt="Bouteille">
    </div>

    <div>
        <h1>404</h1>
        <p>La page que vous recherchez est introuvable</p>
        <?php $text = "Revenir à l'accueil"; $link = get_site_url(); include 'include/button.php'; ?>
    </div>
</section>

<?php get_footer() ?>