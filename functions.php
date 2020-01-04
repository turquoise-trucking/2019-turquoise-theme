<? php 
    require('bs4navwalker.php');

    function themebs_enqueue_styles() {

        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'core', get_template_directory_uri() . 'style.css' );
        wp_enqueue_style( 'turquoise', get_template_directory_uri() . '/2019-turquoise.css' );
      
      }
      add_action( 'wp_enqueue_scripts', 'themebs_enqueue_styles');
      
      function themebs_enqueue_scripts() {
        wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap-4.1.3.min.js', array( 'jquery' ) );
        wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper-1.12.9.min.js');
      }
      add_action( 'wp_enqueue_scripts', 'themebs_enqueue_scripts');
?>