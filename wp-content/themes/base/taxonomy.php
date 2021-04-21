<?php
    use \base\inc\classes\Constants as Constants;
?>
<?php get_header(); ?>
    <div class="cuisine-container">
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
?>
    <?php foreach ($meals as $meal): ?>
        <div class="post" id="post-<?php echo $meal->ID; ?>">
            <h2><a href="<?php echo get_permalink($meal->ID); ?>" title="<?php echo $meal->post_title; ?>"><?php echo $meal->post_title; ?></a></h2>
        </div>
    <?php endforeach; ?>

    <h2><?php // echo get_the_title(); ?></h2>
<?php get_footer(); ?>