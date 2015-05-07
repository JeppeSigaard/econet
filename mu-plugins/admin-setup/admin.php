<?php
// Ryd op i admin menuen
function remove_menus(){

  // remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'edit.php' );                   //Posts
  // remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  // remove_menu_page( 'edit-comments.php' );           //Comments
  // remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'plugins.php' );                //Plugins
  // remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  // remove_menu_page( 'options-general.php' );        //Settings

}

// Ryd op i undermenupunkter
function adjust_the_wp_menu() {


	// Udseende
	// remove_submenu_page( 'themes.php', 'themes.php' ); // Temavælger
	remove_submenu_page( 'themes.php', 'theme-editor.php' ); // Editor

	// Plugins
	remove_submenu_page( 'plugins.php', 'plugin-editor.php' ); // Editor
    add_submenu_page( 'options-general.php', 'Plugins', 'Plugins', 'manage_options', 'plugins.php');


	// Indstillinger
	remove_submenu_page( 'options-general.php', 'options-discussion.php' ); // Diskussion

    // Værktøjer
	remove_submenu_page( 'tools.php', 'tools.php' ); // Tilgængelige værktøjer

}



// Admin footer

function remove_footer_admin ()
{
    echo '<span id="footer-thankyou">Se admin.php i mu-plugins-mappen for at tilrette kontrolpanelet. Bygget af <a href="http://www.smartmonkey.dk" target="_blank">SmartMonkey</a></span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');


add_action( 'admin_menu', 'remove_menus' );
add_action( 'admin_menu', 'adjust_the_wp_menu', 999 );


?>
