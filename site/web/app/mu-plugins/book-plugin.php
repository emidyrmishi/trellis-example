<?php
/**
 * Plugin Name: My book plugin
 * Description: created a costum book plugin
 * Author:      Emi dyrmishi
 * Version: 1.0
 * License:     GNU General Public License v3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

// Register new post book
function wporg_custom_post_type()
{
    register_post_type('book',
                       array(
                           'labels'      => array(
                               'name'          => __('Books'),
                               'singular_name' => __('Book'),
                           ),
                           'public'      => true,
                           'has_archive' => true,
                           'taxonomies' => array ('category', 'post_tag'),
                           'hierarchical' => true,
                           'menu_icon' => 'dashicons-book-alt',
                           'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'revisions' ),
                           'rewrite'     => array( 'slug' => 'book' ) // my custom slug
                       )
    );
}
add_action('init', 'wporg_custom_post_type');