<?php
/*
  Plugin Name: SP Siteorigin Widget
  Plugin URI: https://sputznik.com/
  Description: Adds a custom SiteOrigin widget to show external links in a list.
  Version: 1.0.0
  Author: Suhail Bin Abdullah
  Author URI: https://sputznik.com/
*/

define( 'SP_SOW_VERSION', time() );

class External_Links_Widget_Loader {

  private static $instance = null;

  public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new self();
    }
    return self::$instance;
  }

  function __construct() {
    add_filter('siteorigin_widgets_widget_folders', array($this, 'addWidgetFolder'));
    add_action( 'wp_enqueue_scripts', array( $this, 'assets' ) );
  }

  function addWidgetFolder($folders) {
    $folders[] = plugin_dir_path(__FILE__) . 'widgets/';
    return $folders;
  }

  function assets(){
    wp_enqueue_style( 'buttonscript', plugin_dir_url(  __FILE__).'assets/css/sow.css', array(), SP_SOW_VERSION );
  }

}

External_Links_Widget_Loader::getInstance();
