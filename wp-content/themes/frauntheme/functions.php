<?php

add_action('init', 'register_my_menu');

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
