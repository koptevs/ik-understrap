<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
    <!--	--><?php //get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

    <div class="wrapper" id="index-wrapper">

        <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

            <div class="row">

                <!-- Do the left sidebar check and opens the primary div -->
                <!--				--><?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

                <main class="site-main" id="main">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad adipisci alias amet animi culpa
                        cumque debitis dolor dolore dolorem doloribus ducimus esse, eum eveniet ex excepturi expedita
                        fugiat hic illo itaque natus nisi non numquam obcaecati odio odit omnis optio placeat porro,
                        quam quod ratione, recusandae temporibus unde veniam voluptate voluptatibus. A ad consequuntur
                        cupiditate debitis eius eos, eum excepturi fugiat harum iure, mollitia natus, nostrum obcaecati
                        provident quis vitae voluptas. Dicta neque nulla velit voluptate. Blanditiis cum dignissimos ex
                        modi nihil optio placeat quaerat, repellat! Ipsum iste iure laboriosam neque placeat praesentium
                        tenetur? Accusamus accusantium ad alias, aliquid amet aspernatur assumenda blanditiis
                        consequatur dignissimos doloremque eius eligendi excepturi expedita explicabo fuga labore minima
                        necessitatibus neque nesciunt nisi obcaecati odio perferendis perspiciatis provident qui
                        quisquam recusandae repellendus repudiandae sed tempora temporibus vero voluptates voluptatum!
                        Consequatur cum doloribus illo non sequi. Asperiores aspernatur assumenda, beatae eveniet
                        expedita fuga iste iure maxime molestiae necessitatibus nemo nihil reiciendis, sapiente sequi
                        tempore! Ex explicabo fuga fugit ipsa laborum libero magnam sequi tempore vel vero. Cumque
                        cupiditate dolorum eligendi iste nostrum numquam pariatur quae quos suscipit voluptatum! A
                        accusantium, alias aliquam corporis dicta doloremque ea eius eum ex expedita, ipsa magnam minima
                        molestiae nam nisi nulla officiis optio perferendis praesentium provident quibusdam quidem quo
                        repudiandae sequi tempore ullam ut vero. Alias architecto commodi culpa, dolorem ducimus eius
                        expedita explicabo magni, minus natus neque officia placeat quaerat, quidem quo recusandae
                        repudiandae similique soluta tempora vitae. Placeat quis veniam voluptas. Accusamus consequatur
                        deleniti dolores dolorum eius excepturi, inventore libero magni nemo numquam omnis quo quos
                        similique sit, vel veritatis voluptatem. Aliquam corporis debitis distinctio, eum similique sit
                        voluptas! Inventore laboriosam neque qui quis recusandae reiciendis sint suscipit? Architecto
                        aspernatur autem consectetur cum deleniti dignissimos dolor doloremque ea expedita illum
                        incidunt labore laboriosam libero minus mollitia nemo neque quaerat quam quidem quis quisquam,
                        quod recusandae sit temporibus unde ut vitae voluptates? Commodi, consectetur cumque dolore
                        laboriosam odit quis totam. Animi aut commodi ex illo magni molestiae necessitatibus obcaecati
                        officiis provident quibusdam? Ad distinctio facilis harum incidunt laboriosam maxime nihil
                        officia quae sint voluptatibus. A architecto asperiores at commodi consequatur, error id, ipsum
                        mollitia nemo neque qui, ratione repudiandae similique soluta suscipit. At deserunt, eveniet
                        nihil quae quaerat repudiandae! Architecto consectetur dolor nisi porro soluta, tempora
                        temporibus? Dolores et ipsa maiores nihil non odit quidem suscipit ullam. A accusamus alias
                        aspernatur atque doloremque dolorum enim eveniet ex, facere fuga impedit ipsa minima, natus
                        necessitatibus nesciunt nihil nostrum odit tempore. Ad architecto aspernatur assumenda at aut
                        beatae cum, distinctio doloremque doloribus ducimus eaque esse est et exercitationem illum, ipsa
                        iste itaque iure laborum neque pariatur perspiciatis provident qui rem unde, velit vitae? At
                        autem dolore eius esse eveniet excepturi exercitationem explicabo ipsam laboriosam modi mollitia
                        nam odit pariatur, perspiciatis quibusdam quo recusandae sint suscipit vitae voluptatem! A ab
                        accusamus accusantium ad amet architecto aspernatur assumenda autem cum delectus deserunt dicta
                        doloremque dolores eos excepturi exercitationem fugit inventore maiores officia, reiciendis
                        repellat repudiandae rerum sed temporibus unde vitae voluptatibus, voluptatum!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad adipisci alias amet animi culpa
                        cumque debitis dolor dolore dolorem doloribus ducimus esse, eum eveniet ex excepturi expedita
                        fugiat hic illo itaque natus nisi non numquam obcaecati odio odit omnis optio placeat porro,
                        quam quod ratione, recusandae temporibus unde veniam voluptate voluptatibus. A ad consequuntur
                        cupiditate debitis eius eos, eum excepturi fugiat harum iure, mollitia natus, nostrum obcaecati
                        provident quis vitae voluptas. Dicta neque nulla velit voluptate. Blanditiis cum dignissimos ex
                        modi nihil optio placeat quaerat, repellat! Ipsum iste iure laboriosam neque placeat praesentium
                        tenetur? Accusamus accusantium ad alias, aliquid amet aspernatur assumenda blanditiis
                        consequatur dignissimos doloremque eius eligendi excepturi expedita explicabo fuga labore minima
                        necessitatibus neque nesciunt nisi obcaecati odio perferendis perspiciatis provident qui
                        quisquam recusandae repellendus repudiandae sed tempora temporibus vero voluptates voluptatum!
                        Consequatur cum doloribus illo non sequi. Asperiores aspernatur assumenda, beatae eveniet
                        expedita fuga iste iure maxime molestiae necessitatibus nemo nihil reiciendis, sapiente sequi
                        tempore! Ex explicabo fuga fugit ipsa laborum libero magnam sequi tempore vel vero. Cumque
                        cupiditate dolorum eligendi iste nostrum numquam pariatur quae quos suscipit voluptatum! A
                        accusantium, alias aliquam corporis dicta doloremque ea eius eum ex expedita, ipsa magnam minima
                        molestiae nam nisi nulla officiis optio perferendis praesentium provident quibusdam quidem quo
                        repudiandae sequi tempore ullam ut vero. Alias architecto commodi culpa, dolorem ducimus eius
                        expedita explicabo magni, minus natus neque officia placeat quaerat, quidem quo recusandae
                        repudiandae similique soluta tempora vitae. Placeat quis veniam voluptas. Accusamus consequatur
                        deleniti dolores dolorum eius excepturi, inventore libero magni nemo numquam omnis quo quos
                        similique sit, vel veritatis voluptatem. Aliquam corporis debitis distinctio, eum similique sit
                        voluptas! Inventore laboriosam neque qui quis recusandae reiciendis sint suscipit? Architecto
                        aspernatur autem consectetur cum deleniti dignissimos dolor doloremque ea expedita illum
                        incidunt labore laboriosam libero minus mollitia nemo neque quaerat quam quidem quis quisquam,
                        quod recusandae sit temporibus unde ut vitae voluptates? Commodi, consectetur cumque dolore
                        laboriosam odit quis totam. Animi aut commodi ex illo magni molestiae necessitatibus obcaecati
                        officiis provident quibusdam? Ad distinctio facilis harum incidunt laboriosam maxime nihil
                        officia quae sint voluptatibus. A architecto asperiores at commodi consequatur, error id, ipsum
                        mollitia nemo neque qui, ratione repudiandae similique soluta suscipit. At deserunt, eveniet
                        nihil quae quaerat repudiandae! Architecto consectetur dolor nisi porro soluta, tempora
                        temporibus? Dolores et ipsa maiores nihil non odit quidem suscipit ullam. A accusamus alias
                        aspernatur atque doloremque dolorum enim eveniet ex, facere fuga impedit ipsa minima, natus
                        necessitatibus nesciunt nihil nostrum odit tempore. Ad architecto aspernatur assumenda at aut
                        beatae cum, distinctio doloremque doloribus ducimus eaque esse est et exercitationem illum, ipsa
                        iste itaque iure laborum neque pariatur perspiciatis provident qui rem unde, velit vitae? At
                        autem dolore eius esse eveniet excepturi exercitationem explicabo ipsam laboriosam modi mollitia
                        nam odit pariatur, perspiciatis quibusdam quo recusandae sint suscipit vitae voluptatem! A ab
                        accusamus accusantium ad amet architecto aspernatur assumenda autem cum delectus deserunt dicta
                        doloremque dolores eos excepturi exercitationem fugit inventore maiores officia, reiciendis
                        repellat repudiandae rerum sed temporibus unde vitae voluptatibus, voluptatum!</p>
					<?php
					if ( have_posts() ) {
						// Start the Loop.
						while ( have_posts() ) {
							the_post(); ?>
                            <h1><?php the_title() ?></h1>
                            <p><?php the_content(); ?></p>
							<?php /*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
//							get_template_part( 'loop-templates/content', get_post_format() );
						}
					} else {
//						get_template_part( 'loop-templates/content', 'none' );
					}
					?>
                </main><!-- #main -->

                <!-- The pagination component -->
                <!--				--><?php //understrap_pagination(); ?>

                <!-- Do the right sidebar check -->
                <!--				--><?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

            </div><!-- .row -->

        </div><!-- #content -->

    </div><!-- #index-wrapper -->

<?php
get_footer();
