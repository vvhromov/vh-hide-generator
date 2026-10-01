<?php
/*
Plugin Name:    VH-hide-generator
Plugin URI:     https://vahro.ru/blog/plugins/vh-hide-generator
Description:    Удаляет версию WordPress со страниц сайта
Author:         Хромов Вадим
Author URI:     https://vahro.ru/
Version:        1.2.4

vh-hide-generator.php

*/

defined( 'ABSPATH' ) OR exit; // Game over

add_action('init', 
function () {
  remove_action('wp_head','wp_generator');  // скрыть версию WordPress
} );