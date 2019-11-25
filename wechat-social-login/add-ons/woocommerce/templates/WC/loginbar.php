<?php 
if (! defined ( 'ABSPATH' ))
    exit (); // Exit if accessed directly
?>
<div class="xh-regbox" style="width:100%;border:0;padding:0;">
    <?php   $channels =XH_Social::instance()->channel->get_social_channels(array('login'));?>
    <div class="xh_social_box" style="clear:both;">
       <?php 
        foreach ($channels as $channel){
            ?>
            <a href="<?php echo XH_Social::instance()->channel->get_authorization_redirect_uri($channel->id);?>" rel="noflow" style="background:url(<?php echo $channel->icon?>) no-repeat transparent;" class="xh_social_login_bar" title="<?php echo $channel->title;?>"></a>
            <?php 
        }?>
    </div>
</div>