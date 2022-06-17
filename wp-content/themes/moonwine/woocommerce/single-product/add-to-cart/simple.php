<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}


if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<?php
		do_action( 'woocommerce_before_add_to_cart_quantity' ); ?>

        <div class="product-quantity-choice number-input">
            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="product-quantity-choice_down">-</button>
            <?php
            woocommerce_quantity_input(
                array(
                    'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                    'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                    'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                )
            );
            ?>
            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="product-quantity-choice_up">+</button>
        </div>


        <?php
		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="single_add_to_cart_button button alt btn"><?php echo esc_html( $product->single_add_to_cart_text() ); ?>
            <svg width="38" height="13" viewBox="0 0 38 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                        d="M36.9924 7.06247C37.303 6.75183 37.303 6.24817 36.9924 5.93753L31.9301 0.875287C31.6195 0.564643 31.1158 0.564643 30.8052 0.875287C30.4945 1.18593 30.4945 1.68959 30.8052 2.00023L35.305 6.5L30.8052 10.9998C30.4945 11.3104 30.4945 11.8141 30.8052 12.1247C31.1158 12.4354 31.6195 12.4354 31.9301 12.1247L36.9924 7.06247ZM0 7.29545H36.4299V5.70455H0V7.29545Z"
                        fill="#343434" />
            </svg>
        </button>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
