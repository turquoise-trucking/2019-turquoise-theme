<?php 

  remove_filter ('the_content', 'wpautop');

    function themebs_enqueue_styles() {

        wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
        wp_enqueue_style( 'fontawesome' , '//stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style( 'core', get_template_directory_uri() . 'style.css' );
      }
      add_action( 'wp_enqueue_styles', 'themebs_enqueue_styles');
      
      function themebs_enqueue_scripts() {
        wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js' );
        wp_enqueue_script( 'popper', '//unpkg.com/@popperjs/core@2.0.0-rc.3' );
      }
      add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');
?>