<?php
    if (isset($data) && is_array($data)):
        foreach ($data as $meal): ?>
        <div class="post" id="post-<?php echo $meal->ID; ?>">
            <h2><a href="<?php echo get_permalink($meal->ID); ?>" title="<?php echo $meal->post_title; ?>"><?php echo $meal->post_title; ?></a></h2>
        </div>
<?php
        endforeach;
    endif;
?>