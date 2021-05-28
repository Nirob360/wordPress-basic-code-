<?php 

function dreamCoder_css_js(){   
// style css file is here    
    wp_enqueue_style( "dreamCoderGrid", get_template_directory_uri().'/assets/style/dreamcoderbd.grid.min.css','1.1.0', 'all');
    wp_enqueue_style( "dreamCoderBundle", get_template_directory_uri().'/assets/style/dream-coder-bundle.css','1.1.0', 'all');
    wp_enqueue_style( "CustomStyle", get_template_directory_uri().'/assets/style/style.css','1.1.0', 'all');

                                                        //js script 

wp_enqueue_script( 'Jquery', get_template_directory_uri() . '/assets/js/jQuerymin.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'dreamCoderBundle', get_template_directory_uri() . '/assets/js/dream-coder-bundle.js', array ( 'jquery' ), 1.1, true);
wp_enqueue_script( 'mainJs', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);

}







add_action("wp_enqueue_scripts","dreamCoder_css_js");

?>

