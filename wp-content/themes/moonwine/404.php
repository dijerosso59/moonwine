<?php
    get_header();
?>

<section class="error">
    <div>
        <img src="<?= the_field('image_404', 'option') ?>" alt="404">
    </div>

    <div>
        <h1><?= the_field('titre_404', 'option') ?></h1>
        <p><?= the_field('texte_404', 'option') ?></p>
        <?php $text = "Revenir à l'accueil"; $link = get_site_url(); include 'include/button.php'; ?>
    </div>
</section>

<?php get_footer() ?>