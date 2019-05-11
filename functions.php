<?php add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
	wp_enqueue_style( 'catch-responsive-css', get_template_directory_uri() . '/style.css' );
}

// Add Shortcode for embbeding churchtools calender
function embbed_churchtools_calendar() {
    return '<iframe src="https://fegbv.church.tools/?q=churchcal&embedded=true&viewname=calView" width="100%" height="1000px"> </iframe>';
}

function embbed_churchtools_callist() {
    return '<iframe src="https://fegbv.church.tools/?q=churchcal&embedded=true&viewname=eventView" width="100%" height="1000px"> </iframe>';
}

add_shortcode( 'ct_calendar', 'embbed_churchtools_calendar' );
add_shortcode( 'ct_callist', 'embbed_churchtools_callist');

?>
