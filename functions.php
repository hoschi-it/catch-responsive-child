<?php

function crc_get_styles() {
    $path = get_template_directory_uri().'/style.css';
    $style_code = file_get_contents($path);
    $style_code;
}

function crc_enqueue_styles() {
    wp_register_style('crc-css', get_template_directory_uri().'/style.css');    
    wp_enqueue_style( 'crc-css' );
}

// Add Shortcode for embbeding churchtools calender
function crc_embbed_churchtools_calendar() {
    return '<iframe src="https://fegbv.church.tools/?q=churchcal&embedded=true&viewname=calView" width="100%" height="1000px"> </iframe>';
}

function crc_embbed_churchtools_callist() {
    return '<iframe
                src="https://fegbv.church.tools/?q=churchcal&embedded=true&viewname=eventView&minical=true&entries=7"
                width="100%"
                height="750px">
            </iframe>';
}

add_shortcode( 'ct_calendar', 'crc_embbed_churchtools_calendar' );
add_shortcode( 'ct_callist', 'crc_embbed_churchtools_callist');

?>
