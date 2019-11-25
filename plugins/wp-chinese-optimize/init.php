<?php
/*
 * Plugin Name: WP-Chinese-Optimize
 * Plugin URI: http://www.xunhuweb.com
 * Description: 去除wordpress多余功能，压缩html,css
 * Version: 1.0.1
 * Author: 迅虎网络 
 * Author URI:http://www.wpweixin.net 
 * Text Domain: optimize
 */
if (! defined ( 'ABSPATH' )) exit (); // Exit if accessed directly

define('XH_WP_OPTIMIZE', 'XH_WP_OPTIMIZE');
define('XH_WP_OPTIMIZE_VERSION', '1.0.1');
define('XH_WP_OPTIMIZET_FILE',__FILE__);
define('XH_WP_OPTIMIZET_DIR',rtrim(plugin_dir_path(XH_WP_OPTIMIZET_FILE),'/'));
define('XH_WP_OPTIMIZET_URL',rtrim(plugin_dir_url(XH_WP_OPTIMIZET_FILE),'/'));

add_action('init', function(){
    require_once 'admin/class-xh-wp-optimize-admin.php';
    new XH_WP_Optimize_Admin();
});

require_once 'class-xh-wp-optimize.php';
new XH_WP_Optimize();