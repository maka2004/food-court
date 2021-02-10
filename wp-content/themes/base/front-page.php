<?php get_header(); ?>
    <div class="kitchen-container">
    <?php
        $kitchens = get_kitchens_list();
        foreach ($kitchens as $kitchen) : ?>
        <div class="kitchen-item">
            <div class="image">
                <img src="<?php echo $kitchen['image']; ?>" alt="<?php echo $kitchen['title']; ?>">
            </div>
            <div class="title">
                <span><?php echo $kitchen['title']; ?></span>
            </div>
            <div class="hint">
                <span><?php echo $kitchen['description']; ?></span>
            </div>
        </div>
    <?php
        endforeach;
    ?>
    </div>
    <h2><?php echo get_the_title(); ?></h2>
    <?php // get_sidebar(); ?>
<?php get_footer(); ?>