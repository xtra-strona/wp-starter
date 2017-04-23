<nav id="site-navigation" class="main-navigation" role="navigation">
	<button class="menu-toggle" aria-controls="top-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'starter' ); ?></button>
	<?php wp_nav_menu( array( 
            'theme_location' => 'menu-1', 
            'menu_id' => 'top-menu',
            'walker'  => new Walker_Top_Menu() //use our custom walker
            ) ); ?>
</nav><!-- #site-navigation -->
