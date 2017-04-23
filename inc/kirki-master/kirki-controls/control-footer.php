<?php

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'footer_txt',
	'label'    => __( 'Text Control', 'starter' ),
	'section'  => 'section_footer',
	'default'  => esc_attr__( 'Powered By', 'starter' ),
	'priority' => 10,
) );

Kirki::add_field( 'my_config', array(
	'type'     => 'text',
	'settings' => 'footer_txt_2',
	'label'    => __( 'Text Control', 'starter' ),
	'section'  => 'section_footer',
	'default'  => esc_attr__( 'Your Name', 'starter' ),
	'priority' => 20,
) );