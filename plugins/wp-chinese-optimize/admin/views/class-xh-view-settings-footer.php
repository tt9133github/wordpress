<?php
if (! defined ( 'ABSPATH' ))
	exit (); // Exit if accessed directly

class XH_WP_Optimize_View_Settings_Footer extends XH_WP_Optimize_View_Form_Native{
	public function __construct(){
		$this->id ='XH_WP_OPTIMIZE_FOOTER';
		parent::__construct();
	}
	
	/* (non-PHPdoc)
	 * @see XH_WP_Optimize_View::menus()
	 */
	public function menus() {
		return array(
			array(
					'name'=>'全局',
					'url'=>admin_url('admin.php?page=xh_wp_optimize'),
					
			),
			array(
					'name'=>'Header',
					'url'=>admin_url('admin.php?page=xh_wp_optimize&section=header'),
					
			),
			array(
					'name'=>'Footer',
					'url'=>admin_url('admin.php?page=xh_wp_optimize&section=footer'),
					'selected'=>1
			),
			array(
					'name'=>'Post',
					'url'=>admin_url('admin.php?page=xh_wp_optimize&section=post'),
					
			)
		);
	}

	/* (non-PHPdoc)
	 * @see XH_WP_Optimize_View::sub_menus()
	 */
	public function sub_menus() {
		// TODO Auto-generated method stub
		
	}

	/* (non-PHPdoc)
	 * @see XH_WP_Optimize_View::form()
	 */
	public function content() {
		?>
		<h3>Footer</h3>
		
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label>启用/禁用</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_FOOTER[footer_welcome]" <?php print (isset($this->options['footer_welcome'])&&$this->options['footer_welcome']=='yes'?'checked':'');?> /> 删除页脚"感谢使用WordPress进行创作"</label>		
					</td>
				</tr>
				<tr>
					<th scope="row"><label>启用/禁用</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_FOOTER[footer_update_info]" <?php print (isset($this->options['footer_update_info'])&&$this->options['footer_update_info']=='yes'?'checked':'');?> /> 删除页脚 wordpress 版本信息，更新信息</label>		
					</td>
				</tr>
			</tbody>
		</table>
		
		<?php 
	}
}