<?php
    use \base\inc\classes\Constants as Constants;
?>
<?php get_header(); ?>
    <?php
        print_r(get_queried_object());
    ?>
    <h2><?php echo get_the_title(); ?></h2>
<?php get_footer(); ?>