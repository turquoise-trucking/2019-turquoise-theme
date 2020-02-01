<?php 

  remove_filter ('the_content', 'wpautop');
      
      function themebs_enqueue_scripts() {
        wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
        wp_enqueue_style( 'fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css' );
        wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
        
        wp_enqueue_script( 'jquery' , '//code.jquery.com/jquery-3.4.1.slim.min.js' );
        wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js' );
        wp_enqueue_script( 'popper', '//unpkg.com/@popperjs/core@2.0.0-rc.3' );
        wp_enqueue_script( 'fontawesome', '//kit.fontawesome.com/74abbf3163.js' );
        wp_enqueue_script( 'turquoise', get_template_directory_uri() . '/js/turquoise.js' );
        
      }
      add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');
?>