<?php
    if( function_exists('acf_add_local_field_group') ) {

        /* Theme options */
        acf_add_local_field_group(array(
            'key' => 'group_6023f52fec3dc',
            'title' => 'Theme options',
            'fields' => array(
                array(
                    'key' => 'field_6023f5a69a401',
                    'label' => 'Header',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'field_6023f5bd9a402',
                    'label' => 'Telephones',
                    'name' => 'telephones',
                    'type' => 'wysiwyg',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'tabs' => 'all',
                    'toolbar' => 'full',
                    'media_upload' => 1,
                    'delay' => 0,
                ),
                array(
                    'key' => 'field_6023f5e79a403',
                    'label' => 'Meals menu',
                    'name' => 'meals_menu',
                    'type' => 'taxonomy',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '50',
                        'class' => '',
                        'id' => '',
                    ),
                    'taxonomy' => 'taxonomy',
                    'field_type' => 'multi_select',
                    'allow_null' => 0,
                    'add_term' => 0,
                    'save_terms' => 0,
                    'load_terms' => 0,
                    'return_format' => 'object',
                    'multiple' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'theme-general-settings',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

        /* Point */
        acf_add_local_field_group(array(
            'key' => 'group_601ab5daebb65',
            'title' => 'Настройки точки продажи',
            'fields' => array(
                array(
                    'key' => 'field_601ab61b49bf6',
                    'label' => 'Категория кухни',
                    'name' => 'cuisine_category',
                    'type' => 'post_object',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'cuisine',
                    ),
                    'taxonomy' => '',
                    'allow_null' => 0,
                    'multiple' => 1,
                    'return_format' => 'object',
                    'ui' => 1,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'point',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));

        /* Meal - Cuisine */
        acf_add_local_field_group(array(
            'key' => 'group_6023dcb1e825d',
            'title' => 'Принадлежность к кухне',
            'fields' => array(
                array(
                    'key' => 'field_6023dcc99c3de',
                    'label' => 'Кухня',
                    'name' => 'cuisine',
                    'type' => 'post_object',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'cuisine',
                    ),
                    'taxonomy' => '',
                    'allow_null' => 0,
                    'multiple' => 0,
                    'return_format' => 'object',
                    'ui' => 1,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'meal',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
    }