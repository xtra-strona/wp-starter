<?php

Kirki::add_config( 'my_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

include_once( dirname( __FILE__ ) . '/kirki-panels.php' );
include_once( dirname( __FILE__ ) . '/kirki-sections.php' );
//include_once( dirname( __FILE__ ) . '/inc/kirki-master/kirki-translate.php' );

//Control Footer
include_once( dirname( __FILE__ ) . '/kirki-controls/control-footer.php' );