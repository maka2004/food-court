<?php

namespace base\inc\classes;

class Cuisine {

    /**
     * @return array
     */
    public static function getAll()
    {
        $posts = get_posts([
            'numberposts' => 0,
            'post_type'   => Constants::POST_TYPE_CUISINE,
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ]);

        $cuisines = [];

        foreach( $posts as $post ) {
            $cuisines[$post->ID] = [
                'title' => urldecode($post->post_name),
                'image' => get_the_post_thumbnail_url($post->ID, 'thumbnail'),
                'description' => $post->post_content
            ];
        }

        return $cuisines;
    }
}