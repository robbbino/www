<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 *
 * Modified for manskligamoten.com
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>




		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<div class="header-inner section-inner">

				<div class="header-titles-wrapper">

					<?php
					// Check whether the header search is activated in the customizer.
					$enable_header_search = get_theme_mod( 'enable_header_search', true );

					if ( true === $enable_header_search ) {

						?>

						<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
							<span class="toggle-inner">
								<span class="toggle-icon">
									<?php twentytwenty_the_theme_svg( 'search' ); ?>
								</span>
								<span class="toggle-text"><?php _e( 'Search', 'twentytwenty' ); ?></span>
							</span>
						</button><!-- .search-toggle -->

					<?php } ?>

					<div class="header-titles">

						<?php
							// Site title or logo.
							twentytwenty_site_logo();

							// Site description.
							twentytwenty_site_description();
						?>

					</div><!-- .header-titles -->

<!-- There was a button toggle here. -->

				</div><!-- .header-titles-wrapper -->
			
<!-- There was a .header-navigation-wrapper div here -->

			</div><!-- .header-inner section-inner -->

			<?php
			// Output the search modal (if it is activated in the customizer).
			if ( true === $enable_header_search ) {
				get_template_part( 'template-parts/modal-search' );
			}
			?>

		</header><!-- #site-header -->

		<section id="in-page-navigation" class="header-footer-group not-sticky" role="banner">
		
			<ul id="main-menu">
				<?php
					if ( has_nav_menu( 'primary' ) ) {
						wp_nav_menu(
							array(
								'container'  => '',
								'items_wrap' => '%3$s',
								'theme_location' => 'primary',
							)
						);

					} elseif ( ! has_nav_menu( 'expanded' ) ) {

						wp_list_pages(
							array(
								'match_menu_classes' => true,
								'show_sub_menu_icons' => true,
								'title_li' => false,
								'walker'   => new TwentyTwenty_Walker_Page(),
							)
						);
					}
				?>
			 </ul> <!-- .menu -->
		</section> <!-- #in-page-navigation -->
			
			
	<script>
	// When the user scrolls the page, execute stickyHeader
	window.onscroll = function() {stickyHeader()};

	// Get the header	
	var header = document.getElementById("in-page-navigation");
	
	// Get the top heading to add padding
	var headerGone = document.getElementById("site-header");
	// Get the offset position of the navbar
	var sticky = header.offsetTop;

	// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position. Also add/remove padding for the body
	function stickyHeader() {
		if (window.pageYOffset > sticky) {
			header.classList.add("sticky");
			headerGone.classList.add("sticky-offset");
		} else {
			header.classList.remove("sticky");
			headerGone.classList.remove("sticky-offset");
		}
	}
	
//	if (localhost/manskligamoten/.test(window.location.href)) {
//	document.getElementsByClassName('entry-header').style.display = 'none';
//}

/*	window.onload = function() {hideHeading()}

	function hideHeading() {
		var url = window.location.href;
		if(url == "http://localhost/manskligamoten/") {
//			document.getElementsByClassName('entry-header').style.display = 'none';
			var x = document.getElementsByClassName("entry-header");
			var i;
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
		}
	}
*/
	</script>			

		<?php
		// Output the menu modal.
	//	get_template_part( 'template-parts/modal-menu' );


