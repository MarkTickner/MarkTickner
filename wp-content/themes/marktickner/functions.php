<?php
/**
 * Functions and definitions
 *
 * Sets up the theme and provides some helper functions, which are used
 * in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook.
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 *
 * @package WordPress
 * @subpackage MarkTickner
 * @since MarkTickner 1.0
 */

// Set up theme
function marktickner_setup() {
    // This theme uses wp_nav_menu() in one location.
    register_nav_menu('primary', 'Primary');

    // This theme uses a custom image size for featured images, displayed on "standard" posts
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(624, 9999); // Unlimited height, soft crop
}

add_action('after_setup_theme', 'marktickner_setup');

// Add custom image sizes
if (function_exists('add_image_size')) {
    add_image_size('page-background', 1600, 9999, false);
    add_image_size('work-item-top-image', 450, 150, true);
    add_image_size('work-item-page-header', 1200, 80, true);
}

// Add the Visual Editor Stylesheet
add_editor_style();

// Return a list of categories like the 'the_category()', but with some excluded
function the_category_filter($category_list, $separator = ' ') {
    if (!defined('WP_ADMIN')) {
        // List the category names to exclude
        $excluded_categories = array('My Work', 'Blog');

        $categories = explode($separator, $category_list);
        $new_category_list = array();
        foreach ($categories as $category) {
            $category_name = trim(strip_tags($category));

            if (!in_array($category_name, $excluded_categories)) {
                $new_category_list[] = $category;
            }
        }

        return implode($separator, $new_category_list);
    } else {
        return $category_list;
    }
}

add_filter('the_category', 'the_category_filter', 10, 2);

// Get whether the category is a subcategory. True = subcategory, false = not a subcategory
function is_subcategory() {
    $cat = get_query_var('cat');
    $category = get_category($cat);

    return ($category->parent == '0') ? false : true;
}

?>