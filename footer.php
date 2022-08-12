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
//$container = get_theme_mod( 'understrap_container_type' );
?>

<?php //get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper footer-wrapper" id="wrapper-footer">

    <div class="<?php echo esc_attr( $container ); ?>">

        <div class="row">
            <div class="col-12 col-md-4 ">
                <h3 class="text-center mb-4 text-uppercase">Col 1</h3>
                <nav>
					<?php wp_nav_menu( array(
						'theme_location' => 'footer-menu_column-1',
						'menu_class'     => 'nav flex-column footer-menu text-center',

					) ) ?>
                </nav>
            </div>

            <div class="col-12 col-md-4 ">
                <h3 class="text-center mb-4 text-uppercase">Col 2</h3>
                <nav>
					<?php wp_nav_menu( array(
						'theme_location' => 'footer-menu_column-2',
						'menu_class'     => 'nav flex-column footer-menu text-center',

					) ) ?>
                </nav>
            </div>
            <div class="col-12 col-md-4 ">
                <h3 class="text-center mb-4 text-uppercase">Col 3</h3>
                <nav>
					<?php wp_nav_menu( array(
						'theme_location' => 'footer-menu_column-3',
						'menu_class'     => 'nav flex-column footer-menu text-center',
					) ) ?>
                </nav>
            </div>



        </div><!-- row end -->

    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

