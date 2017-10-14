<?php
/*
Plugin Name:  hirad_shoping
Plugin URI:   http://hirad-co.com
Description:  shoping for hirad
Version:      1.0
Author:       mr.ahmadi
Author URI:   https://developer.wordpress.org/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/
add_action('admin_menu', 'test_plugin_setup_menu');

function test_plugin_setup_menu(){
        add_menu_page( 'hirad shoping Page', 'Hirad Shoping', 'manage_options', 'test-plugin', 'test_init' );
}

function test_init(){
	$plugin_url=plugins_url( 'inc/upload_file.php', __FILE__ );
        echo "<h1>Hi admin</h1>";
		  
	echo '<form action="" method="post" enctype="multipart/form-data">';
	echo "
		Company Name:<input type='text' name='copmany'>
		<br>
	Categoury name:<input type='text' name='categoury'>
	<br>
	Code:<input type='text' name='sn'>
	<br>
	 Image:<input type='file' name='pic' accept='image/*.jpg'>
  <br>
  <input type='submit'>
</form> ";


	
}
function load_custom_wp_admin_js($hook) {
    // Load only on ?page=mypluginname
    if($hook != 'toplevel_page_test-plugin') {
        return;
    }
    wp_enqueue_script( 'plug_hirad', plugins_url('js/shoping.js', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_js' );



