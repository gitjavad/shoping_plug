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
	/*$plugin_url=plugins_url( 'inc/upload_file.php', __FILE__ );
        echo "<h1>Hi sadmin</h1>";
		  
	echo '<form action="'.$plugin_url.'" method="post" enctype="multipart/form-data">';
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
</form> ";*/
	
	echo'
	<label for="upload_image">
    <input id="upload_image" type="text" size="36" name="ad_image" value="http://" /> 
    <input id="upload_image_button" class="button" type="button" value="Upload Image" />
    <br />Enter a URL or upload an image
	</label>';
	
}

function load_custom_wp_admin_style($hook) {

	wp_enqueue_script( 'my_custom_script', plugins_url('/js/shoping.js', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );





