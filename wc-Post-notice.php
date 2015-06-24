<?php

/*
Plugin Name: Post Notice
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: A brief description of the Plugin.
Version: 0.1.0
Author: Praveen
Author URI: http://simpletechlife.in
License: GPL2.0
*/

//If this file is accessed directly then abort

if ( ! defined( 'WPINC' ) ) {
	die;
}


//Include the class file

require_once( plugin_dir_path( __FILE__ ) . 'class-wc-Post-notice.php' );

function tutsplus_post_notice_start() {

    $post_notice = new Wc_Post_Notice();
    $post_notice->initialize();
}
tutsplus_post_notice_start();