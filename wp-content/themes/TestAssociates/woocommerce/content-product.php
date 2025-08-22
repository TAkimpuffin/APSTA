<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.4.0
 */

defined('ABSPATH') || exit;

global $product;
$terms = get_the_terms($product->get_id(), 'product_cat');

$cat = '';

if (!empty($terms) && !is_wp_error($terms)) {
	$category_names = wp_list_pluck($terms, 'name');

	// Convert each category name to lowercase and replace spaces with hyphens
	$sanitized_categories = array_map(function ($name) {
		return strtolower(str_replace(' ', '-', $name));
	}, $category_names);

	// Implode into a single string
	$cat = implode(', ', $sanitized_categories);
}

$bg = get_field('cardsbg', 'options');
?>

<li <?php wc_product_class('cols--3', $product); ?>>
	<div class="product__cardwrapper product__cat product__cat--<?php echo $cat; ?>"
		style="background: url('<?php echo $bg; ?>');">
		<div class="product__card">
			<h3 class="product__title"><?php echo esc_html($product->get_name()); ?></h3>
			<p>Click to find out more</p>
		</div>

		<!-- Modal -->
		<div class="product__modal product__modal--<?php echo $cat; ?>">
			<div class="product__modalinner">

				<div class="product__modaltopbar">
					<div class="product__modalclose"><i class="fa-solid fa-xmark"></i></div>
					<div class="product__contact"><a href=""><i class="fa-solid fa-envelope"></i></a></div>
				</div>
				<div class="product__title">
					<h2><?php echo esc_html($product->get_name()); ?></h2>
					<a href="<?php echo get_bloginfo('url'); ?>/sponsorship-packages" target="_blank"
						class="btn btn--textwhite">Sponsor this category</a>
				</div>

				<div class="product__info">
					<?php echo apply_filters('woocommerce_description', $product->get_description()); ?>
				</div>

				<div class="product__price">
					<div class="product__cart add-to-cart">
						<?php woocommerce_template_loop_add_to_cart(); ?>
					</div>

					<?php if (get_field('spo_price', get_the_ID()) == 'product'): ?>
						<p class="product__cart"><?php echo $product->get_price_html(); ?></p>
					<?php else: ?>
						<p class="product__cart"><?php the_field('spo_customprice', get_the_ID()); ?></p>
					<?php endif; ?>
				</div>

				<div class="product__price">
					<p>(Price may vary depending on conversion rates.)</p>
				</div>


			</div>
		</div>

		<div class="product__buttons">
			<?php woocommerce_template_loop_add_to_cart(); ?>
		</div>


	</div>

</li>