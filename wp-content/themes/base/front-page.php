<?php
    use \base\inc\classes\Cuisine as Cuisine;
?>
<?php get_header(); ?>
    <div class="cuisine-container">
    <?php
    $cuisines = Cuisine::getAll();
        foreach ($cuisines as $cuisine) : ?>
        <div class="cuisine-item">
            <div class="image">
                <img src="<?php echo $cuisine['image']; ?>" alt="<?php echo $cuisine['title']; ?>">
            </div>
            <div class="title">
                <span><?php echo $cuisine['title']; ?></span>
            </div>
            <div class="hint">
                <span><?php echo $cuisine['description']; ?></span>
            </div>
        </div>
    <?php
        endforeach;
    ?>
    </div>
    <h2><?php echo get_the_title(); ?></h2>
    <?php // get_sidebar(); ?>
<?php get_footer(); ?>