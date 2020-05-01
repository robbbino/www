<?php
/**
 * Displays the featured image
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */


// Remove deault If statement (always pull in featured media even if blank - it is replaced with colour in style.css).
// if ( has_post_thumbnail() && ! post_password_required() ) {

	$featured_media_inner_classes = '';

	// Make the featured media thinner on archive pages, plus give a random background colour that will be displayed if no image is selected.
	if ( ! is_singular() ) {
		$background_colors = array('#65A9AC', '#005500', '#E9DB00', '#FF4500', '#9AB19A');
		$rand_background = $background_colors[array_rand($background_colors)];
		$featured_media_inner_classes .= ' medium';
	}
	?>

	<figure class="featured-media">

		<div class="featured-media-inner section-inner<?php echo $featured_media_inner_classes; //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>" style="background-color:<?php echo $rand_background; ?>">

			<?php
			the_post_thumbnail();

			$caption = get_the_post_thumbnail_caption();

			if ( $caption ) {
				?>

				<figcaption class="wp-caption-text"><?php echo esc_html( $caption ); ?></figcaption>

				<?php
			}
			?>

		</div><!-- .featured-media-inner -->

	</figure><!-- .featured-media -->

	<?php
//}

