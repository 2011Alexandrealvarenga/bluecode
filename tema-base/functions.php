<?php 
function load_scripts(){
  wp_enqueue_style('style-root', get_template_directory_uri() . '/css/style.css', array(), '1.0','all');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0','all');

 
}

//chama a função load_scripts
add_action( 'wp_enqueue_scripts', 'load_scripts' );


function primeiro(){ 
  wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery2.js', array('jquery'),'4.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'primeiro', 2 );


function segundo(){
  wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.js', array('jquery'),'4.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'segundo', 1 );
























// REGISTRAR OS MENUS
register_nav_menus( array(
  'principal'=>__('Menu Principal','base')
));
