<?php
//TRANSLATE STRING WITH POLYLANG
$s1 = get_theme_mod('footer_txt');
$s2 = get_theme_mod('footer_txt_2');

  if (function_exists('pll_the_languages')) {

      pll_register_string('my-str1', $s1, 'Footer');
      pll_register_string('my-str2', $s2, 'Footer');

  }


