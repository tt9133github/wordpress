<?php
if (! defined ( 'ABSPATH' ))
	exit (); // Exit if accessed directly

class XH_WP_Optimize_Admin{
	public function __construct(){
		require_once XH_WP_OPTIMIZET_DIR.'/admin/abstract/abstract-xh-view.php';
		require_once XH_WP_OPTIMIZET_DIR.'/admin/abstract/abstract-xh-view-form-native.php';
		require_once XH_WP_OPTIMIZET_DIR.'/admin/abstract/abstract-xh-view-form-custom.php';

		add_action('admin_menu',array($this,'admin_menu') ,10);
		add_action( 'admin_head', array( $this, 'menu_highlight' ) );
		add_filter ( 'plugin_action_links_'.plugin_basename( XH_WP_OPTIMIZET_FILE ),array($this,'plugin_action_links') );
	}
	
	public function menu_highlight(){
		global $submenu;
	
		if ( isset( $submenu['xh_wp_optimize_base'] ) ) {
			if(isset($submenu['xh_wp_optimize_base'][0])){
				unset( $submenu['xh_wp_optimize_base'][0] );
			}
		}
	}
	
	public function plugin_action_links($links) {
		return array_merge ( array (
				'settings' => '<a href="' . admin_url ( 'admin.php?page=xh_wp_optimize' ) . '">设置</a>'
		), $links );
	}
	
	public function admin_menu(){
		global $current_user;
		if(!is_user_logged_in()){
			return;
		}
		if(!in_array('administrator', $current_user->roles)){
			return;
		}
		
		add_menu_page('WP-Chinese-Optimize',  'WP-Chinese-Optimize', 'administrator', 'xh_wp_optimize_base',null,null,'55.5');
		add_submenu_page('xh_wp_optimize_base','网站优化',  '网站优化', 'administrator', 'xh_wp_optimize',array($this,'admin_menu_setting'));
		//add_submenu_page('xh_wp_optimize_base','统计代码',  '统计代码', 'administrator', 'xh_wp_optimize_footer',array($this,'admin_menu_setting_footer'));
	}

	public function admin_menu_setting(){
		$section =isset($_GET['section'])?$_GET['section']:'';
		switch ($section){
			default:
				require_once XH_WP_OPTIMIZET_DIR.'/admin/views/class-xh-view-settings-all.php';
				new XH_WP_Optimize_View_Settings_All();
				break;
			case 'footer':
				require_once XH_WP_OPTIMIZET_DIR.'/admin/views/class-xh-view-settings-footer.php';
				new XH_WP_Optimize_View_Settings_Footer();
				break;
			case 'header':
				require_once XH_WP_OPTIMIZET_DIR.'/admin/views/class-xh-view-settings-header.php';
				new XH_WP_Optimize_View_Settings_Header();
				break;
			case 'post':
				require_once XH_WP_OPTIMIZET_DIR.'/admin/views/class-xh-view-settings-post.php';
				new XH_WP_Optimize_View_Settings_Post();
				break;
		}
	}
	
// 	public function admin_menu_setting_footer(){
// 		require_once XH_WP_OPTIMIZET_DIR.'/admin/views/class-xh-view-settings-tj.php';
// 		new XH_WP_Optimize_View_Settings_TJ();
// 		break;
// 	}
}