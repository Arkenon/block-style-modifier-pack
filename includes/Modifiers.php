<?php

namespace Block_Style_Modifier_Pack;

class Modifiers {
    public static function register() {

        if ( ! function_exists( 'register_block_style_modifier' ) ) {
            return;
        }

        // Hover Effects
        register_block_style_modifier( 'core/image', [
            'name'        => 'zoom-on-hover',
            'label'       => __('Zoom on Hover', 'your-textdomain'),
            'class'       => 'zoom-on-hover',
            'description' => __('Zoom into image on hover', 'your-textdomain'),
            'category'    => __('Hover Effects', 'your-textdomain'),
        ] );

        register_block_style_modifier( 'core/image', [
            'name'        => 'grayscale-hover',
            'label'       => __('Grayscale to Color', 'your-textdomain'),
            'class'       => 'grayscale-hover',
            'description' => __('Image appears grayscale and reveals color on hover', 'your-textdomain'),
            'category'    => __('Hover Effects', 'your-textdomain'),
        ] );

        register_block_style_modifier( 'core/image', [
            'name'        => 'rotate-on-hover',
            'label'       => __('Rotate on Hover', 'your-textdomain'),
            'class'       => 'rotate-on-hover',
            'description' => __('Rotate image slightly on hover', 'your-textdomain'),
            'category'    => __('Hover Effects', 'your-textdomain'),
        ] );

        register_block_style_modifier( 'core/image', [
            'name'        => 'hover-shadow',
            'label'       => __('Shadow on Hover', 'your-textdomain'),
            'class'       => 'hover-shadow',
            'description' => __('Add soft shadow to image on hover', 'your-textdomain'),
            'category'    => __('Hover Effects', 'your-textdomain'),
        ] );

        register_block_style_modifier( 'core/image', [
            'name'        => 'hover-blur',
            'label'       => __('Blur on Hover', 'your-textdomain'),
            'class'       => 'hover-blur',
            'description' => __('Blur image slightly on hover', 'your-textdomain'),
            'category'    => __('Hover Effects', 'your-textdomain'),
        ] );

        // Caption Effects
        register_block_style_modifier( 'core/image', [
            'name'        => 'caption-overlay',
            'label'       => __('Caption Overlay', 'your-textdomain'),
            'class'       => 'caption-overlay',
            'description' => __('Display caption as overlay on image', 'your-textdomain'),
            'category'    => __('Caption Effects', 'your-textdomain'),
        ] );

        register_block_style_modifier( 'core/image', [
            'name'        => 'caption-slide-up',
            'label'       => __('Caption Slide Up', 'your-textdomain'),
            'class'       => 'caption-slide-up',
            'description' => __('Show caption sliding from bottom on hover', 'your-textdomain'),
            'category'    => __('Caption Effects', 'your-textdomain'),
        ] );

        register_block_style_modifier( 'core/image', [
            'name'        => 'caption-fade-in',
            'label'       => __('Caption Fade In', 'your-textdomain'),
            'class'       => 'caption-fade-in',
            'description' => __('Caption fades in on image hover', 'your-textdomain'),
            'category'    => __('Caption Effects', 'your-textdomain'),
        ] );

        // Overlay Effects
        register_block_style_modifier( 'core/image', [
            'name'        => 'hover-overlay-dark',
            'label'       => __('Dark Overlay on Hover', 'your-textdomain'),
            'class'       => 'hover-overlay-dark',
            'description' => __('Dark semi-transparent overlay appears on hover', 'your-textdomain'),
            'category'    => __('Overlay Effects', 'your-textdomain'),
        ] );

        register_block_style_modifier( 'core/image', [
            'name'        => 'hover-overlay-light',
            'label'       => __('Light Overlay on Hover', 'your-textdomain'),
            'class'       => 'hover-overlay-light',
            'description' => __('Light semi-transparent overlay appears on hover', 'your-textdomain'),
            'category'    => __('Overlay Effects', 'your-textdomain'),
        ] );

    }
}
