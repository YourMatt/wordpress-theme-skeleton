<?

add_action ('after_setup_theme', 'THEMENAME_theme_setup');
add_action ('wp_enqueue_scripts', 'THEMENAME_scripts_styles');

// set base theme options
function THEMENAME_theme_setup () {

}

// add scripts and styles to header
function THEMENAME_scripts_styles () {

   // add javascript files
   wp_enqueue_script ('theme-main-js', get_template_directory_uri () . '/js/main.min.js', array ('jquery'), '2018-08-02');

   // add stylesheets
   wp_enqueue_style ('theme-main-css', get_template_directory_uri () . '/css/main.min.css', array (), '2018-08-02');

}

// return the navigation menu, allowing for updates on the fly
function THEMENAME_build_nav_menu () {

   // load the menu
   $nav_menu_attributes = array (
      'theme_location' => 'primary',
      'menu_class' => 'nav-menu',
      'echo' => false
   );
   $menu = wp_nav_menu ($nav_menu_attributes);

   // apply changes to menu

   // display the menu
   print $menu;

}

?>