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
        $posts = get_posts(
            array(
                'numberposts'	=> -1,
                'post_type'		=> Constants::POST_TYPE_MEAL,
                'meta_key'		=> Constants::POST_TYPE_CUISINE,
                'meta_value'	=> $cuisine->ID
            )
        );

        print_r($posts);
    ?>

<?php get_footer(); ?>