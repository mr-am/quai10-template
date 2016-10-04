<?php
namespace Quai10;

class ScriptLoader
{
    public static function init()
    {
        wp_enqueue_style('quai10-template', get_template_directory_uri().'/assets/dist/css/styles.min.css');
        wp_enqueue_script('leaflet', get_template_directory_uri().'/assets/src/vendor/leaflet/dist/leaflet.js');
        wp_enqueue_script('quai10-template', get_template_directory_uri().'/assets/dist/js/global.min.js');
        wp_localize_script('quai10-template', 'template_url', get_template_directory_uri());
    }
}
