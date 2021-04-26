<?php
    if (isset($data) && is_array($data)):
        foreach ($data as $meal_type): ?>
        <div class="post" id="post-<?php echo $meal_type->ID; ?>">
            <h2>
                <a href="<?php echo get_permalink($meal_type->ID); ?>" title="<?php echo $meal_type->post_title; ?>"><?php echo $meal_type->post_title; ?></a>
                <img src="<?php echo get_the_post_thumbnail_url($meal_type->ID); ?>" alt="<?php echo $meal_type->post_title; ?>" class="meal-list-img-main" />
            </h2>
        </div>
<?php
        endforeach;
    endif;
?>