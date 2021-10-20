<?php

   /**
   * Plugin Name: 15_10 Social Media Components
   * Plugin URI: 
   * description:  Creates a Shortcode for sharing Posts and Pages - shortcode ['FifteentenSocialLinks']
   * Version: 1.2
   * Author: Will @ Fifteenten
   * Author URI: fifteenten.co.uk
   * License: GPL2
   */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


require_once __DIR__ . '/src/functions.php';
require_once __DIR__ . '/src/classes/FifteentenSocialMediaComponents.php';


class FifteentenSocialMediaComponents_Plugin
{
   
   public function __construct()
   {
      $components = new FifteentenSocialMediaComponents();

   }
}


$plugin = new FifteentenSocialMediaComponents_Plugin();
