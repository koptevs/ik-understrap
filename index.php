<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
get_header();

$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );
?>

<div class="wrapper" id="page-wrapper">

    <main class="site-main my-3" id="main">
        <div class="container">
            <h1 class="text-center text-iky text-uppercase">Welcome to our blog!</h1>
			<?php
			while ( have_posts() ) :
				the_post();
				?>
                <a href="<?php the_permalink(); ?>">
                    <h2 class="text-uppercase text-iky"><?php the_title(); ?></h2>
                </a>
                <div class="py-1 px-3 mb-2 bg-iky d-inline-block text-white">
                    Posted by: <?php the_author_posts_link(); ?> on <?php the_time( 'd.m.Y' ); ?>
                    in <?php echo get_the_category_list( ', ' ); ?>
                </div>
				<?php the_content(); ?>
                excerpt:
				<?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" class="btn btn-outline-iky mb-4">Continue reading &raquo;</a>

			<?php endwhile; ?>
        </div>
    </main>
</div>

<?php
get_footer();
?>
