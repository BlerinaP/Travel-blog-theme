<?php get_header(); ?>

    <h2 class="text-center">Latest Entries</h2>
    <section class="container content">
        <div class="row">
            <?php $args = array(
             'posts_perpage' => 6
            );  ?>
            <?php $entries = new WP_Query($args); while($entries->have_posts()): $entries->the_post();?>
               <h3><?php the_title();?></h3>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    </section>

<?php get_footer();?>