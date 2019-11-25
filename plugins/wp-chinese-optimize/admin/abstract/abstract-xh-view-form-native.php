<?php
if (! defined ( 'ABSPATH' ))
	exit (); // Exit if accessed directly

abstract class XH_WP_Optimize_View_Form_Native extends XH_WP_Optimize_Abstract_View{
	public $options;
	public $id;
	
	public function __construct(){
		$this->options = get_option($this->id,array());
		parent::__construct();
	}
	
	public  function before_content(){
		?><form method="post" id="mainform" action="options.php" enctype="multipart/form-data"><?php 
	}
	
	public  function after_content(){
		?><p class="submit">
				<?php 
				wp_nonce_field('update-options')
				?>
					<input type="hidden" name="action" value="update" /> 
					<input type="hidden" name="page_options" value="<?php print $this->id?>" /> 
					<input type="submit" value="保存" class="button-primary" />
				</p>
			</form><?php
	}
}