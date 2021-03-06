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
    echo '<form action="'.$plugin_url.'" method="post" ">';
    echo "
Company Name:<input type='text' name='company'>
	<br>
	Categoury Name:<select name='categoury'>
    <option value='Wood Floor'>wood floor</option>
    <option value='Wall Panel''>wall panel</option>
    <option value='Floor Pvc'>floor pvc</option>
    <option value='Tools'>tools</option>
     <option value='Partition'>partition</option>
      <option value='Stone'>stone</option>
      <option value='collection'>colection</option>
  </select>
	
	<br>
	<hr>
	 ALL Image:<input id='ll_in' type='file' name='pic[]' accept='image/*' multiple='multiple'>
  <br>
  <input type='submit'>
</form> ";
    echo '<hr>';
    echo '<progress id="prog" max="100" value="0" style="display: none;"></progress>';
    echo '<p id="upload_status"></p>';
    echo '<hr>';
	/*echo '<form action="'.$plugin_url.'" method="post" enctype="multipart/form-data">';
	echo "
		Company Name:<input type='text' name='company'>
		<br>
	Categoury name:<input type='text' name='categoury'>
	<br>
	Code:<input type='text' name='sn'>

	<br>
	<hr>
	
	 Image:<input type='file' name='pic' accept='image/*'>
  <br>
  <input type='submit'>
</form> ";
echo '<hr>';
	echo '<progress id="prog" max="100" value="0" style="display: none;"></progress>';
echo '<p id="upload_status"></p>';
echo '<hr>';*/
}
function load_custom_wp_admin_js($hook) {
    // Load only on ?page=mypluginname
    if($hook != 'toplevel_page_test-plugin') {
        return;
    }
    wp_enqueue_script( 'jquery_form_min', plugins_url('js/jquery.form.min.js', __FILE__) );
    wp_enqueue_script( 'plug_hirad', plugins_url('js/shoping.js', __FILE__) );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_js' );


