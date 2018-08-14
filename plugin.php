<?php
/*
Plugin Name: Lowercase username
Plugin URI: https://github.com/Virinum/yourls-lowercase-username
Description: Makes the username lowercase
Version: 1.0
Author: Virinum
Author URI: http://spanier.es/
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action('pre_login_username_password', 'lowercase_username');

function lowercase_username() {
  $_REQUEST['username'] = strtolower($_REQUEST['username']);
} 
