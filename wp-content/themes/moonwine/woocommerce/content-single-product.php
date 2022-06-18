<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

    <section class="single-product_desc">
        <div class="container">
            <div class="custom-flex">
                <?php
                /**
                 * Hook: woocommerce_before_single_product_summary.
                 *
                 * @hooked woocommerce_show_product_sale_flash - 10
                 * @hooked woocommerce_show_product_images - 20
                 */
                do_action( 'woocommerce_before_single_product_summary' );
                ?>
                <div class="summary entry-summary">
                    <?php
                    /**
                     * Hook: woocommerce_single_product_summary.
                     *
                     * x @hooked woocommerce_template_single_title - 5
                     * x @hooked woocommerce_template_single_rating - 10
                     * x @hooked woocommerce_template_single_price - 10
                     * x @hooked woocommerce_template_single_excerpt - 20
                     * x @hooked woocommerce_template_single_add_to_cart - 30
                     * x @hooked woocommerce_template_single_meta - 40
                     * x @hooked woocommerce_template_single_sharing - 50
                     * @hooked WC_Structured_Data::generate_product_data() - 60
                     */
                    ?>

                    <div class="custom-flex">
                        <div class="custom-flex_column">
                            <div>
                                <p class="years_cuve"><?php the_field( 'annee_de_la_cuvee' ); ?></p>
                                <?php wc_get_template( 'single-product/title.php' ); ?>
                            </div>
                            <?php wc_get_template( 'single-product/meta.php' ); ?>
                            <?php wc_get_template( 'single-product/short-description.php' ); ?>
                            <a href="#" class="produc-info">Voir toutes les informations</a>
                        </div>
                        <div class="custom-flex_column">
                            <p class="product-status"><?= $product->get_availability()['availability'] ?></p>
                            <div class="product-price">
                                <div class="product-price_abonne">
                                    <p class="product-price_abonne_price">17,00 €</p>
                                    <p class="product-price_abonne_title">Prix abonné</p>
                                </div>
                                <div class="product-price_public">
                                    <?php wc_get_template( 'single-product/price.php' ); ?>
                                    <p class="product-price_public_title">Prix public</p>
                                </div>
                                <div></div>
                            </div>
                            <div class="product-quantity">
                                <p class="product-quantity_title">Quantité</p>
                                <?php wc_get_template( 'single-product/add-to-cart/simple.php' ); ?>
                            </div>

                            <div class="product-info">
                                <div class="product-info_paiement">
                                    <svg width="19" height="30" viewBox="0 0 19 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.4023 12.2159H13.2773V8.84091C13.2773 6.34482 11.2383 4.34091 8.77734 4.34091C6.28125 4.34091 4.27734 6.37997 4.27734 8.84091V12.1808L3.15234 12.2159C1.88672 12.2159 0.902344 13.2003 0.902344 14.4659V20.0909C0.902344 21.3214 1.88672 22.3409 3.15234 22.3409H14.4023C15.6328 22.3409 16.6523 21.3214 16.6523 20.0909V14.4659C16.6523 13.2354 15.6328 12.2159 14.4023 12.2159ZM5.40234 8.84091C5.40234 7.01279 6.91406 5.46591 8.77734 5.46591C10.6055 5.46591 12.1523 7.01279 12.1523 8.84091V12.2159H5.40234V8.84091ZM15.5273 20.0909C15.5273 20.7237 15 21.2159 14.4023 21.2159H3.15234C2.51953 21.2159 2.02734 20.7237 2.02734 20.0909V14.4659C2.02734 13.8683 2.51953 13.3409 3.15234 13.3409H14.4023C15 13.3409 15.5273 13.8683 15.5273 14.4659V20.0909ZM8.77734 15.5909C8.46094 15.5909 8.21484 15.837 8.21484 16.1534V18.4034C8.21484 18.6847 8.46094 18.9308 8.77734 18.9308C9.05859 18.9308 9.33984 18.7198 9.33984 18.4034V16.1534C9.33984 15.8722 9.05859 15.5909 8.77734 15.5909Z" fill="black"/>
                                    </svg>
                                    Paiement sécurisé
                                </div>
                                <div class="product-info_livraison">
                                    <svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.07227 2.59091V3.71591H9.13477C9.41602 3.71591 9.69727 3.99716 9.69727 4.27841C9.69727 4.59482 9.41602 4.84091 9.13477 4.84091H1.25977C0.943359 4.84091 0.697266 4.59482 0.697266 4.27841C0.697266 3.99716 0.943359 3.71591 1.25977 3.71591H2.94727V2.59091C2.94727 1.36044 3.93164 0.340912 5.19727 0.340912H13.0723C14.3027 0.340912 15.3223 1.36044 15.3223 2.59091V3.71591H17.6074C18.0996 3.71591 18.5566 3.96201 18.873 4.31357L21.6504 7.54794C21.8965 7.86435 22.0723 8.25107 22.0723 8.63779V13.8409H22.6348C22.916 13.8409 23.1973 14.1222 23.1973 14.4034C23.1973 14.7198 22.916 14.9659 22.6348 14.9659H20.9473C20.9473 16.8292 19.4355 18.3409 17.5723 18.3409C15.6738 18.3409 14.1973 16.8292 14.1973 14.9659H9.66211C9.66211 16.8292 8.18555 18.3409 6.28711 18.3409C4.42383 18.3409 2.91211 16.8292 2.91211 14.9659V10.4659H4.03711V12.4698C4.63477 11.9425 5.44336 11.5909 6.28711 11.5909C7.76367 11.5909 9.0293 12.5401 9.48633 13.8409H14.1973V2.59091C14.1973 1.99326 13.6699 1.46591 13.0723 1.46591H5.16211C4.56445 1.46591 4.03711 1.99326 4.03711 2.59091H4.07227ZM18.0293 5.05185C17.9238 4.91122 17.748 4.84091 17.6074 4.84091H15.3223V8.21591H20.7363L18.0293 5.05185ZM15.3223 9.34091V12.4698C15.8848 11.9425 16.6934 11.5909 17.5723 11.5909C19.0137 11.5909 20.2793 12.5401 20.7363 13.8409H20.9473V9.34091H15.3223ZM6.32227 12.7159C5.05664 12.7159 4.07227 13.7354 4.07227 14.9659C4.07227 16.2315 5.05664 17.2159 6.32227 17.2159C7.55273 17.2159 8.57227 16.2315 8.57227 14.9659C8.57227 13.7354 7.55273 12.7159 6.32227 12.7159ZM17.5723 17.2159C18.8027 17.2159 19.8223 16.2315 19.8223 14.9659C19.8223 13.7354 18.8027 12.7159 17.5723 12.7159C16.3066 12.7159 15.3223 13.7354 15.3223 14.9659C15.3223 16.2315 16.3066 17.2159 17.5723 17.2159ZM10.2598 5.96591C10.541 5.96591 10.8223 6.24716 10.8223 6.52841C10.8223 6.84482 10.541 7.09091 10.2598 7.09091H2.38477C2.06836 7.09091 1.82227 6.84482 1.82227 6.52841C1.82227 6.24716 2.06836 5.96591 2.38477 5.96591H10.2598ZM9.13477 8.21591C9.41602 8.21591 9.69727 8.49716 9.69727 8.77841C9.69727 9.09482 9.41602 9.34091 9.13477 9.34091H1.25977C0.943359 9.34091 0.697266 9.09482 0.697266 8.77841C0.697266 8.49716 0.943359 8.21591 1.25977 8.21591H9.13477Z" fill="black"/>
                                    </svg>
                                    Livraison rapide
                                </div>
                            </div>

                            <hr>

                            <div class="product-livraison">
                                <p class="product-livraison_title">Options de livraison</p>
                                <div class="product-livraison_column">
                                    <p class="product-livraison_price">En point relais : <b>6,50€</b></p>
                                    <p class="product-livraison_delay">4 à 6 jours ouvrés</p>
                                </div>
                                <div class="product-livraison_column">
                                    <p class="product-livraison_price">À domicile : <b>9,99€</b></p>
                                    <p class="product-livraison_delay">4 à 6 jours ouvrés</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    remove_action('woocommerce_single_product_summary','woocommerce_template_single_title',5);
                    remove_action('woocommerce_single_product_summary','woocommerce_template_single_rating',10);
                    remove_action('woocommerce_single_product_summary','woocommerce_template_single_price',10);
                    remove_action('woocommerce_single_product_summary','woocommerce_template_single_excerpt',20);
                    remove_action('woocommerce_single_product_summary','woocommerce_template_single_add_to_cart',30);
                    remove_action('woocommerce_single_product_summary','woocommerce_template_single_meta',40);
                    remove_action('woocommerce_single_product_summary','woocommerce_template_single_sharing',50);
                    do_action( 'woocommerce_single_product_summary' );
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="product-composition">
        <div class="container">
            <div class="product-composition--content">
                <div class="product-composition--content_column">
                    <div class="shadowed-block">
                        <div class="card">
                            <div class="card-body">
                                <input class="single-toggle-input" type="checkbox" name="singletab" id="tab1" data-com.bitwarden.browser.user-edited="yes">
                                <label class="single-toggle-label" for="tab1">Composition</label>
                                <div class="single-toggle-content">
                                    <p class="card-text">
                                        70% Grenache noir
                                        <br>
                                        30% Malvoisie
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <input class="single-toggle-input" type="checkbox" name="singletab" id="tab2">
                                <label class="single-toggle-label" for="tab2">Conservation & utilisation</label>
                                <div class="single-toggle-content">
                                    <p class="card-text">
                                        lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <input class="single-toggle-input" type="checkbox" name="singletab" id="tab4">
                                <label class="single-toggle-label" for="tab4">Informations pratiques</label>
                                <div class="single-toggle-content">
                                    <p class="card-text">
                                        lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-composition--content_column">
                    <h4 class="product-composition--content_column_title">Comment servir cette cuvée ?
                    <ul class="list-item">
                        Voici nos idées de plats pour accompagner cette cuvée :
                        <li class="items">viande séchée,</li>
                        <li class="items">anguille grillée,</li>
                        <li class="items">bouchées à la reine,</li>
                        <li class="items">poivron à la vapeur,</li>
                        <li class="items">crevettes sautées,</li>
                        <li class="items">curry de poulet,</li>
                        <li class="items"> fromage de chèvre…</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="product-desc">
       <div class="container">
           <div class="product-desc_content">
               <div class="product-desc_column">
                   <?php
                   /**
                    * Hook: woocommerce_after_single_product_summary.
                    *
                    * @hooked woocommerce_output_product_data_tabs - 10
                    * @hooked woocommerce_upsell_display - 15
                    * @hooked woocommerce_output_related_products - 20
                    */

                   remove_action('woocommerce_after_single_product_summary','woocommerce_upsell_display',15);
                   remove_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',20);
                   do_action( 'woocommerce_after_single_product_summary' );
                   ?>
               </div>
               <div class="product-desc_column">
                   <?php
                   $image = get_field('image-desc');
                   if( !empty( $image ) ): ?>
                       <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                   <?php endif; ?>
               </div>
           </div>
       </div>
    </section>

    <section class="product-reviews">
        <div class="container">
            <?php
            /**
             * Hook: woocommerce_after_single_product_summary.
             *
             * @hooked woocommerce_output_product_data_tabs - 10
             * @hooked woocommerce_upsell_display - 15
             * @hooked woocommerce_output_related_products - 20
             */
            add_action('woocommerce_after_single_product_summary','woocommerce_upsell_display',15);
            add_action('woocommerce_after_single_product_summary','woocommerce_output_related_products',20);
            remove_action('woocommerce_after_single_product_summary','woocommerce_output_product_data_tabs',10);
            do_action( 'woocommerce_after_single_product_summary' );
            ?>
        </div>
    </section>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
