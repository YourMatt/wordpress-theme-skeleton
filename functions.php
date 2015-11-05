<?

add_action ('after_setup_theme', 'THEMENAME_theme_setup');
add_action ('wp_enqueue_scripts', 'THEMENAME_scripts_styles');

// set base theme options
function THEMENAME_theme_setup () {

}

// add scripts and styles to header
function THEMENAME_scripts_styles () {

   // add javascript files
   wp_enqueue_script ('theme-main-js', get_template_directory_uri () . '/js/main.js', array ('jquery'), '2015-11-05');

   // add stylesheets
   wp_enqueue_style ('theme-main-css', get_template_directory_uri () . '/css/main.css', array (), '2015-11-05');

}

?>