<?php
    use \base\inc\classes\Constants as Constants;
?>
<?php get_header(); ?>
<?php
    $slug = get_queried_object()->slug;

    $meals = get_posts(
        array(
            'posts_per_page' => -1,
            'post_type' => Constants::POST_TYPE_MEAL,
            'tax_query' => array(
                array(
                    'taxonomy' => 'taxonomy',
                    'field' => 'slug',
                    'terms' => $slug,
                )
            )
        )
    );

    echo get_template_with_data('inc/template-parts/meals-list.php', $meals);
?>

<?php get_footer(); ?>