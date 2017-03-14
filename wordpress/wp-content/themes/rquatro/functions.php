<?php

//  Add Style to theme
function styleMain_style() {
 
 // ∆∆ Registre Styles & fonts
  wp_enqueue_style( 
  	'styleReset', 
  	 get_template_directory_uri().'/css/reset.css' ,
  	 '',
  	 null,
  	 'screen'
  	 );
   wp_enqueue_style( 
  	'plugins', 
  	      get_template_directory_uri().'/css/plugins.css' ,
  	 '',
  	 null,
  	 'screen'
  	 );
  wp_enqueue_style( 
  	'styleMain', 
  	 get_template_directory_uri().'/css/style.css' ,
  	 '',
  	 null,
  	 'screen'
  	 );
  wp_enqueue_style( 
    'custom', 
     get_template_directory_uri().'/css/custom.css' ,
     '',
     null,
     'screen'
     );
 }
add_action( 'wp_enqueue_scripts', 'styleMain_style' );

?>