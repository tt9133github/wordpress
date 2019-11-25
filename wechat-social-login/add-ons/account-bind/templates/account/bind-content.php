<?php 
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if(function_exists('XH_Social_Temp_Helper::clear')){
    $attdata = XH_Social_Temp_Helper::clear('atts','templete');
}else{
    $attdata = XH_Social_Temp_Helper::get('atts','templete');
}
$atts = $attdata['atts'];
$log_on_callback_uri=esc_url_raw(XH_Social_Shortcodes::get_attr($atts, 'redirect_to'));
if(empty($log_on_callback_uri)){
    if(isset($_GET['redirect_to'])){
        $log_on_callback_uri =esc_url_raw(urldecode($_GET['redirect_to']));
    }
}

if(empty($log_on_callback_uri)){
    $log_on_callback_uri = XH_Social::instance()->session->get('social_login_location_uri');
}

if(empty($log_on_callback_uri)){
    $log_on_callback_uri=home_url('/');
}

if(strcasecmp(XH_Social_Helper_Uri::get_location_uri(), $log_on_callback_uri)===0){
    $log_on_callback_uri =home_url('/');
}

$api =XH_Social_Add_Ons_Account_Bind::instance();
$channel=null;$user_ext_info=null;
if(!$api->pre_page_account_bind_validate($channel, $user_ext_info)){
    ?>
    <script type="text/javascript">
		location.href='<?php echo wp_login_url($log_on_callback_uri);?>';
	</script>
    <?php 
    return;
}
?>
<div class="xh-regbox">
	<div class="xh-title"><?php echo __('Complete Account',XH_SOCIAL)?></div>
	<form class="xh-form">
		<div class="xh-form-group xh-mT20">
            <label><?php echo sprintf(__('You are using: <a><img style="width:20px;" src="%s" /> %s</a>',XH_SOCIAL),$channel->icon,$channel->title)?></label>
        </div>
		<div id="fields-error"></div>
		<div id="fields-register">
			<?php 
			    $fields = $api->page_account_bind_register_fields($channel,$user_ext_info);
			    echo XH_Social_Helper_Html_Form::generate_html('register', $fields);
			?>
            <div class="xh-form-group mt10">
                <button type="button" id="btn-register" onclick="window.xh_social_view.register();" class="xh-btn xh-btn-primary xh-btn-block xh-btn-lg"><?php echo __('Log In',XH_SOCIAL)?></button>
            </div>
            <?php 
            $params1 = array();
            $url = XH_Social_Helper_Uri::get_uri_without_params(XH_Social::instance()->ajax_url(),$params1);
            
            $params['ext_user_id']=isset($user_ext_info['ext_user_id'])?$user_ext_info['ext_user_id']:0;
            $params['channel_id']=$channel?$channel->id:0;
            $params['notice_str']=str_shuffle(time());
            $params['action']="xh_social_{$api->id}";
            $params["xh_social_{$api->id}"]=wp_create_nonce("xh_social_{$api->id}");
            $params['tab']='skip';
            $params['hash'] = XH_Social_Helper::generate_hash($params, XH_Social::instance()->get_hash_key());
            $params = array_merge($params,$params1);
            $skip_url=$url."?".http_build_query($params) ;
            ?>
        	<p class="mt20 mb0 clearfix" role="presentation"><a class="xh-pull-left" onclick="window.xh_social_view.login_show();" href="javascript:void(0);" aria-controls="tab2" role="tab" data-toggle="tab"><?php echo __('Use the existing account',XH_SOCIAL)?></a> 
        	<?php if('yes'==$api->get_option('allow_skip')){
        	    ?>
        	    <a href="<?php echo $skip_url;?>" class="xh-pull-right"><?php echo __('Skip',XH_SOCIAL)?></a>
        	    <?php 
        	}?>
        	
        	</p>
        </div>
        <div id="fields-login" style="display:none;">
            <?php 
			    $fields = $api->page_account_bind_login_fields($channel,$user_ext_info);
			    echo XH_Social_Helper_Html_Form::generate_html('login', $fields);
			?>
            <div class="xh-form-group mt10">
                <button type="button" id="btn-login" onclick="window.xh_social_view.login();" class="xh-btn xh-btn-primary xh-btn-block xh-btn-lg"><?php echo __('Register and bind',XH_SOCIAL)?></button>
            </div>
        	<p class="text-center mt20 mb0 " role="presentation"><a onclick="window.xh_social_view.register_show();" href="javascript:void(0);" aria-controls="tab2" role="tab" data-toggle="tab"><?php echo __('Register a new account',XH_SOCIAL)?></a></p>
        </div>
	</form>
</div>

