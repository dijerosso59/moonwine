<!doctype html>
<html lang="fr" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

</head>
<body <?= body_class() ?>>

<div class="prenav">
    <div class="container">
        <div class="prenav-header">
            <a class="custom-logo" href="<?php echo get_site_url(); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo">
            </a>
            <nav class="prenavbar" class="prenavbar" role="navigation">
                <div class="prenav-search">
                    <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
                    <div id="open-form" class="prenav-search_label">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search.svg" alt="Search">
                        <p class="prenav-search_label_text">Recherche</p>
                    </div>
                </div>
                <div class="navigation">
                    <a href="/mon-compte/edit-account/">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/user-circle.svg" alt="">
                        <p class="prenav-search_label_text">Mon compte</p>
                    </a>
                    <a class="cart" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopping-bag.svg" alt="">
                        <span class="cart-contents"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
                        <p class="prenav-search_label_text">Mon panier</p>
                    </a>
                    <button type="button" id="megamenu-mobile" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false"  aria-label="Navigation mobile">
                        <span class="one" aria-hidden="true"></span>
                        <span class="two" aria-hidden="true"></span>
                        <span class="three" aria-hidden="true"></span>
                    </button>
                </div>
            </nav>
        </div>
    </div>
</div>
<header class="header" role="banner">
    <nav id="navbar" class="navbar" role="navigation">
        <div class="container">
            <div id="navbar-header" class="navbar-header" data-open="false">
                <ul class="nav navbar-nav">
                    <?php
                    if ( has_nav_menu( 'header' ) ) {

                        wp_nav_menu(
                            array(
                                'container'  => '',
                                'items_wrap' => '%3$s',
                                'theme_location' => 'header',
                            )
                        );

                    }
                    ?>
                </ul>
                <div class="nav-search">
                    <?php if ( function_exists( 'aws_get_search_form' ) ) { aws_get_search_form(); } ?>
                </div>
            </div>
        </div>
    </nav>
</header>