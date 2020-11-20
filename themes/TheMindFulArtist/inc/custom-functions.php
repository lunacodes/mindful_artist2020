<?php

add_action( 'wp_enqueue_scripts', 'enqueue_custom_styles' );
function enqueue_custom_styles() {
	wp_enqueue_style( 'mailchimp-classic-10-7', '//cdn-images.mailchimp.com/embedcode/classic-10_7.css' );
	// wp_enqueue_style( 'custom-styles', '/wp-content/themes/TheMindfulArtist/inc/css/custom-styles.css' );
}
