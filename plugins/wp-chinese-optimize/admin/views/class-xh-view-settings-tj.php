<?php
if (! defined ( 'ABSPATH' ))
	exit (); // Exit if accessed directly

class XH_WP_Optimize_View_Settings_TJ extends XH_WP_Optimize_View_Form_Native{
	public function __construct(){
		$this->id ='XH_WP_OPTIMIZE_ALL';
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
					'selected'=>1
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
		<h3>全局</h3>
		
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label>cron 定时任务</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_ALL[cron]" <?php print (isset($this->options['cron'])&&$this->options['cron']=='yes'?'checked':'');?> /> 移除cron 定时任务</label>		
					<hr/>
					<p>若系统中没有使用定时任务，可开启此项</p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label>网站/插件/主题自动更新</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_ALL[auto_update]" <?php print (isset($this->options['auto_update'])&&$this->options['auto_update']=='yes'?'checked':'');?> /> 关闭网站/插件/主题自动更新</label>		
					<hr/>
					<p>网站/插件自动更新检查会拖慢网站后台的打开速度，你可以进入 <a href="<?php print admin_url('update-core.php')?>" target="_blank"><?php print admin_url('update-core.php')?></a>手动检查更新</p>
					</td>
				</tr>
				<tr>
					<th scope="row"><label>Html压缩</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_ALL[html_zip]" <?php print (isset($this->options['html_zip'])&&$this->options['html_zip']=='yes'?'checked':'');?> /> 启用html压缩</label>				
					</td>
				</tr>
				<tr>
					<th scope="row"><label>谷歌字体</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_ALL[disable_google_fonts]" <?php print (isset($this->options['disable_google_fonts'])&&$this->options['disable_google_fonts']=='yes'?'checked':'');?> /> 禁用谷歌字体</label>		
					<hr/>
					<p>开启此项前，必须开启“Html压缩”</p>
					</td>
				</tr>
			</tbody>
		</table>
		
		<?php 
	}
}