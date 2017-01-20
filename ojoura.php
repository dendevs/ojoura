<?php
/*
Plugin Name: Ojoura
Plugin URI:  https://github.com/dendevs/Ojoura
Description: Un wp orienté objet, modulaire et automatisé Edit
Version:     1.0.0-19012017
Author:      dendev
Author URI:  dendev
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: ojoura
Domain Path: /languages
 */
require_once 'vendor/autoload.php';


function codex_custom_init() {
			$args = array(
				'public' => true,
				'label'  => 'Plante'
			);
			register_post_type( 'plante', $args );
		}
		add_action( 'init', 'codex_custom_init' );


?>
