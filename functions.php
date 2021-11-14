<?php

//add stylesheet
function addStyleSheets():void {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'addStyleSheets');

//add menus
register_nav_menus(
    array(
        'main-menu' => 'primary'
    )  
);

add_theme_support('menu');

function add_class_li($classes,$item,$args){
    if(isset($args->li_class)){
        $classes[] = $args->li_class;
    }
    if(isset($args->active_class) && in_array('current-menu-item', $classes)){
        $classes[] = $args->active_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_class_li', 10, 3);

function add_anchor_class($attr, $item, $args){
    if(isset($args->a_class)){
        $attr['class'] = $args->a_class;
    }
    return $attr;
}

add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);