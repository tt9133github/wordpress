<?php
if (! defined ( 'ABSPATH' ))
	exit (); // Exit if accessed directly

abstract class XH_WP_Optimize_View_Form_Custom extends XH_WP_Optimize_Abstract_View{
	public  function before_content(){
		?><form method="post" id="mainform" action="" enctype="multipart/form-data"><?php 
	}
	
	public  function after_content(){
		?><p class="submit">
			<input type="submit" value="保存" class="button-primary" />
		 </p>
		</form><?php
	}
}