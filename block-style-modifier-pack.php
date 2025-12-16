<?php
/**
 * Plugin Name: Block Style Modifier Pack
 * Description: Style modifier collection for Block Style Modifiers Plugin
 * Version: 1.0.0
 * Author: Kadim Gültekin
 * Author URI: https://github.com/Arkenon
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: block-style-modifier-pack
 */

use Block_Style_Modifier_Pack\Modifiers;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define constants
define( 'BSMP_PLUGIN_VERSION', '1.0.0' );
define( 'BSMP_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'BSMP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include necessary files
require( BSMP_PLUGIN_DIR . 'includes/Modifiers.php' );

if ( ! function_exists( "block_style_modifier_pack_register_modifiers" ) ) {
    /**
     * Register block style modifiers for the pack.
     *
     * @return void
     * @since 1.0.0
     */
    function block_style_modifier_pack_register_modifiers() {
        $modifiers = new Modifiers();
        $modifiers->register();
    }
    add_action('init', 'block_style_modifier_pack_register_modifiers');
}

if ( ! function_exists( "block_style_modifier_pack_enqueue_editor_assets" ) ) {
    /**
     * Enqueue editor assets for block style modifier pack.
     *
     * @return void
     * @since 1.0.0
     */
    function block_style_modifier_pack_enqueue_editor_assets(): void {
        wp_enqueue_style(
            'block-style-modifier-pack--editor-style',
            BSMP_PLUGIN_URL.'/assets/modifiers.css',
            [],
            BSMP_PLUGIN_VERSION
        );

    }

    add_action( 'enqueue_block_assets', 'block_style_modifier_pack_enqueue_editor_assets' );
}