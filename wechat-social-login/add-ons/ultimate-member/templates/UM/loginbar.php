<?php 
if (! defined ( 'ABSPATH' ))
    exit (); // Exit if accessed directly
?>
<div class="um-row" style="margin: 0 0 30px 0;">
<div class="um-col-1">
    <div class="um-field um-field-username um-field-text" data-key="username">
        <div class="um-field-label">
            <label for="username-888"><?php echo __('Quick Login:',XH_SOCIAL)?></label>
            <div class="um-clear"></div>
        </div>
    
    	<div class="um-field-area">
    	<?php 
    	$channels =XH_Social::instance()->channel->get_social_channels(array('login'));
    	?>
    	<div class="xh-regbox" style="width:100%;border:0;padding:0;">
	    <div class="xh_social_box" style="clear:both;">
    	   <?php 
	        foreach ($channels as $channel){
    	        ?>
    	        <a href="<?php echo XH_Social::instance()->channel->get_authorization_redirect_uri($channel->id);?>" rel="noflow" style="background:url(<?php echo $channel->icon?>) no-repeat transparent;" class="xh_social_login_bar" title="<?php echo $channel->title;?>"></a>
    	        <?php 
    	    }?>
	    </div><?php 
    	?>
    	</div>
    	</div>
	</div>
</div>
</div>
<?php 