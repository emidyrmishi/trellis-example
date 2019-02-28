<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Book extends Controller
{
   
    public static function singleBook()
    {
        $post_id = get_the_ID();
        return get_post( $post_id);
    }

    public static function allBook()
    {
       
        $args = get_posts([
            'post_type' => 'book',
            'posts_per_page'=>'10',
        ]);

        // return array_map(function ($post) {
        //     return [
        //         'content' => apply_filters('the_content', $post->post_content),
        //         'thumbnail' => get_the_post_thumbnail($post->ID, 'large'),
        //     ];
        // }, $args);
        return $args;
    }
}