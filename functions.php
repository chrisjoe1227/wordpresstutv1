<?php
define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

function wordpress_enqueue_styles() {
    wp_enqueue_style('style', THEME_DIR_URI . '/style.css');
    wp_enqueue_style('tailwindcss', THEME_DIR_URI . '/src/output.css');
}

add_action('wp_enqueue_scripts', 'wordpress_enqueue_styles');


class WordpressTutorialTheme {
    private static $instance = null;
    private function __construct() {
    }


    public static function get_instance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

WordpressTutorialTheme::get_instance();