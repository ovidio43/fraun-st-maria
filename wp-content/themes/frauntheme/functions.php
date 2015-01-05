<?php

add_action('init', 'register_my_menu');
add_theme_support('post-thumbnails');
function register_my_menu() {
    if (function_exists('register_nav_menus')) {
        register_nav_menus(
                array(
                    'primary' => 'Primary menu',
                    'secundary' => 'Secundary menu'
                )
        );
    }
}
function custom_wp_title($title, $sep) {
    global $paged, $page;

    if (is_feed()) {
        return $title;
    }
    $title .= get_bloginfo('name', 'display');
    $site_description = get_bloginfo('description', 'display');
    if ($site_description && ( is_home() || is_front_page() )) {
        $title = "$title $sep $site_description";
    }
    if ($paged >= 2 || $page >= 2) {
        $title = "$title $sep " . sprintf(__('Page %s', 'dcxblog'), max($paged, $page));
    }
    return $title;
}

add_filter('wp_title', 'custom_wp_title', 10, 2);