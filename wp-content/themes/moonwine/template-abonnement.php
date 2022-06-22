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
                    <?php $text = $data['lien_box']['title']; $link = $data['lien_box']['url']; include 'include/button.php'; ?>
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
                <?php $text = $block['lien_abonnement']['title']; $link = $block['lien_abonnement']['url']; include 'include/button.php'; ?>
            </div>
            <?php endforeach ?>
        </div>
        <div class="unit-subscription">
            <?php foreach ($data['liste_boxes'] as $block) : ?>
            <div class="element-subscription">
                <div id="<?= $block['id_box'] ?>">
                    <p class="title-subscription"><?= $block['titre_list_boxes'] ?></p>
                    <div class="descr-subscription">
                        <h1><?= $block['prix_list_boxes'] ?></h1>
                    </div>
                    <ul class="advantages-subscription">
                        <?php foreach ($block['list_advantages_boxes'] as $advantages) : ?>
                        <li><?= $advantages['titre_advantages_boxes'] ?></li>
                        <?php endforeach ?>
                    </ul>
                    <?php $text = $block['lien_list_box']['title']; $link = $block['lien_list_box']['url']; include 'include/button.php'; ?>
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>