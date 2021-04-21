<?php get_header(); ?>
    <div class="meal-page">
        <h2><?php echo get_the_title(); ?></h2>
        <span><?php print_r(get_queried_object()); ?></span>

        <div>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-main" />

            <div>
                <?php the_content(); ?>
            </div>
        </div>
    </div>


<?php get_footer(); ?>