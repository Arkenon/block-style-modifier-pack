<?php
/**
 * Block Style Modifier Pack - Modifiers Registration
 * @package Block_Style_Modifier_Pack
 * @version 1.0.0
 */

namespace Block_Style_Modifier_Pack;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class Modifiers {
    /**
     * Register block style modifiers.
     * @return void
     * @since 1.0.0
     */
    public function register() {

        if ( ! function_exists( 'block_style_modifiers_register_style' ) ) {
            return;
        }

        $this->registerImageModifiers();
        $this->registerCommonModifiers();

    }

    /**
     * Register image block style modifiers.
     * @return void
     * @since 1.0.0
     */
    private function registerImageModifiers() {
        // Hover Effects
        block_style_modifiers_register_style( [ 'core/image', 'core/cover' ], [
            'name'        => 'zoom-on-hover',
            'label'       => __( 'Zoom on Hover', 'block-style-modifier-pack' ),
            'class'       => 'bsmp-zoom-on-hover',
            'description' => __( 'Zoom into image on hover', 'block-style-modifier-pack' ),
            'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
        ] );

        block_style_modifiers_register_style( [ 'core/image', 'core/cover' ], [
            'name'        => 'grayscale-hover',
            'label'       => __( 'Grayscale to Color', 'block-style-modifier-pack' ),
            'class'       => 'bsmp-grayscale-hover',
            'description' => __( 'Image appears grayscale and reveals color on hover', 'block-style-modifier-pack' ),
            'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
        ] );

        block_style_modifiers_register_style( [ 'core/image', 'core/cover' ], [
            'name'        => 'rotate-on-hover',
            'label'       => __( 'Rotate on Hover', 'block-style-modifier-pack' ),
            'class'       => 'bsmp-rotate-on-hover',
            'description' => __( 'Rotate image slightly on hover', 'block-style-modifier-pack' ),
            'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
        ] );

        block_style_modifiers_register_style( [ 'core/image', 'core/cover' ], [
            'name'        => 'hover-shadow',
            'label'       => __( 'Shadow on Hover', 'block-style-modifier-pack' ),
            'class'       => 'bsmp-hover-shadow',
            'description' => __( 'Add soft shadow to image on hover', 'block-style-modifier-pack' ),
            'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
        ] );

        block_style_modifiers_register_style( [ 'core/image', 'core/cover' ], [
            'name'        => 'hover-blur',
            'label'       => __( 'Blur on Hover', 'block-style-modifier-pack' ),
            'class'       => 'bsmp-hover-blur',
            'description' => __( 'Blur image slightly on hover', 'block-style-modifier-pack' ),
            'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
        ] );

        // Overlay Effects
        block_style_modifiers_register_style( [ 'core/image', 'core/cover' ], [
            'name'        => 'hover-overlay-dark',
            'label'       => __( 'Dark Overlay on Hover', 'block-style-modifier-pack' ),
            'class'       => 'bsmp-hover-overlay-dark',
            'description' => __( 'Dark semi-transparent overlay appears on hover', 'block-style-modifier-pack' ),
            'category'    => __( 'Overlay Effects', 'block-style-modifier-pack' ),
        ] );

        block_style_modifiers_register_style( [ 'core/image', 'core/cover' ], [
            'name'        => 'hover-overlay-light',
            'label'       => __( 'Light Overlay on Hover', 'block-style-modifier-pack' ),
            'class'       => 'bsmp-hover-overlay-light',
            'description' => __( 'Light semi-transparent overlay appears on hover', 'block-style-modifier-pack' ),
            'category'    => __( 'Overlay Effects', 'block-style-modifier-pack' ),
        ] );
    }

