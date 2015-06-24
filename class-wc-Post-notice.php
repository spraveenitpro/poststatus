<?php
/**
 * Created by PhpStorm.
 * User: Praveen
 * Date: 6/22/15
 * Time: 11:48 PM
 */

class Wc_Post_Notice {

    public function initialize() {
        add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
    }

    public function enqueue_scripts() {
        wp_enqueue_style(
            'tuts-post-notice-admin',
            plugins_url( 'wc-PostNotice/assets/css/admin.css'),
            array(),
            '0.1.0'
        );
    }
}