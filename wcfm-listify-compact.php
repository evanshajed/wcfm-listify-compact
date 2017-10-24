<?php

/**

 * Plugin Name: WCfM Listify Compact

 * Plugin URI: https://github.com/evanshajed/wcfm-listify-compact

 * Description: A Patch for WCFM plugin and Listify Dashboard that compacts all the css and JS resources and optimizes them for better loading performance.

 * Author: Shajed Evan

 * Version: 1.0.0

 * Author URI: https://www.upwork.com/fl/evanshajed

 *

 * Text Domain: wcfm-listify-compact

 * Domain Path: /lang/

 *

 */

if(!defined('ABSPATH')) exit; // Exit if accessed directly

// Listify Load WCFM Scripts
// add_action( 'wcfm_load_scripts', 'wcfm_listify_load_scripts' );
// add_action( 'after_wcfm_load_scripts', 'wcfm_listify_load_scripts' );

// function wcfm_listify_load_scripts( $end_point ) {
//   global $WCFM;
//   $plugin_url = trailingslashit( plugins_url( '', __FILE__ ) );

//   switch( $end_point ) {
//     case 'wcfm-products-manage':
//       wp_enqueue_script( 'wcfm_listify_products_manage_js', $plugin_url . 'js/wcfm-script-listify-products-manage.js', array( 'jquery', 'wcfmu_wcbookings_products_manage_js' ), $WCFM->version, true );
//     break;

//     case 'wcfm-bookings-settings':
//     case 'wcfm-bookings-resources-manage':
//       wp_enqueue_script( 'wcfm_listify_products_manage_js', $plugin_url . 'js/wcfm-script-listify-products-manage.js', array( 'jquery' ), $WCFM->version, true );
//     break;
//   }
// }

// Listify Load WCFM Styles
add_action( 'wcfm_load_styles', 'wcfm_listify_load_compact_styles',999999 );
add_action( 'after_wcfm_load_styles', 'wcfm_listify_load_compact_styles',999999 );

function wcfm_listify_load_compact_styles( $end_point ) {
  global $WCFM;
  $plugin_url = trailingslashit( plugins_url( '', __FILE__ ) );





    // De registering Dashboard

    wp_dequeue_style('wcfm_dashboard_css');
    wp_deregister_style('wcfm_dashboard_css');

    // De registering Menu Styles

    wp_dequeue_style('wcfm_menu_css');
    wp_deregister_style('wcfm_menu_css');


    // De registering Slick Menu Styles

    wp_dequeue_style('wcfm_menu_slick_css');
    wp_deregister_style('wcfm_menu_slick_css');

    // De registering Template Styles

    wp_dequeue_style('wcfm_template_css');
    wp_deregister_style('wcfm_template_css');

  // switch( $end_point ) {
    // case 'wcfm-products-manage':
      //wp_enqueue_style( 'wcfmu_listify_products_manage_css', $plugin_url . 'css/wcfm-style-listify-products-manage.css', array( ), $WCFM->version );
    // break;
  // }
}

?>