    /**
     * Register common style modifiers.
     * @return void
     * @since 1.0.0
     */
    private function registerCommonModifiers() {

        block_style_modifiers_register_style( '*', [
            'name'         => 'hide-sm',
            'label'        => 'Hide on Small Screens',
            'class'        => 'bsmp-hide-sm',
            'description'  => __( 'Hide block on small (max-width: 600px) screens' ),
            'category'     => __( 'Responsive' ),
            'inline_style' => '
                @media (max-width: 600px) {
                    .bsmp-hide-sm {
                        display: none !important;
                    }
                }
            ',
        ] );

        block_style_modifiers_register_style( '*', [
            'name'         => 'hide-md',
            'label'        => 'Hide on Medium Screens',
            'class'        => 'bsmp-hide-md',
            'description'  => __( 'Hide block on medium (max-width: 768px) screens' ),
            'category'     => __( 'Responsive' ),
            'inline_style' => '
                @media (max-width: 768px) {
                    .bsmp-hide-md {
                        display: none !important;
                    }
                }
            ',
        ] );

        block_style_modifiers_register_style( '*', [
            'name'         => 'center-sm',
            'label'        => 'Center on Small Screens',
            'class'        => 'bsmp-center-sm',
            'description'  => __( 'Align content center on small screens' ),
            'category'     => __( 'Responsive' ),
            'inline_style' => '
                @media (max-width: 600px) {
                    .bsmp-center-sm {
                        text-align: center !important;
                        margin-left: auto !important;
                        margin-right: auto !important;
                    }
                }
            ',
        ] );

        block_style_modifiers_register_style( '*', [
            'name'         => 'center-md',
            'label'        => 'Center on Medium Screens',
            'class'        => 'bsmp-center-md',
            'description'  => __( 'Align content center on medium screens' ),
            'category'     => __( 'Responsive' ),
            'inline_style' => '
                @media (max-width: 768px) {
                    .bsmp-center-md {
                        text-align: center !important;
                        margin-left: auto !important;
                        margin-right: auto !important;
                    }
                }
            ',
        ] );

        block_style_modifiers_register_style( '*', [
            'name'         => 'stack-lg',
            'label'        => 'Stack on Large Screens',
            'class'        => 'bsmp-stack-lg',
            'description'  => __( 'Force vertical stack layout on large screens' ),
            'category'     => __( 'Responsive' ),
            'inline_style' => '
                @media (min-width: 1024px) {
                    .bsmp-stack-lg {
                        display: block !important;
                    }
                }
            ',
        ] );

        block_style_modifiers_register_style( '*', [
            'name'         => 'fade-in',
            'label'        => 'Fade In',
            'class'        => 'bsmp-fade-in',
            'description'  => __( 'Fade in animation on load' ),
            'category'     => __( 'Animations' ),
            'inline_style' => '
                @keyframes fadeIn {
                    from { opacity: 0; }
                    to { opacity: 1; }
                }
                .bsmp-fade-in {
                    opacity: 0;
                    animation: fadeIn 1s ease-out forwards;
                }
            ',
        ] );

        block_style_modifiers_register_style( '*', [
            'name'         => 'bounce',
            'label'        => 'Bounce In',
            'class'        => 'bsmp-bounce',
            'description'  => __( 'Bounce effect on load' ),
            'category'     => __( 'Animations' ),
            'inline_style' => '
                @keyframes bounceIn {
                    0% { transform: scale(0.9); opacity: 0; }
                    50% { transform: scale(1.05); opacity: 1; }
                    100% { transform: scale(1); }
                }
                .bsmp-bounce {
                    animation: bounceIn 0.8s ease forwards;
                }
            ',
        ] );

        block_style_modifiers_register_style( '*', [
            'name'         => 'delay-2s',
            'label'        => 'Delay 2 Seconds',
            'class'        => 'bsmp-delay-2s',
            'description'  => __( 'Add 2-second delay to animation' ),
            'category'     => __( 'Animations' ),
            'inline_style' => '
                .bsmp-delay-2s {
                    animation-delay: 2s !important;
                }
            ',
        ] );

        block_style_modifiers_register_style( '*', [
            'name'         => 'slide-up',
            'label'        => 'Slide Up',
            'class'        => 'bsmp-slide-up',
            'description'  => __( 'Slide in from bottom' ),
            'category'     => __( 'Animations' ),
            'inline_style' => '
                @keyframes slideUp {
                    from { transform: translateY(20px); opacity: 0; }
                    to { transform: translateY(0); opacity: 1; }
                }
                .bsmp-slide-up {
                    animation: slideUp 0.6s ease-out forwards;
                }
            ',
        ] );

        block_style_modifiers_register_style( '*', [
            'name'         => 'delay-1s',
            'label'        => 'Delay 1 Second',
            'class'        => 'bsmp-delay-1s',
            'description'  => __( 'Add 1-second delay to animation' ),
            'category'     => __( 'Animations' ),
            'inline_style' => '
                .bsmp-delay-1s {
                    animation-delay: 1s !important;
                }
            ',
        ] );
    }
}