<script type="text/javascript">
	(function($){
		window.xh_social_view={
			login_show:function(){
				this.reset();
				$('#fields-register').css('display','none');
				$('#fields-login').css('display','block');
			},
			register_show:function(){
				this.reset();
				$('#fields-register').css('display','block');
				$('#fields-login').css('display','none');
			},
			loading:false,
			reset:function(){
				$('.xh-alert').empty().css('display','none');
			},
			error:function(msg){
				$('#fields-error').html('<div class="xh-alert xh-alert-danger" role="alert">'+msg+' </div>').css('display','block');
			},
			success:function(msg){
				$('#fields-error').html('<div class="xh-alert xh-alert-success" role="alert">'+msg+' </div>').css('display','block');
			},
			register:function(){
				this.reset();
				<?php 
				$data = array(
				    'ext_user_id'=>isset($user_ext_info['ext_user_id'])?$user_ext_info['ext_user_id']:0,
				    'channel_id'=>$channel?$channel->id:0,
				    'notice_str'=>str_shuffle(time()),
				    'action'=>"xh_social_{$api->id}",
				    "xh_social_{$api->id}"=>wp_create_nonce("xh_social_{$api->id}"),
				    'tab'=>'register'
				);
				
				$data['hash']= XH_Social_Helper::generate_hash($data,XH_Social::instance()->get_hash_key());
				?>
				
				var data=<?php echo json_encode($data);?>;
				<?php 
				    XH_Social_Helper_Html_Form::generate_submit_data('register', 'data');
				?>
				
				if(this.loading){
					return;
				}
				
				$('#btn-register').attr('disabled','disabled').text('<?php print __('loading...',XH_SOCIAL)?>');
				this.loading=true;

				jQuery.ajax({
		            url: '<?php echo XH_Social::instance()->ajax_url()?>',
		            type: 'post',
		            timeout: 60 * 1000,
		            async: true,
		            cache: false,
		            data: data,
		            dataType: 'json',
		            complete: function() {
		            	$('#btn-register').removeAttr('disabled').text('<?php print __('Register and bind',XH_SOCIAL)?>');
		            	window.xh_social_view.loading=false;
		            }, 
		            success: function(m) {
		            	if(m.errcode==405||m.errcode==0){
		            		window.xh_social_view.success('<?php print __('Congratulations, registered successfully!',XH_SOCIAL);?>');
							location.href='<?php echo $log_on_callback_uri;?>';
							return;
						}
		            	
		            	window.xh_social_view.error(m.errmsg);
		            },
		            error:function(e){
		            	window.xh_social_view.error('<?php print __('Internal Server Error!',XH_SOCIAL);?>');
		            	console.error(e.responseText);
		            }
		         });
			},
			login:function(){
				this.reset();
				<?php 
				$data = array(
				    'ext_user_id'=>isset($user_ext_info['ext_user_id'])?$user_ext_info['ext_user_id']:0,
				    'channel_id'=>$channel?$channel->id:0,
				    'notice_str'=>str_shuffle(time()),
				    'action'=>"xh_social_{$api->id}",
				    "xh_social_{$api->id}"=>wp_create_nonce("xh_social_{$api->id}"),
				    'tab'=>'login'
				);
				
				$data['hash']= XH_Social_Helper::generate_hash($data,XH_Social::instance()->get_hash_key());
				?>
				var data=<?php echo json_encode($data);?>;
				<?php 
				    XH_Social_Helper_Html_Form::generate_submit_data('login', 'data');
				?>
				
				if(this.loading){
					return;
				}
				
				$('#btn-login').attr('disabled','disabled').text('<?php print __('loading...',XH_SOCIAL)?>');
				this.loading=true;

				jQuery.ajax({
		            url: '<?php echo XH_Social::instance()->ajax_url()?>',
		            type: 'post',
		            timeout: 60 * 1000,
		            async: true,
		            cache: false,
		            data: data,
		            dataType: 'json',
		            complete: function() {
		            	$('#btn-login').removeAttr('disabled').text('<?php print __('Log On',XH_SOCIAL)?>');
		            	window.xh_social_view.loading=false;
		            },
		            success: function(m) {
		            	if(m.errcode==405||m.errcode==0){
		            		if(window.top){window.top.close();}
		            		window.xh_social_view.success('<?php print __('Congratulations, log on successfully!',XH_SOCIAL);?>');
		            		location.href='<?php echo $log_on_callback_uri;?>';
							return;
						}
		            	
		            	window.xh_social_view.error(m.errmsg);
		            },
		            error:function(e){
		            	window.xh_social_view.error('<?php print __('Internal Server Error!',XH_SOCIAL);?>');
		            	console.error(e.responseText);
		            }
		         });
			}
		};
	})(jQuery);
</script>
 