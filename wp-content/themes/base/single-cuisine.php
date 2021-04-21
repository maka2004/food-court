<?php
    use \base\inc\classes\Constants as Constants;
?>
<?php get_header(); ?>
    <h2><?php echo get_the_title(); ?></h2>
    <?php
        $cuisine = get_queried_object();
        print_r(get_queried_object());
    ?>
<br><br>
    <?php
        $meals = get_posts(
            array(
                'numberposts'	=> -1,
                'post_type'		=> Constants::POST_TYPE_MEAL,
                'meta_key'		=> Constants::POST_TYPE_CUISINE,
                'meta_value'	=> $cuisine->ID
            )
        );

        print_r($meals);
    ?>
    <br>
    <?php foreach ($meals as $meal): ?>
        <div class="post" id="post-<?php echo $meal->ID; ?>">
            <h2>
                <a href="<?php echo get_permalink($meal->ID); ?>" title="<?php echo $meal->post_title; ?>"><?php echo $meal->post_title; ?></a>
                <img src="<?php echo get_the_post_thumbnail_url($meal->ID); ?>" alt="<?php echo $meal->post_title; ?>" class="meal-list-img-main" />
            </h2>
        </div>
    <?php endforeach; ?>

<?php get_footer(); ?>