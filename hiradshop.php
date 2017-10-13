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
        echo "<h1>Hi sadmin</h1>";
		
	echo "<form action='inc/upload_file.php'>
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
