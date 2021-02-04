<?php get_header(); ?>

    <h2>Front</h2>

    <?php
        $kitchens = get_kitchens_list();
        foreach ($kitchens as $kitchen) : ?>
        <div>
            <span><?php echo $kitchen['title']; ?></span>
            <img src="<?php echo $kitchen['image']; ?>" alt="<?php echo $kitchen['title']; ?>">
            <span><?php echo $kitchen['description']; ?></span>
        </div>
    <?php
        endforeach;
    ?>
    <?php get_sidebar(); ?>
<?php get_footer(); ?>