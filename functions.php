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

add_action( 'wp_enqueue_scripts', 'theme_enqueue_all' );
add_shortcode( 'ct_calendar', 'embbed_churchtools_calendar' );
add_shortcode( 'ct_callist', 'embbed_churchtools_callist');

?>
