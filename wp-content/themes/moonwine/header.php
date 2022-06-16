<!doctype html>
<html lang="fr" class="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

</head>
<body <?= body_class() ?>>

<header class="header" role="banner">
    <div class="prenav">
        <div class="container">
            <div class="prenav-header">
                <a class="custom-logo" href="<?php echo get_site_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="Logo">
                </a>
                <nav id="prenavbar" class="navbar" role="navigation">

                    <a href="/mon-compte/edit-account/" class="luca-a-class">Détails du compte</a>
                    <a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
                </nav>
            </div>
        </div>
    </div>
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

                <button type="button" id="megamenu-mobile" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false"  aria-label="Navigation mobile">
                    <span class="one" aria-hidden="true"></span>
                    <span class="two" aria-hidden="true"></span>
                    <span class="three" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </nav>
</header>