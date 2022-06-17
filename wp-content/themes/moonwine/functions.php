<?php

// Fonction indiquant ce que mon thème supporte
function luca_supports () {

    // Titre dynamique dans le header
    add_theme_support('title-tag');

    // Image mise en avant
    add_theme_support('post-thumbnails');

    // Gestion des menus
    add_theme_support('menus');

    // Emplacement du menu de navigation
    register_nav_menu('header', 'En tête du menu');

    // Emplacement du menu du footer
    register_nav_menu('footer', 'Pied de page');

    add_theme_support('woocommerce');
}

// Fonction ajout assets CSS et JS
function luca_assets () {

    wp_register_style('splide.css',  get_template_directory_uri() . '/node_modules/@splidejs/splide/dist/css/splide.min.css');

    wp_register_script('splide.js', get_template_directory_uri() . '/node_modules/@splidejs/splide/dist/js/splide.min.js', [], false, true);

    wp_enqueue_style('splide.css');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('splide.js');
    wp_enqueue_script("script.js", get_template_directory_uri() . "/assets/script.js", ["splide.js", "jquery"], false, true);
}

// Fonction ajout class li menu
function luca_class_menu_li ($classes) {
    $classes[] = 'luca-li-classs';
    return $classes;
}

// Fonction ajout class a menu
function luca_class_menu_a ($attrs) {
    $attrs['class'] = 'luca-a-class';
    return $attrs;
}

// Fonction qui agit sur les éléments de la pagination
function luca_pagination () {

    // Récupère la pagination dans $pagination
    $pagination = paginate_links(['type' => 'array']);

    //Si la pagination est nulle, on ne retourne rien
    if ($pagination == null) {
        return;
    }

    //Affichage de la structure personalisée
    echo '<nav aria-label="Pagination">';
    echo '<ul class="flex justify-center">';
    foreach ($pagination as $page) {
        $active = strpos($page, "current") !== false;
        $class = "p-2 bg-white border border-gray-200 text-blue-500 hover:text-white hover:bg-blue-600 rounded";
        if ($active) {
            $class = "p-2 bg-white border border-gray-200 text-white bg-blue-600 rounded";
        }
        echo '<li class="'.$class.'">';
        echo str_replace('page-numbers', 'luca-a-class', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}

function luca_register_widget () {
    register_sidebar([
        'id' => 'menu',
        'name' => 'Widget Menu',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ]);
}

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}

function ur_theme_start_session()
{
    if (!session_id())
        session_start();
}



add_action("init", "ur_theme_start_session", 1);

// Exectution de chaques fonction sur un hook précis
add_action('after_setup_theme', 'luca_supports');

add_action('wp_enqueue_scripts', 'luca_assets');

add_action('widgets_init', 'luca_register_widget');

// Remet l'éditeur classique WordPress sur le hook use_block_editor_for_post
// add_filter('use_block_editor_for_post', '__return_false', 10);

add_filter('nav_menu_css_class', 'luca_class_menu_li');

add_filter('nav_menu_link_attributes', 'luca_class_menu_a');

add_filter('upload_mimes', 'wpc_mime_types');

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

function woocommerce_header_add_to_cart_fragment( $fragments ) {
    global $woocommerce;

    ob_start(); ?>
    <a class="" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shopping-bag.svg" alt="">
        <span class="cart-contents"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
        <p class="prenav-search_label_text">Mon panier</p>
    </a>
    <?php
    $fragments['a.cart-customlocation'] = ob_get_clean();
    return $fragments;
}

add_theme_support( 'custom-logo' );

add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button id='gform_submit_button_{$form['id']}'>
                <svg viewBox='0 0 25 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                    <path d='M3.99237 2.18876C4.31728 1.95506 4.75043 1.93688 5.09387 2.14251L20.1251 11.1425C20.427 11.3232 20.6116 11.6487 20.6116 12C20.6116 12.3513 20.427 12.6768 20.1251 12.8575L5.09387 21.8575C4.75043 22.0631 4.31728 22.0449 3.99237 21.8112C3.66746 21.5775 3.5132 21.1732 3.60008 20.7831L5.33325 13L10.5928 13C11.1451 13 11.5928 12.5523 11.5928 12C11.5928 11.4477 11.1451 11 10.5928 11L5.33325 11L3.60008 3.21693C3.5132 2.82677 3.66746 2.42246 3.99237 2.18876Z' fill='white'/>
                </svg>
            </button>
    ";
}