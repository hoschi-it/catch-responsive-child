<?php

function theme_enqueue_all(){
    wp_enqueue_style( 'catch-responsive-css', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script('catch-responsive-js', get_template_directory_uri() . '/code.js' );
}

// Add Shortcode for embbeding churchtools calender
function embbed_churchtools_calendar() {
    return '<iframe src="https://fegbv.church.tools/?q=churchcal&embedded=true&viewname=calView" width="100%" height="1000px"> </iframe>';
}

function embbed_churchtools_callist() {
    return '<iframe
        src="https://fegbv.church.tools/?q=churchcal&embedded=true&viewname=eventView&minical=true&entries=7"
        width="100%"
        height="750px">
        </iframe>';
}


function crc_register_sidebars() {
    /* Register the 'primary' sidebar. */
    register_sidebar(
        array(
            'id'            => 'crc_notification_header',
            'name'          => __( 'Notification header' ),
            'description'   => __( 'Here you can put important notes.' ),
            'before_widget' => '<div class="widget crc-notification">',
            'after_widget'  => '</div>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}}


add_action( 'wp_enqueue_scripts', 'theme_enqueue_all' );
add_shortcode( 'ct_calendar', 'embbed_churchtools_calendar' );
add_shortcode( 'ct_callist', 'embbed_churchtools_callist');
add_action( 'widgets_init', 'crc_register_sidebars' );

?>
