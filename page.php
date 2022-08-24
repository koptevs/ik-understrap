<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ik-understrap
 */

get_header();

$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );
?>

    <div class="wrapper" id="page-wrapper">

        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

            <div class="row">

                <main class="site-main my-3" id="main">


					<?php
					while ( have_posts() ) :
						the_post();

					?>

                    <h1><?php the_title() ?></h1>
                    <p><?php the_content() ?></p>

                    <?php

//		            get_template_part( 'template-parts/content', 'page' );


					endwhile; // End of the loop.
					?>

                </main><!-- #main -->

            </div><!-- .row -->

        </div><!-- #content -->

    </div><!-- #index-wrapper -->

<?php
get_footer();
