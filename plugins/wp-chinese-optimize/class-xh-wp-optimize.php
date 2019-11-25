<?php
if (! defined ( 'ABSPATH' )) exit (); // Exit if accessed directly

class XH_WP_Optimize{
	private $header,$all;
	public function __construct(){
		$all = get_option('XH_WP_OPTIMIZE_ALL',array());
		if(!$all||!is_array($all)){$all=array();}
		$this->all =$all;

		if(isset($all['cron'])&&$all['cron']=='yes'){
			define('DISABLE_WP_CRON',true);
		}
		if(isset($all['disable_google_fonts'])&&$all['disable_google_fonts']=='yes'){
			add_filter( 'gettext_with_context', array( $this, 'disable_open_sans'), 888, 4 );
			add_action( 'init', array($this,'remove_open_sans') );
			add_action('get_header', array($this,'wp_compress_html'));
		}

		if(isset($all['auto_update'])&&$all['auto_update']=='yes'){
			add_filter('automatic_updater_disabled', '__return_true');	// 彻底关闭自动更新

			wp_clear_scheduled_hook('wp_version_check');			// 移除已有的版本检查定时作业
			wp_clear_scheduled_hook('wp_update_plugins');		// 移除已有的插件更新定时作业
			wp_clear_scheduled_hook('wp_update_themes');			// 移除已有的主题更新定时作业
			wp_clear_scheduled_hook('wp_maybe_auto_update');		// 移除已有的自动更新定时作业
				
			//
			remove_action( 'admin_init', '_maybe_update_core' );
			remove_action( 'wp_version_check', 'wp_version_check' );
			remove_action( 'upgrader_process_complete', 'wp_version_check', 10, 0 );
				
			remove_action( 'load-plugins.php', 'wp_update_plugins' );
			remove_action( 'load-update.php', 'wp_update_plugins' );
			//强制更新页面，保留更新
			//remove_action( 'load-update-core.php', 'wp_update_plugins' );
			remove_action( 'admin_init', '_maybe_update_plugins' );
			remove_action( 'wp_update_plugins', 'wp_update_plugins' );
			remove_action( 'upgrader_process_complete', 'wp_update_plugins', 10, 0 );
				
			remove_action( 'load-themes.php', 'wp_update_themes' );
			remove_action( 'load-update.php', 'wp_update_themes' );
			//强制更新页面，保留更新
			//remove_action( 'load-update-core.php', 'wp_update_themes' );
			remove_action( 'admin_init', '_maybe_update_themes' );
			remove_action( 'wp_update_themes', 'wp_update_themes' );
			remove_action( 'upgrader_process_complete', 'wp_update_themes', 10, 0 );
				
			remove_action( 'update_option_WPLANG', 'wp_clean_update_cache' , 10, 0 );
			remove_action( 'wp_maybe_auto_update', 'wp_maybe_auto_update' );
			remove_action( 'init', 'wp_schedule_update_checks' );
		}

		if(isset($all['html_zip'])&&$all['html_zip']=='yes'){
			
		}

		$header = get_option('XH_WP_OPTIMIZE_HEADER',array());
		if(!$header||!is_array($header)){$header=array();}
		$this->header = $header;

		if(isset($header['get_avatar'])&&$header['get_avatar']=='yes'){
			add_filter( 'get_avatar', array($this,'get_avatar'), 1, 1 );
		}

		if(isset($header['generator'])&&$header['generator']=='yes'){
			remove_action ( 'wp_head', 'wp_generator' );
			foreach ( array( 'rss2_head', 'commentsrss2_head', 'rss_head', 'rdf_header', 'atom_head', 'comments_atom_head', 'opml_head', 'app_head' ) as $action ) {
				remove_action( $action, 'the_generator' );
			}
		}

		if(isset($header['rsd_link'])&&$header['rsd_link']=='yes'){
			remove_action ( 'wp_head', 'rsd_link' );
			remove_action ( 'wp_head', 'wlwmanifest_link' );
		}

		if(isset($header['feed'])&&$header['feed']=='yes'){
			remove_action('wp_head', 'feed_links', 2);
			remove_action('wp_head', 'feed_links_extra', 3);
		}

		if(isset($header['post_meta'])&&$header['post_meta']=='yes'){
			remove_action ( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
			remove_action ( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
		}

		if(isset($header['canonical'])&&$header['canonical']=='yes'){
			remove_action ( 'wp_head', 'rel_canonical' );
		}

		if(isset($header['rest_api'])&&$header['rest_api']=='yes'){
			remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
			remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
			remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
			remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
			remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
			remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
			remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
			remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
			remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
		}

		if(isset($header['auto-embeds'])&&$header['auto-embeds']=='yes'){
			//remove_filter ( 'the_content', array ($GLOBALS ['wp_embed'],'autoembed' ), 8 );
			// Embeds
			remove_action( 'rest_api_init',          'wp_oembed_register_route'              );
			remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );
				
			remove_action( 'wp_head',                'wp_oembed_add_discovery_links'         );
			remove_action( 'wp_head',                'wp_oembed_add_host_js'                 );
				
			remove_action( 'embed_head',             'enqueue_embed_scripts',           1    );
			remove_action( 'embed_head',             'print_emoji_detection_script'          );
			remove_action( 'embed_head',             'print_embed_styles'                    );
			remove_action( 'embed_head',             'wp_print_head_scripts',          20    );
			remove_action( 'embed_head',             'wp_print_styles',                20    );
			remove_action( 'embed_head',             'wp_no_robots'                          );
			remove_action( 'embed_head',             'rel_canonical'                         );
			remove_action( 'embed_head',             'locale_stylesheet'                     );
				
			remove_action( 'embed_content_meta',     'print_embed_comments_button'           );
			remove_action( 'embed_content_meta',     'print_embed_sharing_button'            );
				
			remove_action( 'embed_footer',           'print_embed_sharing_dialog'            );
			remove_action( 'embed_footer',           'print_embed_scripts'                   );
			remove_action( 'embed_footer',           'wp_print_footer_scripts',        20    );
				
			remove_filter( 'excerpt_more',           'wp_embed_excerpt_more',          20    );
			remove_filter( 'the_excerpt_embed',      'wptexturize'                           );
			remove_filter( 'the_excerpt_embed',      'convert_chars'                         );
			remove_filter( 'the_excerpt_embed',      'wpautop'                               );
			remove_filter( 'the_excerpt_embed',      'shortcode_unautop'                     );
			remove_filter( 'the_excerpt_embed',      'wp_embed_excerpt_attachment'           );
				
			remove_filter( 'oembed_dataparse',       'wp_filter_oembed_result',        10, 3 );
			remove_filter( 'oembed_response_data',   'get_oembed_response_data_rich',  10, 4 );
			remove_filter( 'pre_oembed_result',      'wp_filter_pre_oembed_result',    10, 3 );
		}

		if(isset($header['wp-logo'])&&$header['wp-logo']=='yes'){
			add_action ( 'add_admin_bar_menus', array($this,'add_admin_bar_menus') );
		}

		if(isset($header['wp-top-menu'])&&$header['wp-top-menu']=='yes'){
			add_filter ( 'show_admin_bar', '__return_false' );
		}

		if(isset($header['wp-update-info'])&&$header['wp-update-info']=='yes'){
			add_action ( 'admin_menu', array($this,'remove_admin_notices_update_nag') );
		}

		if(isset($header['wpemoji'])&&$header['wpemoji']=='yes'){
			remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
			remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
			remove_action( 'wp_print_styles', 'print_emoji_styles' );
			remove_action( 'admin_print_styles', 'print_emoji_styles' );
			remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
			remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
			remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
			add_filter( 'tiny_mce_plugins', array($this,'tiny_mce_plugins') ,10,1 );
		}

		$footer = get_option('XH_WP_OPTIMIZE_FOOTER',array());
		if(!$footer||!is_array($footer)){$footer=array();}

		if(isset($footer['footer_welcome'])&&$footer['footer_welcome']=='yes'){
			add_filter ( 'admin_footer_text', array($this,'remove_wp_admin_footer_thankyou') ,10,1);
		}

		if(isset($footer['footer_update_info'])&&$footer['footer_update_info']=='yes'){
			add_action('in_admin_footer',array($this,'in_admin_footer'));
		}

		$post = get_option('XH_WP_OPTIMIZE_POST',array());
		if(!$post||!is_array($post)){$post=array();}


		if(isset($post['revision'])&&$post['revision']=='yes'){
			if ( !defined('WP_POST_REVISIONS') )
				define('WP_POST_REVISIONS', false );
				
			remove_action('pre_post_update', 'wp_save_post_revision' );
		}

		if(isset($post['autosave'])&&$post['autosave']=='yes'){
			if ( !defined( 'AUTOSAVE_INTERVAL' ) )
				define( 'AUTOSAVE_INTERVAL', false );
				
			add_action( 'wp_print_scripts', array($this,'disable_autosave') );
		}

		if(isset($post['autodraft'])&&$post['autodraft']=='yes'){
				
		}

		if(isset($post['xml_rpc'])&&$post['xml_rpc']=='yes'){
			add_filter('xmlrpc_enabled','__return_false');
		}
	}

	function disable_autosave() {
		wp_deregister_script('autosave');
	}

	function wp_compress_html(){
		ob_start(array($this,'wp_compress_html_main'));
	}

	function wp_compress_html_main ($buffer){
		return preg_replace_callback("/(fonts.googleapis.com)|(ajax.googleapis.com)|(themes.googleusercontent.com)|(fonts.gstatic.com)/",function($matches){
			if(count($matches)==0){
				return '';
			}

			switch ($matches[0]){
				//case 'fonts.googleapis.com':
					//return 'www.googlefonts.cn';
				case 'ajax.googleapis.com':
					return 'ajax.lug.ustc.edu.cn';
				case 'themes.googleusercontent.com':
					return 'google-themes.lug.ustc.edu.cn';
				case 'fonts.gstatic.com':
					return 'fonts-gstatic.lug.ustc.edu.cn';
				default:
					return apply_filters('xh_wp_optimize_wp_compress_html_main', $matches[0]);
						
			}
		},$buffer);
	}

	function wp_revisions_to_keep(){
		return 0;
	}

	function wp_print_scripts(){
		wp_deregister_script('autosave');
	}

	function remove_open_sans(){
		wp_deregister_style( 'open-sans' );
		wp_register_style( 'open-sans', false );
		wp_enqueue_style('open-sans','');
	}

	function in_admin_footer(){
		remove_filter('update_footer', 'core_update_footer');
	}

	function remove_wp_admin_footer_thankyou($html){
		return '';
	}

	function tiny_mce_plugins($plugins){
		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}
	}

	function remove_admin_notices_update_nag(){
		remove_action ( 'admin_notices', 'update_nag', 3 );
	}

	function add_admin_bar_menus(){
		remove_action ( 'admin_bar_menu', 'wp_admin_bar_wp_menu' );
	}

	function get_avatar($avatar) {
		$avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"),"gravatar.duoshuo.com",$avatar);
		return $avatar;
	}

	function disable_open_sans( $translations, $text, $context, $domain ) {
		if ( 'Open Sans font: on or off' == $context && 'on' == $text ) {
			$translations = 'off';
		}

		return $translations;
	}
}

