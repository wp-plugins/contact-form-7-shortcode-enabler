<?php
/*
Plugin Name: Contact Form 7 Shortcode Enabler 
Plugin URI: #
Description: This plugin enables the usage of external shortcuts inside Contact Form 7 Forms.
Version: 1.0
Author: Tobias Zimpel (TZ Media)
Author URI: http://www.tobias-zimpel.de
License: GPLv2 or later.
*/

// Shortcode-Ausführung für Contact Form 7 aktivieren

add_filter( 'wpcf7_form_elements', 'do_shortcode' );

?>