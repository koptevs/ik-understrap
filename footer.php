<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = 'container';
// $container = get_theme_mod( 'understrap_container_type' );
?>

<?php // get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper footer-wrapper" id="wrapper-footer">

		<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">
			<div class="col-12 col-md-4 ">
				<h3 class="text-center mb-4 text-uppercase">Col 1</h3>
				<nav>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu_column-1',
							'menu_class'     => 'nav flex-column footer-menu text-center',
						)
					)
					?>
				</nav>
			</div>

			<div class="col-12 col-md-4 ">
				<h3 class="text-center mb-4 text-uppercase">Col 2</h3>
				<nav>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu_column-2',
							'menu_class'     => 'nav flex-column footer-menu text-center',
						)
					)
					?>
				</nav>
			</div>
			<div class="col-12 col-md-4">
				<h3 class="text-center mb-4 text-uppercase">Col 3</h3>
				<nav>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu_column-3',
							'menu_class'     => 'nav flex-column footer-menu text-center',
						)
					)
					?>
				</nav>
			</div>


		</div><!-- row end -->

	</div><!-- container end -->
	<div class="container">
		<div class="row">
			<div class="text-center">
				<a href="#" class="btn-social btn-behance"><i class="fa fa-behance"></i></a>
				<a href="#" class="btn-social btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
				<a href="#" class="btn-social btn-codepen"><i class="fa fa-codepen"></i></a>
				<a href="#" class="btn-social btn-dribbble"><i class="fa fa-dribbble"></i></a>
				<a href="#" class="btn-social btn-dropbox"><i class="fa fa-dropbox"></i></a>
				<a href="#" class="btn-social btn-flickr"><i class="fa fa-flickr"></i></a>
				<a href="#" class="btn-social btn-github"><i class="fa fa-github-alt"></i></a>
				<a href="#" class="btn-social btn-google-plus"><i class="fa fa-google-plus"></i></a>
				<a href="#" class="btn-social btn-instagram"><i class="fa fa-instagram"></i></a>
				<a href="#" class="btn-social btn-linkedin"><i class="fa fa-linkedin"></i></a>
				<a href="#" class="btn-social btn-stack-overflow"><i class="fa fa-stack-overflow"></i></a>
				<a href="#" class="btn-social btn-twitter"><i class="fa fa-twitter"></i></a>
				<a href="#" class="btn-social btn-vimeo"><i class="fa fa-vimeo-square"></i></a>
				<a href="#" class="btn-social btn-vk"><i class="fa fa-vk"></i></a>
				<a href="#" class="btn-social btn-wordpress"><i class="fa fa-wordpress"></i></a>
				<a href="#" class="btn-social btn-youtube"><i class="fa fa-youtube"></i></a>
				<a href="#" class="btn-social btn-email"><i class="fa fa-envelope"></i></a>
				<a href="#" class="btn-social btn-bitbucket"><i class="bi-alarm"></i></a>
				<a href="#" class="btn-social btn-facebook"><i class="fa fa-facebook"></i></a>
			</div>
			<div class="text-center pt-4">
				<button type="button" class="btn btn-danger" style="width: 120px;">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
						class="bi bi-apple" viewBox="0 0 16 16">
						<path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"></path>
						<path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"></path>
					</svg>
					Button
				</button>
			</div>
		</div>
	</div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
