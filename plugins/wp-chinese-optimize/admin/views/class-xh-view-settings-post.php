<?php
if (! defined ( 'ABSPATH' ))
	exit (); // Exit if accessed directly

class XH_WP_Optimize_View_Settings_Post extends XH_WP_Optimize_View_Form_Native{
	public function __construct(){
		$this->id ='XH_WP_OPTIMIZE_POST';
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
					
			),
			array(
					'name'=>'Post',
					'url'=>admin_url('admin.php?page=xh_wp_optimize&section=post'),
					'selected'=>1
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
		<h3>Post</h3>
		
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label>版本修订历史（revision）</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_POST[revision]" <?php print (isset($this->options['revision'])&&$this->options['revision']=='yes'?'checked':'');?> /> 禁用版本修订历史（revision）</label>		
					</td>
				</tr>
				<tr>
					<th scope="row"><label>自动保存（autosave）</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_POST[autosave]" <?php print (isset($this->options['autosave'])&&$this->options['autosave']=='yes'?'checked':'');?> /> 禁用自动保存（autosave）</label>		
					</td>
				</tr>
				<tr>
					<th scope="row"><label>自动草稿（auto-draft）</label></th>
					<td>
					<label><input disabled type="checkbox" value="yes" name="XH_WP_OPTIMIZE_POST[autodraft]" <?php print (isset($this->options['autodraft'])&&$this->options['autodraft']=='yes'?'checked':'');?> /> 禁用自动草稿（auto-draft）</label>		
					</td>
				</tr>
				<tr>
					<th scope="row"><label>XML-RPC离线发布功能</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_POST[xml_rpc]" <?php print (isset($this->options['xml_rpc'])&&$this->options['xml_rpc']=='yes'?'checked':'');?> /> 禁用XML-RPC离线发布功能</label>		
					</td>
				</tr>
			</tbody>
		</table>
		
		<?php 
	}
}