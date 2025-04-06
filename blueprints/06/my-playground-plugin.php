<?php
/*
Plugin Name: My Playground Plugin
*/

function my_custom_plugin()
{
	echo '<h1>Hello from My Custom Plugin!</h1>';
}
add_action('admin_notices', 'my_custom_plugin');
