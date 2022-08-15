<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
$navbar_type = 'collapse-fixed';
//$navbar_type = 'collapse';
$navbar_type = 'offcanvas';
$navbar_fixed = true;
//$navbar_fixed = false;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<!--<body --><?php //body_class(); ?><!-- --><?php //understrap_body_attributes(); ?><!-- -->
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <header id="wrapper-navbar" class="<?php echo $navbar_fixed ? 'fixed-top' : '' ?>">
<!--                    <header id="wrapper-navbar">-->
        <a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content',
				'ikunderstrap' ); ?></a>
		<?php get_template_part( 'global-templates/navbar', $navbar_type ); ?>


        <!--		--><?php //get_template_part( 'global-templates/navbar', $navbar_type . '-' . $bootstrap_version ); ?>
    </header><!-- #wrapper-navbar end -->
    <?php if (!$navbar_fixed) : ?>
        <div style="margin-top: -70px;"></div>
    <?php endif; ?>