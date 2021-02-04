<?php
    if( function_exists('acf_add_local_field_group') ) {

        /* Point */
        acf_add_local_field_group(array(
            'key' => 'group_601ab5daebb65',
            'title' => 'Настройки точки продажи',
            'fields' => array(
                array(
                    'key' => 'field_601ab61b49bf6',
                    'label' => 'Категория кухни',
                    'name' => 'kitchen_category',
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
                        0 => 'kitchen',
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
        
    }