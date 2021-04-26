<?php
    use \base\inc\classes\Constants as Constants;

    get_header();

    $meal_type = get_queried_object();
    // print_r(get_queried_object());
?>
    <h2><?php echo get_the_title(); ?></h2>
    <br><br>
<?php
    $meals = get_posts(
        array(
            'numberposts'	=> -1,
            'post_type'		=> Constants::POST_TYPE_MEAL,
            'meta_query' => array(
                array(
                    'key'     => Constants::POST_TYPE_MEAL_TYPE,
                    'value' => '"' . $meal_type->ID . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
                    'compare' => 'LIKE'
                )
            )
        )
    );

    // print_r($meals);
    echo get_template_with_data('inc/template-parts/meals-list.php', $meals);
?>

<?php get_footer(); ?>