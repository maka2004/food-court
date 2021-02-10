<?php

    /* Constants */
    if (!defined('THEME_PATH')) {
        define('THEME_PATH', get_template_directory_uri()); // w.o. slash
    }

    class constants {
        const POST_TYPE_POINT = 'point';
        const POST_TYPE_KITCHEN = 'kitchen';
        const POST_TYPE_MEAL = 'meal';
    }

    // theme support
    add_theme_support('menus');
    add_theme_support('post-thumbnails');

    /** */
    add_action('admin_menu', 'header_options_page');
    function header_options_page() {
        add_options_page('Header options', 'Header options', 'manage_options', 'header_options', '', null);
    }

    //
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
        // acf_add_options_sub_page( 'Header' );
        // acf_add_options_sub_page( 'Footer' );
    }

    /* Scripts */
    add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
    function theme_add_scripts() {
        // css
        // wp_enqueue_style( 'style-name', get_stylesheet_uri() . '/style.css' );
        wp_enqueue_style( 'style-bootstrap', THEME_PATH . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'style-main', THEME_PATH . '/css/style.css' );

        // js
        wp_enqueue_script( 'script-bootstrap', THEME_PATH . '/js/bootstrap.min.js', array(), '1.0', true );
    }

    /* Taxonomies */
    add_action( 'init', 'create_taxonomy' );
    function create_taxonomy(){

        // Meal type
        register_taxonomy( 'taxonomy', [ constants::POST_TYPE_MEAL ], [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => 'Meal types',
                'singular_name'     => 'Meal type',
                'search_items'      => 'Search Meal types',
                'all_items'         => 'All Meal types',
                'view_item '        => 'View Meal type',
                'parent_item'       => 'Parent Meal type',
                'parent_item_colon' => 'Parent Meal type:',
                'edit_item'         => 'Edit Meal type',
                'update_item'       => 'Update Meal type',
                'add_new_item'      => 'Add New Meal type',
                'new_item_name'     => 'New Meal type Name',
                'menu_name'         => 'Meal type',
            ],
            'description'           => 'Тип блюда (первое, второе)',
            'public'                => true,
            'hierarchical'          => false,

            'rewrite'               => true,
            'capabilities'          => array(),
            'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
            'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
            'show_in_rest'          => null,
            'rest_base'             => null,
        ] );
    }

    /* Post types */
    add_action( 'init', 'register_post_types' );
    function register_post_types(){
        /* Category Point (food company) */
        register_post_type( constants::POST_TYPE_POINT, [
            'label'  => null,
            'labels' => [
                'name'               => 'Point', // основное название для типа записи
                'singular_name'      => 'Point', // название для одной записи этого типа
                'add_new'            => 'Добавить Point', // для добавления новой записи
                'add_new_item'       => 'Добавление Point', // заголовка у вновь создаваемой записи в админ-панели.
                'edit_item'          => 'Редактирование Point', // для редактирования типа записи
                'new_item'           => 'Новый Point', // текст новой записи
                'view_item'          => 'Смотреть Point', // для просмотра записи этого типа.
                'search_items'       => 'Искать Point', // для поиска по этим типам записи
                'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
                'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
                'parent_item_colon'  => '', // для родителей (у древовидных типов)
                'menu_name'          => 'Points', // название меню
            ],
            'description'         => '',
            'public'              => true,
            // 'publicly_queryable'  => null, // зависит от public
            // 'exclude_from_search' => null, // зависит от public
            // 'show_ui'             => null, // зависит от public
            // 'show_in_nav_menus'   => null, // зависит от public
            'show_in_menu'        => null, // показывать ли в меню адмнки
            // 'show_in_admin_bar'   => null, // зависит от show_in_menu
            'show_in_rest'        => null, // добавить в REST API. C WP 4.7
            'rest_base'           => null, // $post_type. C WP 4.7
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-store',
            //'capability_type'   => 'post',
            //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
            //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
        ] );

        /* Category Kitchen */
        register_post_type( constants::POST_TYPE_KITCHEN, [
            'label'  => null,
            'labels' => [
                'name'               => 'Kitchen',
                'singular_name'      => 'Kitchen',
                'add_new'            => 'Добавить Kitchen',
                'add_new_item'       => 'Добавление Kitchen',
                'edit_item'          => 'Редактирование Kitchen',
                'new_item'           => 'Новое Kitchen',
                'view_item'          => 'Смотреть Kitchen',
                'search_items'       => 'Искать Kitchen',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'parent_item_colon'  => '',
                'menu_name'          => 'Kitchens',
            ],
            'description'         => '',
            'public'              => true,
            'show_in_menu'        => null,
            'show_in_rest'        => null,
            'rest_base'           => null,
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-admin-site-alt',
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor', 'thumbnail' ],
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
        ] );

        /* Meal */
        register_post_type( constants::POST_TYPE_MEAL, [
            'label'  => null,
            'labels' => [
                'name'               => 'Meal',
                'singular_name'      => 'Meal',
                'add_new'            => 'Добавить Meal',
                'add_new_item'       => 'Добавление Meal',
                'edit_item'          => 'Редактирование Meal',
                'new_item'           => 'Новое Meal',
                'view_item'          => 'Смотреть Meal',
                'search_items'       => 'Искать Meal',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
                'parent_item_colon'  => '',
                'menu_name'          => 'Meals',
            ],
            'description'         => '',
            'public'              => true,
            'show_in_menu'        => null,
            'show_in_rest'        => null,
            'rest_base'           => null,
            'menu_position'       => null,
            'menu_icon'           => 'dashicons-food',
            'hierarchical'        => false,
            'supports'            => [ 'title', 'editor', 'thumbnail' ],
            'taxonomies'          => [],
            'has_archive'         => true,
            'rewrite'             => true,
            'query_var'           => true,
        ] );
    }

    /* ACF fields */
    get_template_part('inc/fields');

    /* Get kitchen dictionary */
    function get_kitchens_list() {
        $posts = get_posts([
            'numberposts' => 0,
            'post_type'   => constants::POST_TYPE_KITCHEN,
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ]);

        $kitchens = [];
        
        foreach( $posts as $post ) {
            $kitchens[$post->ID] = [
                'title' => urldecode($post->post_name),
                'image' => get_the_post_thumbnail_url($post->ID, 'thumbnail'),
                'description' => $post->post_content
            ];
        }
        
        return $kitchens;
    }