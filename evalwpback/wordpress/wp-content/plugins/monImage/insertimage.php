<?php
/*
Plugin Name: monImage
Description: Insère une image
Author: Maxime
Version: 1.0
*/
	function monImage(){
		echo '
		<div id="image">
		</div>
		';
	}

	function persoCSS()
	{
		wp_enqueue_style('Insertcss', plugins_url('monImage/design.css'));
	}
	add_action('admin_head','persoCSS');
	add_action( 'admin_notices', 'monImage' );