<?php
/*
* MaivCoding Flamingo Theme
*/

function register_mavicoding_nav_menu(){
  register_nav_menus(
    array(
      'master-menu' => __('Master Menu', 'flamingo-theme')
    )
  );
}

add_action('init', 'register_mavicoding_nav_menu');

?>