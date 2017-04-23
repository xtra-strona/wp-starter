<?php

Kirki::add_section( 'section_footer', array(
    'title'          => __( 'Footer Copyright','starter' ),
    'description'    => __( 'Change Footer Options','starter' ),
    'panel'          => 'panel_footer', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );
