<?php
    if (isset($data) && is_array($data)):
        foreach ($data as $meal): ?>
        <div class="post" id="post-<?php echo $meal->ID; ?>">
            <h2>
                <a href="<?php echo get_permalink($meal->ID); ?>" title="<?php echo $meal->post_title; ?>"><?php echo $meal->post_title; ?></a>
                <img src="<?php echo get_the_post_thumbnail_url($meal->ID); ?>" alt="<?php echo $meal->post_title; ?>" class="meal-list-img-main" />
            </h2>
        </div>
<?php
        endforeach;
    endif;
?>