<?php
/**
 * Template Name: Home
 * @package baking
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-home" align="center" role="main">
        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="home-content">
                    <div class="home-cake">
                        <?php
                        /* Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                        ?>
                    </div>
                    <div class="home-side">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/homeSide.png"/>
                    </div>
                    <div style="clear:both"></div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

            <?php baking_paging_nav(); ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
