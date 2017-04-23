<div class="site-info"> 
    <!-- //IF FUNCTION POLYLANG EXSIST && INCLUDE KIRKI CUSTOMIZER (get_theme_mod) -->
    <?php //https://polylang.wordpress.com/documentation/documentation-for-developers/functions-reference/
        if (function_exists('pll_the_languages')) { 
                $foot_f = pll__(get_theme_mod('footer_txt' ,'Powered by'));
                $foot_n = pll__(get_theme_mod('footer_txt_2'));
    // https://codex.wordpress.org/I18n_for_WordPress_Developers   
           printf( esc_html( '%1$s ' . '&copy; ' . '%2$s.'), $foot_f, $foot_n ); 
           } else { 
               //GET THEME MOD INCLUDE KIRKI CUSTOMIZER
                $foot_f = get_theme_mod('footer_txt' ,'Powered by');
                $foot_n = get_theme_mod('footer_txt_2', 'Your Name');
    // https://codex.wordpress.org/I18n_for_WordPress_Developers
            printf( esc_html__( '%1$s &copy; %2$s.', 'starter'), $foot_f, $foot_n );
    } ?>  
</div>
  <!-- .site-info -->
