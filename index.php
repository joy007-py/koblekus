<?php get_header() ?>

<main id="main">
   
    <?php if( have_posts() ) : ?>

        <?php while( have_posts() ) : the_post() ?>

            <?php get_template_part('template-parts/content/content') ?>

        <?php endwhile ?>

    <?php else : ?>

        <?php _e( 'Sorry, no posts matched your criteria.', 'kolbekussoft' );  ?>
        
    <?php endif ?>

</main>

<?php get_footer() ?>