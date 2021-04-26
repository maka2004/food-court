<?php
    use \base\inc\classes\Constants as Constants;

    get_header();

    $point = get_queried_object();
    // print_r(get_queried_object());
?>
    <h2><?php echo get_the_title(); ?></h2>
    <hr><br><br>
<?php
    $meals = get_posts(
        array(
            'numberposts'	=> -1,
            'post_type'		=> Constants::POST_TYPE_MEAL,
            'meta_key'		=> Constants::POST_TYPE_POINT,
            'meta_value'	=> $point->ID
        )
    );

    // $meta_location = get_post_meta($post->ID, 'location', false);

    $meal_type_ids = [];
    foreach ($meals as $meal) {
        foreach ($meal->meal_type as $meal_type) {
            $meal_type_ids[$meal_type] = $meal_type;
        }
    }
//    print_r($meal_type_ids);
    $meal_types = get_posts(
        array(
            'numberposts'	=> -1,
            'post_type'		=> Constants::POST_TYPE_MEAL_TYPE,
            'include' => $meal_type_ids
        )
    );
    // print_r($meal_types);
?>
    <h3><i>Типы блюд</i></h3>
<?php
    echo get_template_with_data('inc/template-parts/meal_types-list.php', $meal_types);
?>

    <hr>
    <h3><i>Список блюд</i></h3>
<?php
    echo get_template_with_data('inc/template-parts/meals-list.php', $meals);
?>

<?php get_footer(); ?>