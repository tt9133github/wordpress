<?php 
if (! defined ( 'ABSPATH' ))
    exit (); // Exit if accessed directly
require_once 'abstract-xh-add-ons-api.php';
/**
 * 登录注册
 * 实现自定义登录注册，找回密码页面
 * 
 * @author ranj
 * @since 1.0.0
 */
class XH_Social_Add_On_Woo extends Abstract_XH_Social_Add_Ons_WOO_Api{   
    /**
     * The single instance of the class.
     *
     * @since 1.0.0
     * @var XH_Social_Add_On_Woo
     */
    private static $_instance = null;
    
    /**
     * 当前插件目录
     * @var string
     * @since 1.0.0
     */
    public $dir;
    
    /**
     * Main Social Instance.
     *
     * @since 1.0.0
     * @static
     * @return XH_Social_Add_On_Woo
     */
    public static function instance() {
        if ( is_null( self::$_instance ) ) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    
    protected function __construct(){
        parent::__construct();
        
        $this->id='wechat_social_add_ons_woocommerce';
        $this->title=__('WooCommerce',XH_SOCIAL);
        $this->description=__('WooCommerce扩展',XH_SOCIAL);
        $this->version='1.0.4';
        $this->min_core_version = '1.1.6';
        $this->author=__('xunhuweb',XH_SOCIAL);
        $this->author_uri='https://www.wpweixin.net';
        $this->plugin_uri='https://www.wpweixin.net/product/1094.html';
        
        $this->dir=  XH_Social_Helper_Uri::wp_dir(__FILE__);
    }

    public function on_load(){
        $this->m1();
    }
    
    public function on_init(){
        if(!class_exists('WooCommerce')){
            return;
        }
        $this->m2();
        
        remove_action('woocommerce_account_dashboard', array($this,'woocommerce_account_dashboard'));
        add_action('woocommerce_after_my_account', array($this,'woocommerce_account_dashboard'));
        add_action('xh_social_channel_mobile_update_wp_user_info', array($this,'update_wp_user_info'));
    }
    
    public function update_wp_user_info($ext_user_info){
        update_user_meta($ext_user_info['wp_user_id'], 'billing_phone', $ext_user_info['mobile']);
    }
   
    public function woocommerce_account_dashboard(){
        if(method_exists(XH_Social::instance()->WP, 'get_template')){
            require XH_Social::instance()->WP->get_template($this->dir, 'WC/account.php');
        }else{
            require $this->dir.'/WC/account.php';
        }
    }
  
    public function woocommerce_login_form(){
        if(is_user_logged_in()){
            return;
        }
        
        if(method_exists(XH_Social::instance()->WP, 'get_template')){
            require XH_Social::instance()->WP->get_template($this->dir, 'WC/loginbar.php');
        }else{
            require $this->dir.'/WC/loginbar.php';
        }
        	
    }
   
}

return XH_Social_Add_On_Woo::instance();
?>