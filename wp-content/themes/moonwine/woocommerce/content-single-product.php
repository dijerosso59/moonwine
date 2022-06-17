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




	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
