<?php get_header(); ?>

    <section class="content-holder">
        <article class="content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="article">
                <div class="post_thumbnail">
                    <?php 
                        // check if the post or page has a Featured Image assigned to it.
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail();
                        }
                    ?>
                </div>
                <h2><?php echo get_the_title(); ?></h2>
                <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                <p>
                    <small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
                </p>
                <!-- Display a comma separated list of the Post's Categories. -->
                <p class="postmetadata">
                    <?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?>
                </p>
                <?php the_content(); ?>
                <!-- Loads the comment -->
                <?php comments_template(); ?> 
            </div>
            <?php endwhile; else : ?>
                <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
        </article>
        <aside class="sidebar">
            <?php get_sidebar(); ?>
        </aside>
        <div class="clearfix"></div>
    </section>

<?php get_footer(); ?>