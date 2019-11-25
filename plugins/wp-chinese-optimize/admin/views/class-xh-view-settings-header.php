<?php
if (! defined ( 'ABSPATH' ))
	exit (); // Exit if accessed directly

class XH_WP_Optimize_View_Settings_Header extends XH_WP_Optimize_View_Form_Native{
	public function __construct(){
		$this->id ='XH_WP_OPTIMIZE_HEADER';
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
					'selected'=>1
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
		<h3>Header</h3>
		
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><label>用户头像</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[get_avatar]" <?php print (isset($this->options['get_avatar'])&&$this->options['get_avatar']=='yes'?'checked':'');?> /> 更改为多说gravatar头像</label>		
					</td>
				</tr>
				
				<tr>
					<th scope="row"><label>generator</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[generator]" <?php print (isset($this->options['generator'])&&$this->options['generator']=='yes'?'checked':'');?> /> 移除generator</label>	
					<br/>
					<p>在head区域，移除如下代码： &lt;meta name="generator" content="WordPress 3.1.3" /&gt;</p>	
					</td>
				</tr>
				<tr>
					<th scope="row"><label>离线编辑器开放接口</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[rsd_link]" <?php print (isset($this->options['rsd_link'])&&$this->options['rsd_link']=='yes'?'checked':'');?> /> 移除离线编辑器开放接口</label>	
					<br/>
					<p>在head区域，移除如下代码：&lt;link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://example.com/xmlrpc.php?rsd" /&gt;
					 &lt;link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://example.com/wp-includes/wlwmanifest.xml" /&gt;</p>	
					</td>
				</tr>
				<tr>
					<th scope="row"><label>feed</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[feed]" <?php print (isset($this->options['feed'])&&$this->options['feed']=='yes'?'checked':'');?> /> 移除feed</label>	
					<br/>
					<p>在head区域，移除如下代码： &lt;link rel="alternate" type="application/rss+xml" title="test &raquo; Feed" href="http://localhost/feed/" /&gt;
&lt;link rel="alternate" type="application/rss+xml" title="test &raquo; 评论Feed" href="http://localhost/comments/feed/" /&gt;</p>	
					</td>
				</tr>
				<tr>
					<th scope="row"><label>前后文、第一篇文章、主页meta信息</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[post_meta]" <?php print (isset($this->options['post_meta'])&&$this->options['post_meta']=='yes'?'checked':'');?> /> 移除前后文、第一篇文章、主页meta信息</label>	
					<br/>
					<p>在head区域，移除如下代码： &lt;link rel='prev' title='xxxx' href='http://localhost/xxxx' /&gt;
					 &lt;link rel='shortlink' href='http://localhost/xxxx' /&gt;</p>	
					</td>
				</tr>
				<tr>
					<th scope="row"><label>canonical标签</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[canonical]" <?php print (isset($this->options['canonical'])&&$this->options['canonical']=='yes'?'checked':'');?> /> 移除canonical标签</label>	
					<br/>
					<p>在head区域，移除如下代码：&lt;link rel="canonical" href="http://localhost/xxx"  /&gt;</p>	
					</td>
				</tr>
				<tr>
					<th scope="row"><label>auto-embeds</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[auto-embeds]" <?php print (isset($this->options['auto-embeds'])&&$this->options['auto-embeds']=='yes'?'checked':'');?> /> 移除auto-embeds</label>	
					<br/><p> WordPress Easy Embeds 支持的网站大部分都是国外的网站，对于我们用处也不大</p>
					</td>
				</tr>
				
				<tr>
					<th scope="row"><label>顶部菜单 wordpress logo</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[wp-logo]" <?php print (isset($this->options['wp-logo'])&&$this->options['wp-logo']=='yes'?'checked':'');?> /> 移除顶部菜单 wordpress logo</label>				
					</td>
				</tr>
				
				<tr>
					<th scope="row"><label>顶部菜单</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[wp-top-menu]" <?php print (isset($this->options['wp-top-menu'])&&$this->options['wp-top-menu']=='yes'?'checked':'');?> /> 在访问前端时，移除顶部菜单</label>				
					</td>
				</tr>
				
				<tr>
					<th scope="row"><label>Wordpress更新提示</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[wp-update-info]" <?php print (isset($this->options['wp-update-info'])&&$this->options['wp-update-info']=='yes'?'checked':'');?> /> 移除Wordpress更新提示</label>				
					</td>
				</tr>
				
				<tr>
					<th scope="row"><label>Wordpress emoji 表情</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[wpemoji]" <?php print (isset($this->options['wpemoji'])&&$this->options['wpemoji']=='yes'?'checked':'');?> /> 移除Wordpress emoji 表情</label>
					<br/><p>影响加载速度</p>				
					</td>
				</tr>
				
				<tr>
					<th scope="row"><label>REST API</label></th>
					<td>
					<label><input type="checkbox" value="yes" name="XH_WP_OPTIMIZE_HEADER[rest_api]" <?php print (isset($this->options['rest_api'])&&$this->options['rest_api']=='yes'?'checked':'');?> /> 移除REST API filters</label>
					<br/><p>若未使用REST API，可禁用</p>				
					</td>
				</tr>
			</tbody>
		</table>
		
		<?php 
	}
}