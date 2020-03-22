<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>
	
	<!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background" class="padding-top-bottom" <?php if($archi_option['product_thumbnail'] != ''){ ?> style="background-image: url('<?php echo esc_url($archi_option['product_thumbnail']['url']); ?>');" <?php } ?> >
        <div class="container">
            <div class="row">
                <div class="col-md-12">                    
					<h1><?php the_title(); ?></h1>								
                    <?php do_action('breadcrumb_before_main_content'); ?>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

	<div class="col-md-9">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>
	</div>	

	<div class="col-md-3">
		<?php
			/**
			 * woocommerce_sidebar hook
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			do_action( 'woocommerce_sidebar' );
		?>
	</div>	

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

<?php get_footer( 'shop' ); ?>
