<?php
if (! defined ( 'ABSPATH' ))
	exit (); // Exit if accessed directly

abstract class XH_WP_Optimize_Abstract_View{
	
	public function __construct(){
		?>
		<div class="wrap woocommerce">
			<?php $this->before_content()?>
				<div class="icon32 icon32-woocommerce-settings" id="icon-woocommerce">
					<br>
				</div>
					<?php 
						$menus = $this->menus();
						if($menus){
							?><h2 class="nav-tab-wrapper woo-nav-tab-wrapper"><?php 
							foreach ($menus as $menu){
								?><a href="<?php print esc_attr($menu['url'])?>" class="nav-tab <?php print (isset($menu['selected'])&&$menu['selected']==1?'nav-tab-active':'')?>"><?php print esc_html($menu['name'])?></a><?php 
							}
							?></h2><?php
						}
						unset($menus);
						
						$sub_menus = $this->sub_menus();
						if($sub_menus){
							$qty =count($sub_menus);
							$index =0;
							?><ul class="subsubsub"><?php
							$this->before_submenus();
							foreach ($sub_menus as $menu){
								?>
								<li>
									<a href="<?php print esc_attr($menu['url'])?>" class="<?php print (isset($menu['selected'])&&$menu['selected']==1?'current':'')?>"><?php print esc_html($menu['name'])?></a> <?php print ($index++<($qty-1)?'|':'')?>
								</li>
								<?php 
							}
							unset($qty);
							unset($index);
							$this->end_submenus();
							?></ul><?php
						}
						unset($sub_menus);
					?>
				
				<br class="clear">
				<?php $this->content()?>
				<?php $this->after_content()?>
		</div>
		<?php		
	}
	
	public abstract function before_content();
	
	public abstract function after_content();

	public abstract function menus();
	
	public abstract function sub_menus();
	
	public abstract function content();
	
	public function before_submenus(){}
	public function end_submenus(){}
}
?>