<?php

/**
 * Enqueue scripts for custom blocks
 */

 //wp_enqueue_script( $nickname, $location, $dependencies, $version, $in_footer );

 function xbridge_block_scripts() {
    // Add xbridge Gutenberg block scripts
    wp_enqueue_script(
      'xbridge-block-scripts',
      get_template_directory_uri() . '/dist/js/blocks.js',
      array(
        'wp-blocks',
        'wp-components',
        'wp-element',
        'wp-i18n',
        'wp-editor'
      ),
      '1.0.0',
      true);
  
    // Register xbridge block types
    register_block_type(
      'xbridge/blocks',
      array(
        'editor_script' => 'xbridge-block-scripts',
      )
    );
  }
  add_action('enqueue_block_assets', 'xbridge_block_scripts');